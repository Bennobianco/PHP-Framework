<?php

session_start();
require __DIR__ . "/../init.php";



/*set_error_handler(function ($severity, $message, $file, $line) {
    throw new \ErrorException($message, $severity, $severity, $file, $line);
}); */

/*$pathInfo = strrchr($_SERVER['REQUEST_URI'], '/');
echo "<pre>";
print_r($pathInfo);
echo "</pre>";
die();*/

try {
  $pathInfo = $_SERVER["PATH_INFO"];
} catch (\Exception $e) {
  $pathInfo = "/index";
}
//var_dump($_SERVER);
//$pathInfo = $_SERVER["PATH_INFO"];

//$arr = get_defined_vars();
//print_r($arr["_SERVER"]);

$routes = [
  '/login' => [
    'controller' => 'loginController',
    'method' => 'login'
  ],
  '/logout' => [
    'controller' => 'loginController',
    'method' => 'logout'
  ],
  '/dashboard' => [
    'controller' => 'loginController',
    'method' => 'dashboard'
  ],
  '/index' => [
    'controller' => 'postsController',
    'method' => 'index'
  ],
  '/archive' => [
    'controller' => 'postsController',
    'method' => 'archive'
  ],
  '/post' => [
    'controller'=> 'postsController',
    'method' => 'show'
  ],
  '/search' => [
    'controller'=> 'postsController',
    'method' => 'search'
  ],
  '/post-admin' => [
    'controller'=> 'postsAdminController',
    'method' => 'postAdmin'
  ],
  '/post-edit' => [
    'controller'=> 'postsAdminController',
    'method' => 'edit'
  ],
  '/post-new' => [
    'controller' => 'postsAdminController',
    'method' => 'new'
  ]
];

if (isset($routes[$pathInfo])){

  $route = $routes[$pathInfo];
  $controller = $container->make($route['controller']);
  $method = $route['method'];
  $controller->$method();
}
 ?>
