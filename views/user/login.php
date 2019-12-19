<?php require __DIR__."/../layout/header.php";?>
<br /><br /><br /><br /><br />
<div class="container">
<?php if (!empty($error)): ?>
  <h4>Die Kombination aus Benutzername und Passwort ist falsch.</h4>
  <?php endif; ?>

<form method="POST" method="login" class="form-horizontal">


    <h2>Login formular</h2>
    <form method="POST" method="login" class="form-horizontal">
      <div class="form-group">
        <label class="control-label col-sm-2" for="user">Email / Username:</label>
        <div class="col-sm-6">
          <input  type="text" name="username" class="form-control" id="user" placeholder="Enter username" >
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="password">Password:</label>
        <div class="col-sm-6">
          <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember me</label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">LOGIN</button>
        </div>
      </div>
    </form>
  </div>

<?php require __DIR__."/../layout/footer.php";?>
