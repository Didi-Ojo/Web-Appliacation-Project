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
		<div class = "content">
    		<h1>Login</h1>
    		<span style="color:red;">ERROR : Please check Username and Password and try again</span>
    		<form action="trylogin.php" method="POST">
      			<fieldset>
        			<legend>Login</legend>
        			Username </br ><input type="text" name="login" /></br >
        			Password </br ><input type="password" name="pass" /><br />
        			<input type="submit" value="Login" />
      			</fieldset>
    		</form>
    	</div>
        <div class ="footer"><small>&copyAyodotun Ojo </small> </div>
	</body>
</html>