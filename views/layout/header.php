<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>MixxedBlog · HirnRa</title>
    <link rel="shortcut icon" href="http://localhost/blog/views/img/favicon.ico">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/blog/">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  	<link href="https://fonts.googleapis.com/css?family=Dosis&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Atma|Paprika&display=swap" rel="stylesheet">
  	<script src='https://kit.fontawesome.com/a076d05399.js'></script>

  	<!-- JS for page up button -->
  	<script src='./../../views/js/scroll.js'></script>


    <!-- Bootstrap core CSS -->
	<link href="/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<!--<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">-->
<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

       @media (max-width:768px) {
     	 .m-visib{
      	  display: none;
     	 }
   	 }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./../../views/css/blog.css" rel="stylesheet">
    <link href="./../../views/css/search.css" rel="stylesheet">

  </head>
  <body>
  <div class="container" id="wrapper">
<header class="blog-header py-3">
  <div class="row flex-nowrap justify-content-between align-items-center">
    <div class="col-4 pt-1 m-visib">
      <!--<a class="text-muted" href="#">Subscribe</a>-->
    </div>
    <div class="col-4 text-center">
      <a class="blog-header-logo text-dark" href="index">MiXXedBlog</a>
    </div>
    <div class="col-4 d-flex justify-content-end align-items-center">
      <a class="text-muted" onclick="openSearch()" href="#" aria-label="Search">
        <svg xmlns="http://wwwonclick="openSearch()" .w3.org/2000/svg" width="20" height="20" fill="none"
        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
        stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"
        focusable="false"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
      </a>
      <a class="btn btn-sm btn-outline-secondary" href="post-admin">Sign in</a>
    </div>
  </div>

  <div id="myOverlay" class="overlay">
    <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
    <div class="overlay-content">
      <form action="/blog/public/index.php/search">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit" name ="submit" value = 'Search source code'><i class="fa fa-search"></i></button>
      </form>
    </div>
  </div>

  <script>
  function openSearch() {
    document.getElementById("myOverlay").style.display = "block";
  }

  function closeSearch() {
    document.getElementById("myOverlay").style.display = "none";
  }
  </script>

</header>

<?php include "navbar.php"; ?>
<?php include "TopUp.php"; ?>
