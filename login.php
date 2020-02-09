<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Login or Logout!</title>
    <style>
      .content{
        width: 900px;
        height: 500px;
        margin: 0 auto;
        margin-top: 60px;
        padding: 10px;
        background: #ffffff;
        border-radius: 20px;
      }
      body{
        background-color: #e6e6e6;
        font-family: Verdana,sans-serif;
      }
      .footer {
        width: 100%;
        margin: 0 auto;
        padding: 10px;
        background-color: #e6e6e6;
        text-align: right;
      }
    </style>
  </head>
  <body>
    <?php
      if (array_key_exists('loggedin', $_SESSION))
      {
    ?>
    <div class = "content">
      <p>Are you sure you want to log out? If so, then click this <a href="logout.php">link</a>!</p>
      <p>Otherwise <a href="home.php">click this</a> to go back to the main page.</p>
    </div>
    <?php
  } else {
    ?>
      <div class = "content">
        <h1>Login</h1>
        <form action="trylogin.php" method="POST" autocomplete="on">
          <fieldset>
            <legend>Login</legend>
            Username </br ><input type="text" name="login" /></br >
            Password </br ><input type="password" name="pass" /><br />
            <input type="submit" value="Login" />
          </fieldset>
        </form>
      </div>
<?php
  }
?>
    <div class ="footer"><small>&copy;Ayodotun Ojo</small> </div>
  </body>
</html>