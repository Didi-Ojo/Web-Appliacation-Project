<?php
  session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <!--This is a comment. Comments are not displayed in the browser-->
    <head>
        <title>
            Rio 2016: Medals
        </title>
        <link rel="stylesheet" type="text/css" href="style.css" /> 
    </head>
    <body class="withContent">
      <ul>
        <li class="nav"><a href="home.php">Home</a></li>
        <li class="nav"><a href="news.php">News</a></li>
        <li class="nav"><a class="active"href="medals.php">Medals</a></li>
        <li class="nav"><a href="gallery.php">Gallery</a></li>
        <li class="nav"><a href="events.php">Events</a></li>
        <li class="nav"><a href="athletes.php">Athletes</a></li>
        <li class="nav"><a href="contact.php">Contact Us</a></li>
        <li class="nav"><a href="admin/adminlogin.php">Admin</a></li>
        <li class="nav"style="float:right"><a href="login.php">Logout</a></li>
      </ul>

          
      <div class="content">   
        <div><center><img src="medal.jpg" alt="medals" width="500"/></center> <br><br></div>
        <p> 
          With more than 265 events completed, The United States has been awarded with over a hundred medals. 
          The total number of gold, silver and bronze medal to be awarded to competing athletes is 2,102
        </p>
  
        <p>
          Click here to view a table of the <a href="medals.xml"> Medal Count </a><br><br>
        </p>

        <!-- Use of AJAX to display top country dynamically -->
        <button type="button" onclick="loadDoc()">View top 10 countries</button>

        <p id="demo"></p>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/z2tXiPOgX80" frameborder="0" allowfullscreen></iframe>

      </div>


    <script>
      function loadDoc() {
        var xhttp, xmlDoc, txt, x, i;
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
              xmlDoc = xhttp.responseXML;
              txt = "";
              x = xmlDoc.getElementsByTagName("name");
                for (i = 0; i < x.length; i++) {
                  txt = txt + x[i].childNodes[0].nodeValue + "<br>";
                }
              document.getElementById("demo").innerHTML = txt;
            }
      };
      xhttp.open("GET", "medals.xml", true);
      xhttp.send();
    }
    </script>
    <br><br><div class ="footer"><small>&copy;Ayodotun Ojo</small> </div>
  </body>
</html>