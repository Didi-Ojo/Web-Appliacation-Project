<!DOCTYPE html>
<html>
    <head>
        <title>
            Contact Us
        </title>
        <link rel="stylesheet" type="text/css" href="style.css" /> 
    </head>
    <body class="withContent">
      <ul>
        <li class="nav"><a href="home.php">Home</a></li>
        <li class="nav"><a href="news.php">News</a></li>
        <li class="nav"><a href="medals.php">Medals</a></li>
        <li class="nav"><a href="gallery.php">Gallery</a></li>
        <li class="nav"><a href="events.php">Events</a></li>
        <li class="nav"><a href="athletes.php">Athletes</a></li>
        <li class="nav"><a class="active"href="contact.php">Contact Us</a></li>
        <li class="nav"><a href="admin/adminlogin.php">Admin</a></li>
        <li class="nav"style="float:right"><a href="login.php">Logout</a></li>
      </ul>

      <?php
        // define variables and set to empty values
        $nameErr = $emailErr = $genderErr = $websiteErr = "";
        $name = $email = $gender = $comment = $website = "";

        //validates name
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($_POST["name"])) {
            $nameErr = "Name is required"; 
          } 
          else {
            $name = test_input($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                $nameErr = "Only letters and white space allowed"; 
            }
          }
  
        //validates email
        if (empty($_POST["email"])) {
          $emailErr = "Email is required";
        } 
        else {
          $email = test_input($_POST["email"]);
          // check if e-mail address is well-formed
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format"; 
          }
        }
    
        //validates website
        if (empty($_POST["website"])) {
          $website = "";
        } 
        else {
          $website = test_input($_POST["website"]);
          // check if URL address syntax is valid
          if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
            $websiteErr = "Invalid URL"; 
          }    
        }

        if (empty($_POST["comment"])) {
          $comment = "";
        } 
        else {
          $comment = test_input($_POST["comment"]);
        }

        if (empty($_POST["gender"])) {
          $genderErr = "Gender is required";
        } 
        else {
          $gender = test_input($_POST["gender"]);
        }
      }

      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

      //If all entries are valid i.e no error
      if ((isset($_REQUEST['email'])) && $nameErr=="" && $emailErr=="" && $websiteErr=="" &&$genderErr=="") {
  
      //Email information
      $admin_email = "diddieojo@gmail.com";
      $email = $_REQUEST['email'];
      $comment = $_REQUEST['comment'];
  
      //send email
      mail($admin_email, "Project 334", "Name: ".$name. "\nComment: ".$comment."\nEmail: ".$email. "\nGender: ".$gender,
        "From:" . $email);
  
      //Email response
      echo "<br><br><br>Thank you for contacting us!<br>We will get back to you shortly :)";
  }
  
  //if entry is not valid display the form
      else  {
    ?>
      <div class="content">
      <h2>Contact Us</h2><hr>
      <p><span style="color: red;">*</span>required field</p>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
          Name: <input type="text" name="name">
          <span style="color: red;">* <?php echo $nameErr;?></span>
          <br><br>

          E-mail: <input type="text" name="email">
          <span style="color: red;">* <?php echo $emailErr;?></span>
          <br><br>

          Website: <input type="text" name="website">
          <span style="color: red;"><?php echo $websiteErr;?></span>
          <br><br>

          Comment: <textarea name="comment" rows="5" cols="40"></textarea>
          <br><br>

          Gender:
          <input type="radio" name="gender" value="female">Female
          <input type="radio" name="gender" value="male">Male
          <span style="color: red;">* <?php echo $genderErr;?></span>
          <br><br>

          <input type="submit" name="submit" value="Submit">  
      </form>
      </div>
      <?php
      }
    ?>
      <br><br><div class ="footer"><small>&copy;Ayodotun Ojo</small> </div>
    </body>
</html>