<?php

namespace App\Core\Database;

class QueryBuilder
{
    protected $connection;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    public function selectAll($table) : array
    {
        $statement = $this->connection->prepare("select * from {$table}");
        $statement->execute();
        $tasks = $statement->fetchAll(\PDO::FETCH_CLASS);
        $this->connection = null;

        return $tasks;
    }

    public function insert($table, $parameters)
    {
        $query = sprintf(
            "insert into %s (%s) values (%s)",
            $table,
            implode(',', array_keys($parameters)),
            ':'.implode(',:', array_keys($parameters)),
        );
        
        try {
            $statement = $this->connection->prepare($query);
            $statement->execute($parameters);
            $this->connection = null;
        } catch (\PDOException $e) {
            die("there is an error occured while trying to insert");
        }
    }
}
