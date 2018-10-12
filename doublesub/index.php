
<!doctype html>
<html>
  <head>

        <title>CSRF Protection via Double Submit Cookies Patterns</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="public/css/bootstrap.min.css">
        <script src="public/js/jquery.min.js"></script>
        <script src="public/js/bootstrap.min.js"></script>


    </head>

    <body>
    <style>

      body {

          background-color: skyblue;

      }

    </style>

      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="index.php">CSRF Protection using Double Submit Cookies Patterns </a>
          </div>
          <ul class="nav navbar-nav">

            <?php
              if(!isset($_COOKIE['session_cookie'])) {
                echo "<li><a href='profile.php'></t>Profile</t></a></li>";
              }
            ?>

          </ul>
          <ul class="nav navbar-nav navbar-right">

          <?php
            if(!isset($_COOKIE['session_cookie'])) {
              echo "<li><a href='login.php'> Log In </a></li>";
            }
          ?>
          </ul>
        </div>
      </nav>
	  <div>
	  <h1 align="center">CSRF Protection using Double Submit Cookies Patterns </h1>
	  <p style="padding: 50px"> When a user logs into the site, a session is created and the session ID is set as a cookie in the browser. 
	  At the same time, another cookie is set for the CSRF token.
Next, when the user submits a secure form, this token is extracted from the cookie and is set as a hidden input field in the HTML. 
This cookie cannot be set as HttpOnly as the
 clientside script requires to access this because in this scenario, the token endpoint does not exist and the server has no 
 record of the generated token for this session.

The server will validate the token sent as a form parameter against the cookie value and authorize the action to be completed. 
A cross-origin attacker cannot read any data sent from the server or modify cookie values, per the same-origin policy.</p>
	</div>
    </body>
  <html>
