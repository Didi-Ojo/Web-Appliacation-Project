<?php
session_start();

//If both login and password were entered
if (
  count($_POST) == 2 &&
  array_key_exists('login', $_POST) &&
  array_key_exists('pass', $_POST)
)
{

  $servername="localhost"; // server name 
  $username="ojoa_project334"; // Mysql username 
  $password="mysql"; // Mysql password 
  $dbname="ojoa_project334"; // Database name  

  // Connect to server and select databse.
  $conn = new mysqli($servername, $username, $password, $dbname);

  // username and password sent from form 
  $username=$_POST['login']; 
  $password=$_POST['pass']; 

  // To protect MySQL injection attack
  $username = stripslashes($username);
  $password = stripslashes($password);
  $username = mysqli_real_escape_string($conn,$username);
  $password = mysqli_real_escape_string($conn,$password);
  $sql="SELECT * FROM Users WHERE username='$username' AND password='$password'";

  $result = $conn->query($sql);

// User Id is unique there if user is valid, only one row should be found
  if ($result->num_rows == 1)
  {
    $_SESSION['loggedin'] = $login;
    header('Location: home.php');
    exit(0);
  }
  else
  {
    unset($_SESSION['loggedin']);
    header('Location: incorrectlogin.php');
    exit(0); 
  }
}
else
{
  unset($_SESSION['loggedin']);
  header('Location: login.php');
  exit(0);
}

?>