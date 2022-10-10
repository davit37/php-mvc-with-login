<?php

namespace Davit37\PhpMvc\Repository;

use PHPUnit\Framework\TestCase;
use Davit37\PhpMvc\Config\Database;
use Davit37\PhpMvc\Domain\User;

class UserRepositoryTest extends TestCase
{
    private UserRepository $userRepository;

    protected function setUp(): void 
    {
        $this->userRepository = new UserRepository(Database::getConnection());
        $this->userRepository->deleteAll();
    }

    public function testSaveSuccess()
    {
        $user = new User();

        $user->name = "davit";
        $user->password = "rahasia";
        
        $user = $this->userRepository->save($user);

        $result = $this->userRepository->findById($user->id);

        self::assertEquals($user->name, $result->name);
        self::assertEquals($user->password, $result->password);
    }

    public function testFindByIdNotFound()
    {
        $user = $this->userRepository->findById("not found");

        self::assertNull($user);
    }
}