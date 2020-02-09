<!DOCTYPE html>
<html>
  <head>

    <meta name="viewport"
    content="user-scalable=1.0,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
    <meta charset="UTF-8">
    <title>editor</title>
    

    <link rel="stylesheet" type="text/css" href="./../css/editor.css">

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
      <h1>editor</h1>

      <form method="POST" action="editor.php">

        <input type="text" name="title" class="panel-title"></input>
        <textarea name = "content"  class="form-control"></textarea>
        <br />
        <input type="submit" value="Neuer Post" class="btn btn-primary"/>


        <div id="editor" class="pell"></div>

        <div style="margin-top:20px;">
          <h3>Text output:</h3>
          <div name = 'hallo' id="text-output"></div>
        </div>
        <div style="margin-top:20px;">
          <h3>HTML output:</h3>
          <pre id="html-output"></pre>
        </div>
        <?php
        var_dump($_POST['title']);
        var_dump($_POST['content']);
        ?>
      </from>
    </div>


    <script src='./../js/editor.js'></script>
    <script>
      var editor = window.pell.init({
        element: document.getElementById('editor'),
        defaultParagraphSeparator: 'p',
        onChange: function (html) {
          document.getElementById('text-output').innerHTML = html
          document.getElementById('html-output').textContent = html
        }
      })
    </script>

  </body>
</html>
