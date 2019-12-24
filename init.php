<?php

require __DIR__ ."/autoload.php";
//require __DIR__ ."/database.php";

function e($str){
  return htmlentities($str, ENT_QUOTES, 'UTF-8');
}


// Function to create read more link of a content with link to full page
function readMore($content, $limit, $id) {
  $content = substr($content,0,$limit);
  $content = substr($content,0,strrpos($content,' '));
  $content = $content." <a href='post?id=$id'>Read More...</a>";
  return $content;
}

function shortContent($content, $limit) {
  $content = substr($content,0,$limit);
  $content = substr($content,0,strrpos($content,' '));
  return $content;
}


$container = new App\Core\Container();

// für testzwecke kann hier ein repository angelegt werden.
/*$usersRepository = $container->make("usersRepository");
var_dump($usersRepository->findByUsername("Birg"));
//var_dump($usersRepository->find(2));
die();*/

?>
