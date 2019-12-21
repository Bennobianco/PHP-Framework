<?php

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

  public function fetchTable(){
    $table = $this->getTableName();
    $model = $this->getModelName();
    $stmt = $this->pdo->query("SELECT * FROM `$table`");
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
