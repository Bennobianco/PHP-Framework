<?php
namespace App\Post;
//use ArrayAccess;
use App\Core\AbstractModel;

  class PostModel extends AbstractModel{

    public $id;
    public $title;
    public $content;
    public $created_at;

  }
 ?>
