<?php

namespace Davit37\PhpMvc\Repository;

use Davit37\PhpMvc\Domain\User;

class UserRepository
{
    private \PDO $connection;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    public function save(User $user): User 
    {
        $statement = $this->connection->prepare("INSERT INTO users(name, password) values(?, ?)");
        $statement->execute([
            $user->name, $user->password
        ]);
        return $this->findById($this->connection->lastInsertId());
    }

    public function findById(string $id): ?User
    {
        $statement = $this->connection->prepare("SELECT id, name, password FROM users WHERE id = ?");

        $statement->execute([$id]);

        try{

            if($row = $statement->fetch()) {
                $user = new User();
                $user->id = $row['id'];
                $user->name = $row['name'];
                $user->password = $row['password'];
                return $user;
            }else{
                return null;
            }

        }finally{
            $statement->closeCursor();
        }

    }

    public function deleteAll(): void 
    {
        $this->connection->exec("DELETE FROM users");

    }
}