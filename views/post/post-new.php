<?php require __DIR__."/../user/dashboard.php"; ?>

  <head>

    <style>
      body {
        margin: 0;
        padding: 0;
      }

      .content {
        box-sizing: border-box;
        margin: 0 auto;
        max-width: 600px;
        padding: 20px;
      }

      #html-output {
        white-space: pre-wrap;
      }
    </style>

  </head>
  <body>

    <div class="content">

      <?php
        if(!empty($savedSuccess)): ?>
      <p>Der Post wurde erfolgreich gespeichert</p>
      <?php endif; ?>

      <form name="test" method="POST" action="post-new">

        <!--<input type="text" name="title" class="panel-title"></input>
        <textarea name = "content"  class="form-control"></textarea>
        <br />
        <input type="submit" value="Neuer Post" class="btn btn-primary"/>
        -->
        <h2>title</h2>
        <input type="text" name="title" class="panel-title"></input>
        <h2>editor</h2>
        <div id="editor" class="pell"></div>

        <div style="margin-top:20px;">
          <!--<h3>Text output:</h3>
          <div name = 'hallo' id="text-output"></div>
        </div>
        <div style="margin-top:20px;">
          <h3>HTML output:</h3>
          <pre id="html-output"></pre>
        </div>-->
        <textarea id="area"name = "content" class="form-control"></textarea>
        <br />
        <input type="submit" value="Neuer Post" class="btn btn-primary"/>
        <?php
          //var_dump($_POST['content']);
          //echo($_POST['content']);
        ?>
      </form>
    </div>


    <script src='./../../views/js/editor.js'></script>
    <script>
      var editor = window.pell.init({
        element: document.getElementById('editor'),
        defaultParagraphSeparator: 'p',
        onChange: function (html) {
          //document.getElementById('text-output').innerHTML = html
          //document.getElementById('html-output').textContent = html
          document.getElementById('area').value = html
        }
      })
    </script>
<a href="post-admin">Back to Postst</a>
  </body>
</html>
