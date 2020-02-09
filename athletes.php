<!DOCTYPE html>
<html>
    <head>
        <title>
            Rio 2016: Athletes
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
            <li class="nav"><a class="active" href="athletes.php">Athletes</a></li>
            <li class="nav"><a href="contact.php">Contact Us</a></li>
            <li class="nav"><a href="admin/adminlogin.php">Admin</a></li>
            <li class="nav"style="float:right"><a href="login.php">Logout</a></li>
        </ul>

        <div class="content">    
        <?php
            echo"<h2>Athletes</h2><hr>";
            echo "Here are some of the top athletes<br><br>";

            //Atheletes are stored in database and are printed ot
            $servername = "localhost";      //severnane
            $username = "ojoa_project334";             //username
            $password = "mysql";            //password
            $dbname = "ojoa_project334";           //database name

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 

            //To print out all athletes
            $sql = "SELECT name, age, sport, gold, silver, bronze FROM athletes";
            $result = $conn->query($sql);

            //if database does contains athletes
            if ($result->num_rows > 0) {
            // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<br> Name: ". $row["name"]. 
                    "<br>Age: ". $row["age"]. 
                    "<br>Sport:" .$row["sport"]. 
                    "<br>Gold:" .$row["gold"]. 
                    "<br>Silver:" .$row["silver"]. 
                    "<br>Bronze:" .$row["bronze"]. 
                    "<br><br><br>";
                }
        } else {
            echo "No data currently available for athletes";
        }

        $conn->close();
        ?>
        </div>
        <div> Login as <a href="admin/adminlogin.php">Admin</a> <br><br></div>
        <div class ="footer"><small>&copy;Ayodotun Ojo </small> </div>
    </body>
</html>