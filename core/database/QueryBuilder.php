<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
    // test select 1 record
    public function selectOne($table, $id)
    {
        $statement = $this->pdo->prepare("select * from {$table} where id={$id}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'insert into %s (%s) value (%s)',
            $table ,
            implode(', ', array_keys($parameters)),
            ':'. implode(', :', array_keys($parameters)), 
        );

        try{
            $statement =  $this->pdo->prepare($sql);
        
            $statement->execute($parameters);
        }catch(Exception $e){
            die('Whoops, somthig went wrong'); 
        }
        
    }
}