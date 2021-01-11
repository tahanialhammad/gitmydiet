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

  // test selectOne v-4
  public function selectOne($select, $condition1, $condition2)
  {
      $statement = $this->pdo->prepare("select $select where {$condition1}={$condition2}");
      $statement->execute();
      return $statement->fetchAll(PDO::FETCH_CLASS);
  }

  //test login 2
  public function query()
  {
      $statement = $this->pdo->prepare("SELECT * FROM users WHERE email='{$_REQUEST['email']}'");
      //var_dump($statement);
      $statement->execute();

      return $statement->fetchAll(PDO::FETCH_CLASS);
  }
    //test select all comments per diet 
    public function selectAllCom($table)
    {
        $statement = $this->pdo->prepare("select * from {$table} where diet_id='{$_REQUEST['id']}'");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    //teset delet
    public function delete($table)
    {
        $statement = $this->pdo->prepare("DELETE FROM $table WHERE id={$_GET['id']}");
        $statement->execute();
        echo "Record deleted successfully";
    }

    //test delet2
    public function deleteOneMydiet($table, $dietId, $userId)
    {
        $statement = $this->pdo->prepare("DELETE FROM $table WHERE diet_id={$dietId} and user_id={$userId} ");
        $statement->execute();
        echo "Record deleted successfully";
    }

    // SELECT * FROM mydietdb.alldiets
    // left join (
    // SELECT diet_id, sum(likes) likes FROM mydietdb.dietlike group by diet_id
    // ) likes  on likes.diet_id= alldiets.id;
    
    public function selectSome($someqry)
    {
        $statement = $this->pdo->prepare("$someqry");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    //test Join 
    public function selectJoin($table1 , $table2, $on1 , $on2)
    {
        $statement = $this->pdo->prepare("SELECT * FROM $table1 JOIN $table2 on {$table1}.{$on1} = {$table2}.{$on2}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    // test join one
    public function selectoneJoin($table1 , $table2, $on1 , $on2)
    {
        $statement = $this->pdo->prepare("SELECT * FROM $table1 JOIN $table2 on {$on1} = {$on2}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
    // SELECT * FROM mydietdb.alldiets
    // JOIN
    // ( SELECT max(likes) best FROM mydietdb.alldiets) mostlike
    // ON mostlike.best = alldiets.likes;
    // -- SELECT max(likes) best FROM mydietdb.alldiets;
    


//Insert To DB
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