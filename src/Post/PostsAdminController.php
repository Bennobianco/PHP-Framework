<?php

namespace App\Post;
use App\Core\AbstractController;
use App\User\LoginService;

class PostsAdminController extends AbstractController {
  public function __construct(
    PostsRepository $postsRepository,
    LoginService $loginService){
    $this->postsRepository = $postsRepository;
    $this->loginService = $loginService;
  }

  public function postAdmin(){
    $user=$this->loginService->check();
    $posts = $this->postsRepository->fetchTable();
    $this->render("post/post-admin",[
      'posts' => $posts,
      'user'=>$user
    ]);
  }

  public function edit(){
    $user = $this->loginService->check();
    $id = ($_GET['id']);
    $post = $this->postsRepository->find($id);
    if (!$post) {
      return false;
    }
    $savedSuccess = false;
    if (!empty($_POST['title']) AND !empty($_POST['content'])) {
      $content = $_POST['content'];
      $title = $_POST['title'];
      $this->postsRepository->editPosts($id, $content, $title);
      $savedSuccess = true;
    }


    $post = $this->postsRepository->find($id);
    //$comments = $this->commentsRepository->allByPost($id);

    $this->render("post/post-edit",[
      'post' => $post,
      'savedSuccess' =>$savedSuccess,
      'user'=>$user
    ]);
  }

  public function new(){
    $user = $this->loginService->check();
    //$id = ($_GET['id']);
    //$post = $this->postsRepository->find($id);
    //if (!$post) {
      //return false;
    //}

    //echo "Hallo";
    $savedSuccess = false;
    if (isset($_GET['id'])){
      $id = ($_GET['id']);
      $post = $this->postsRepository->find($id);
    }
    //$id = ($_GET['id']);
    if (isset($_POST['content']) AND isset($_POST['title'])){
      $content = $_POST['content'];
      $title = $_POST['title'];
      $this->postsRepository->newPost($title, $content);
      $savedSuccess = true;
    }

    //$post = $this->postsRepository->find($id);
    $this->render("post/post-new",[
      //'post' => $post
      'savedSuccess' =>$savedSuccess,
      'user'=>$user
    ]);

  }
}

 ?>
