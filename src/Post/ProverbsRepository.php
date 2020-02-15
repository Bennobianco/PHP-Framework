<?php
namespace App\Post;
use App\Core\AbstractRepository;
use PDO;

class ProverbsRepository extends AbstractRepository{

  public function getTableName()
  {
    return "proverbs";
  }

  public function getModelName()
  {
    return "App\\Post\\ProverbModel";
  }


}

 ?>
