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
        $statement = $this->pdo->prepare("select * from {$table} order by id desc");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
    // // test select 1
    // public function selectOne($table, $id)
    // {
    //     $statement = $this->pdo->prepare("select * from {$table} where id={$id}");
    //     $statement->execute();
    //     return $statement->fetchAll(PDO::FETCH_CLASS);
    // }
      // test select 2
      public function selectOne($table)
      {
          $statement = $this->pdo->prepare("select * from {$table} where {$table}.id={$_REQUEST['id']}");
          $statement->execute();
          return $statement->fetchAll(PDO::FETCH_CLASS);
      }
    //test select all comments per diet 
    public function selectAllCom($table)
    {
        $statement = $this->pdo->prepare("select * from {$table} where diet_id={$_REQUEST['id']}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    //test global select one recored and check item
    public function checkItems($select, $from, $value)
    {
        $statement = $this->pdo->prepare("SELECT $select FROM $from WHERE $select=?");
        $statement->execute(array($value));
        $count= $statement->rowCount();
        // echo $count;
        return $count;
    }
//count records number by using column name
    public function countItem($item, $table)
    {
        $statement = $this->pdo->prepare("SELECT COUNT($item) FROM $table");
        $statement->execute();
        return $statement->fetchColumn();
    }
//teset delet
    public function delete($table)
    {
        $statement = $this->pdo->prepare("DELETE FROM $table WHERE id={$_GET['id']}");
        $statement->execute();
        echo "Record deleted successfully";
    }

    //test update like
    public function like($table)
    {
        $statement = $this->pdo->prepare("UPDATE $table SET likes=likes+1 WHERE id={$_GET['id']}");
        $statement->execute();
        echo "Record update successfully";
    }
    // //test Select where
    // public function select($table1 ,$col, $condition)
    // {
    //     $statement = $this->pdo->prepare("SELECT * FROM $table1 WHERE {$col}={$condition}");
    //     $statement->execute();
    //     return $statement->fetchAll(PDO::FETCH_CLASS);
    // }
    //test Join 
    public function selectJoin($table1 , $table2, $on1 , $on2)
    {
        $statement = $this->pdo->prepare("SELECT * FROM $table1 JOIN $table2 on {$table1}.{$on1} = {$table2}.{$on2}");
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