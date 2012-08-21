<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>demo jquery password revelator</title>
    <!-- <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0-beta.1/themes/base/jquery-ui.css" /> -->
    <link rel="stylesheet" href="niceforms/niceforms-default.css" />
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../css/jquerypasswordrevelator.css" />
  </head>
  <body>
    <div id="container">
      <form action="#">
        <fieldset>
          <legend>Demo jquery password revelator</legend>
          <dl>
            <dt><label for="login">Login:</label></dt>
            <dd><input type="text" id="login" placeholder="login" /></dd>
          </dl>
          <dl>
            <dt><label for="password">Password:</label></dt>
            <dd><input type="password" id="password" placeholder="password" /></dd>
          </dl>
          <dl>
            <dt><label for="password2">Password:</label></dt>
            <dd><input type="password" id="password2" placeholder="password check" /></dd>
          </dl>
          <input type="submit" class="NFButton" />
        </fieldset>
      </form>
      <p>This form is stylized with <a href="http://www.emblematiq.com/lab/niceforms/demo/v20/niceforms.html">Niceforms</a> - <a href="https://github.com/emblematiq/Niceforms">Niceforms GitHub</a></p>
    </div>

    <div class="input-append">
      <input size="16" type="text"><button class="btn" type="button">Go!</button>
    </div>

    <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
    <!-- <script type="text/javascript" src="http://code.jquery.com/ui/1.8.23/jquery-ui.min.js"></script> -->
    <script type="text/javascript" src="niceforms/niceforms.js"></script>
    <script type="text/javascript" src="../js/jquerypasswordrevelator.js"></script>
    <script type="text/javascript">
      $('password').passwordrevelator();
    </script>
  </body>
</html>
