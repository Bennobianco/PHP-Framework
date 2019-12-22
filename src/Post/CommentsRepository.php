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

    /**
    ** ein Kommentar wird für einen Post erzeugt und dann der postID zugeordnet
    */

    public function insertForPost($postId, $content){
      $table = $this->getTableName();
      //var_dump($_POST['content']);
      if(!empty($_POST['content'])){
        $stmt = $this->pdo->prepare("INSERT INTO `$table` (`content`, `post_id`) VALUES (:content, :postId)");
        $stmt->execute([
          'content' => $content,
          'postId' => $postId
        ]);
    }
      //var_dump($stmt)

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
