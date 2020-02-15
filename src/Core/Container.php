<?php

namespace App\Core;

use PDO;
use App\Post\PostsRepository;
use App\Post\PostsController;
use App\Post\CommentsRepository;
use App\User\UsersRepository;
use App\User\LoginController;
use App\User\LoginService;
use App\Post\PostsAdminController;
use App\Post\ProverbsRepository;

class Container {

  private $recipts = [];
  private $instances = [];

  public function __construct()
  {
    $this->recipts = [
      'loginService'=> function(){
        return new LoginService(
          $this->make("usersRepository")
        );
      },
      'loginController' => function() {
        return new LoginController(
          $this->make('loginService')
        );
      },
      'postsController' => function() {
        return new PostsController(
          $this->make('postsRepository'),
          $this->make('commentsRepository'),
          $this->make('proverbsRepository')
        );
      },
      'postsAdminController' => function() {
        return new postsAdminController(
          $this->make('postsRepository'),
          $this->make("loginService")
        );
      },
      'proverbsRepository' => function(){
        return new ProverbsRepository(
          $this->make("pdo")
        );
      },
      'postsRepository' => function() {
        return new PostsRepository(
          $this->make("pdo")
        );
      },
      'commentsRepository' => function() {
        return new CommentsRepository(
          $this->make("pdo")
        );
      },
      'usersRepository' => function() {
        return new UsersRepository(
          $this->make("pdo")
        );
      },

      /*with PDO you have a common interface for different databases*/
      'pdo' => function() {
        $dbserver = 'localhost';
        $dbname = 'blog';
        $dblogin = 'blog';
        $dbpass = 'x73DeYJNlNOO8L92';
        try {
          $pdo = new PDO('mysql:host=' . $dbserver . ';dbname=' . $dbname . ';
          charset=utf8', $dblogin, $dbpass);
        } catch (PDOException $e) {
          # Konkrete Fehlermeldung $ex->getMessage() nur auf Testserver ausgeben, nicht "in Produktion":
          die('Die Datenbank ist momentan nicht erreichbar. ' .
          ($_SERVER['SERVER_NAME'] == 'localhost' ? htmlspecialchars($ex->getMessage()) : ''));
        }

        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $pdo;
      }
    ];
  }

  public function make($name)
  {
    if (!empty($this->instances[$name]))
    {
      return $this->instances[$name];
    }

    if (isset($this->recipts[$name])) {
      $this->instances[$name] = $this->recipts[$name]();
    }

    return $this->instances[$name];
  }
}
 ?>
