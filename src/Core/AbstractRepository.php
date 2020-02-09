<?php
/*
** class that deals with the connecting to the database
*/

namespace App\Core;
use PDO;

abstract class AbstractRepository{
  protected $pdo;

  public function __construct(PDO $pdo)
  {
    $this->pdo = $pdo;
  }

  abstract public function getTableName();

  abstract public function getModelName();

  /*returns an array containing all of the remaining rows in the result set*/
  public function fetchTable(){
    $table = $this->getTableName();
    $model = $this->getModelName();
    $stmt = $this->pdo->query("SELECT * FROM `$table`");
    
  /*Gibt Instanzen der angegebenen Klasse zurück, wobei die Spalten
  jeder Zeile den benannten Eigenschaften in der Klasse zugeordnet werden. */
    $posts = $stmt->fetchAll(PDO::FETCH_CLASS, "{$model}");
    return $posts;
  }

  public function fetchTableDESC(){
    $table = $this->getTableName();
    $model = $this->getModelName();
    $stmt = $this->pdo->query("SELECT * FROM `$table` ORDER BY `$table`.`created_at`  DESC");
    $posts = $stmt->fetchAll(PDO::FETCH_CLASS, "{$model}");
    return $posts;
  }


  public function find($id){
    $table = $this->getTableName();
    $model = $this->getModelName();
    $stmt = $this->pdo->prepare("SELECT * FROM `$table` WHERE id = :id");
    $stmt->execute(['id' => $id]);
    $stmt->setFetchMode(PDO::FETCH_CLASS, $model);
    $post = $stmt->fetch(PDO::FETCH_CLASS); //__Fetches the next row from a result set
    return $post;

  }

}

 ?>
