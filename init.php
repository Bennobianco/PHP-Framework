<?php

require __DIR__ ."/autoload.php";
require __DIR__ ."/database.php";

function e($str){
  return htmlentities($str, ENT_QUOTES, 'UTF-8');
}

$container = new App\Core\Container();

// für testzwecke kann hier ein repository angelegt werden.
/*$usersRepository = $container->make("usersRepository");
var_dump($usersRepository->findByUsername("Birg"));
//var_dump($usersRepository->find(2));
die();*/

?>
