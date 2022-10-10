<?php
namespace Davit37\PhpMvc\Repository;

abstract class AbstractRepository
{
    private \PDO $connection;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    abstract public function save(User $user) : User;
}