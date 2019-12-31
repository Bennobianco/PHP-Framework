<?php

namespace App\Post;
use App\Core\AbstractController;

class PostsController extends AbstractController {
  public function __construct(
    PostsRepository $postsRepository,
    CommentsRepository $commentsRepository){
    $this->postsRepository = $postsRepository;
    $this->commentsRepository =$commentsRepository;
  }

  public function index(){
    //$posts = $this->postsRepository->fetchPosts();
    $posts = $this->postsRepository->fetchTableDESC();
    $this->render("post/index",[
      'posts' => $posts
    ]);
  }

  public function archive(){
    $posts = $this->postsRepository->fetchTableDESC();
    $this->render("post/archive",[
      'posts' => $posts
    ]);
  }

  public function search(){
    $button = $_GET['submit'];
    $search = $_GET['search'];

    if( !$button ){
      echo "you didn't submit a keyword";
    }else {
      if (strlen($search) <= 1) {
        echo "search term too short";
      }else {
        //echo "You searched for <b> $search </b>";
        $posts = $this->postsRepository->searchPosts($search);
        $this->render("post/search",[
          'posts' => $posts,
          'search'=> $search
      ]);
      }
    }
  }



  public function show(){
    $id = ($_GET['id']);
    if (isset($_POST['content'])){
      $content = $_POST['content'];
      $this->commentsRepository->insertForPost($id, $content);
    }

    $post = $this->postsRepository->find($id);
    $comments = $this->commentsRepository->allByPost($id);

    $this->render("post/show",[
      'post' => $post,
      'comments' =>$comments
    ]);
  }
}

 ?>
