<?php

  /*
  Teil des Codes der mit der Datenbank zu tun hat.
  */

  namespace App\Post;
  use App\Core\AbstractRepository;
  use PDO;

  class CommentsRepository extends AbstractRepository{

    public function getTableName()
    {
      return "comments";
    }

    public function getModelName()
    {
      return "App\\Post\\CommentModel";
    }

    public function insertForPost($postId, $content){
      $table = $this->getTableName();
      $stmt = $this->pdo->prepare("INSERT INTO `$table` (`content`, `post_id`) VALUES (:content, :postId)");
      var_dump($stmt);
      $stmt->execute([
        'content' => $content,
        'postId' => $postId
      ]);
    }

    public function allByPost($id){
      $table = $this->getTableName();
      $model = $this->getModelName();
      $stmt = $this->pdo->prepare("SELECT * FROM `$table` WHERE post_id = :id");
      $stmt->execute(['id' => $id]);

      $comments = $stmt->fetchAll(PDO::FETCH_CLASS, $model);

      return $comments;
    }
  }
   ?>
