<?php
  namespace App\Post;
  use App\Core\AbstractRepository;
  use PDO;

  class PostsRepository extends AbstractRepository{

    public function getTableName()
    {
      return "posts";
    }

    public function getModelName()
    {
      return "App\\Post\\PostModel";
    }

    public function editPosts($id, $content, $title){

      $table = $this->getTableName();
      //$model = $this->getModelName();
      //$stmt = $this->pdo->prepare("UPDATE `$table` SET `content` = :content WHERE `posts`.`id` = :id");
      $stmt = $this->pdo->prepare("UPDATE `$table` SET `title` = '$title', `content` = '$content' WHERE `posts`.`id` = :id");
      //$stmt = $this->pdo->prepare("UPDATE `$table` SET `content` = '$content' WHERE `posts`.`id` = :id");
      $stmt->execute([
        'id' => $id
      ]);
    }

    public function update(PostModel $model){
      $table = $this->getTableName();

      $stmt = $this->pdo->prepare("UPDATE `{$table}` SET `content` = :content, `title` = :title WHERE `id` = :id");
      $stmt->execute([
        'content' => $model->content,
        'title' => $model->title,
        'id' => $model->id
      ]);
    }

  }



 ?>
