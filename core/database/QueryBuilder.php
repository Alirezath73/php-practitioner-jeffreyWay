<?php

class QueryBuilder
{
    protected $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function selectAll($table) : array
    {
        $statement = $this->connection->prepare("select * from {$table}");
        $statement->execute();
        $tasks = $statement->fetchAll(PDO::FETCH_CLASS);
        $this->connection = null;

        return $tasks;
    }
}
