<?php require __DIR__."/../layout/headerDashboard.php";?>
<nav class="navbar navbar-inverse">
 <div class="container-fluid">
   <div class="navbar-header">
     <a class="navbar-brand">dashboard</a>
   </div>
   <ul class="nav navbar-nav">
     <li class="active"><a >myBlog</a></li>
     <li><a href="#">New</a></li>
   </ul>

<ul class="nav navbar-nav navbar-right">
   <li class="dropdown">
           <a class="dropdown-toggle" data-toggle="dropdown" href="#">
             <?php echo ' Howdie, '.$user?>
           <span class="caret"></span></a>
           <ul class="dropdown-menu">
             <li><a href="logout">logout</a></li>
           </ul>
         </li>
   </ul>
 </div>
</nav>
