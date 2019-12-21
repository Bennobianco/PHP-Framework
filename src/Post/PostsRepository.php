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
      var_dump($stmt);
      //die();
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

  public function newPost($title, $content){
    $table = $this->getTableName();
    /*$stmt = $this->pdo->prepare(
      "INSERT INTO `posts` (`title`, `content`, `created_at`)
      VALUES (:title, :content, current_timestamp())"
    );*/
    //$created_at = current_timestamp();
    /*$stmt = $this->pdo->prepare(
      "INSERT INTO `posts` (`id`, `title`, `content`, `created_at`) VALUES (NULL, 'dfgdg', 'gdfgdgdfgdgdfgdfgdfgfdgfdgg', current_timestamp());"
    );*/
    //$title = "endlich";
    //$content = "lskjlakdjakjflkjfl";

    $stmt = $this->pdo->prepare("INSERT INTO `posts` (`content`, `title`) VALUES (:content, :title)");
    var_dump($stmt);
    $stmt->execute([
      'content' => $content,
      'title' => $title
    ]);

    var_dump($stmt);
    //die();
    /*$stmt->execute([
      'content' => 'sdfdf',
      'title' => 'afddfdf',
      'id' => 12,
      'created_at' => $created_at
    ]);*/
  }
}

 ?>
