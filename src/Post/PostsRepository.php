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
      $stmt = $this->pdo->prepare("UPDATE `$table` SET `title` = '$title',
        `content` = '$content' WHERE `posts`.`id` = :id");
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
    $stmt = $this->pdo->prepare("INSERT INTO `posts` (`content`, `title`) VALUES (:content, :title)");
    var_dump($stmt);
    $stmt->execute([
      'content' => $content,
      'title' => $title
    ]);

    var_dump($stmt);

  }

  public function searchPosts($search){
    $table = $this->getTableName();
    $model = $this->getModelName();
    $search_exploded = explode ( " ", $search );
    $construct = "";
        /*falls mehr als ein suchwort eingegeben wird*/
        $x = 0;
        foreach( $search_exploded as $search_each ) {
          $x++;
          if( $x == 1 ){
            $construct .= "(`title` LIKE '%$search_each%'";
            $construct .= " OR `content` LIKE '%$search_each%')";
          }
          else{
            $construct .= " AND (`title` LIKE '%$search_each%'";
            $construct .= " OR `content` LIKE '%$search_each%')";
            }
        }
            $construct = "SELECT * FROM `posts` WHERE  $construct";
            $stmt = $this->pdo->prepare ( $construct );
              //var_dump($stmt);
              $stmt->execute([
              ]);
              $foundnum = $stmt->rowCount();
              if ($foundnum == 0)
                     echo "Sorry, there are no matching result for <b> $search </b>. </br> </br> 1. Try more general words. for example: If you want to search 'how to create a website' then use general keyword like 'create' 'website' </br> 2. Try different words with similar  meaning </br> 3. Please check your spelling";
              else {
                echo "$foundnum results found !<p>";

                //$posts = $stmt->fetch()) {

                $posts = $stmt->fetchAll(PDO::FETCH_CLASS, "{$model}");
                    /*$title = $post ['title'];
                    $content = $post ['content'];
                    $id = $post ['id'];
                    echo "<a href='post?id=$id'>
                    <b> $title </b> </a> ";*/
                    return $posts;
                     // echo "<a href=''> <b> $content </b> </a> ";

              }
            }

}

 ?>
