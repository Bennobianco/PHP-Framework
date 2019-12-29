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
      $post = $this->postsRepository->searchPost($search);
    }
          $this->render("post/search",[
            'post' => $post
        ]);

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
