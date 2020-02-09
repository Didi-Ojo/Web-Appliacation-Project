<!DOCTYPE html>
<html>
    <head>
        <title>
            Rio 2016: Events
        </title>
        <link rel="stylesheet" type="text/css" href="style.css" /> 
    </head>
    <body class="withContent">
      <ul>
        <li class="nav"><a href="home.php">Home</a></li>
        <li class="nav"><a href="news.php">News</a></li>
        <li class="nav"><a href="medals.php">Medals</a></li>
        <li class="nav"><a href="gallery.php">Gallery</a></li>
        <li class="nav"><a class="active"href="events.php">Events</a></li>
        <li class="nav"><a href="athletes.php">Athletes</a></li>
        <li class="nav"><a href="contact.php">Contact Us</a></li>
         <li class="nav"><a href="admin/adminlogin.php">Admin</a></li>
        <li class="nav"style="float:right"><a href="login.php">Logout</a></li>
      </ul>

      <div class="content">
         <p><h2> Events</h2><hr></p>
          <div class="slideshow-container">

            <div class="mySlides fade">
              <div class="numbertext">1 of 5</div>
              <img src="slide1.jpg" style="width:620px; height:360px">
              <div class="text">Gymnastics</div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext">2 of 5</div>
              <img src="slide2.jpg" style="width:620px; height:360px">
              <div class="text">Track and Field</div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext">3 of 5</div>
              <img src="slide3.jpg" style="width:620px; height:360px">
              <div class="text">Swimming</div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext">4 of 5</div>
              <img src="slide4.jpg" style="width:620px; height:360px">
              <div class="text">Soccer</div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext">5 of 5</div>
              <img src="slide5.jpg" style="width:620px; height:360px">
              <div class="text"> Team Nigeria</div>
            </div>
          </div>
          <br>

          <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
          </div>

          <p> The Olympics Games Rio 2016 has a total of 42 Olympic sports and 306 events. All of which is done over the course of 19 days
            (5th August 2016 - 21st August 2016). These competitions will yield 136 medals for women, 161 for men and nine mixed medals <br>
            Click <a href="https://www.rio2016.com/en/sports">here </a> for more
          </p>

          <p>
            The sports include:
            <ol>
              <li>Archery</li>
              <li>Artistic Gymnastics</li>
              <li>Athlethics</li>
              <li>Badminton</li>
              <li>Basketball</li>
              <li>Beack Volleyball</li>
              <li>Boxing</li>
              <li>Canoe Slalom</li>
              <li>Canoe Sprint</li>
              <li>Cycling BMX</li>
              <li>Cycling Mountain Bike</li>
              <li>Cycling Road</li>
              <li>Cycling Track</li>
              <li>Diving</li>
              <li>Equestrian</li>
              <li>Fencing</li>
              <li>Football</li>
              <li>Golf</li>
              <li>Handball</li>
              <li>Hockey</li>
              <li>Judo</li>
              <li>Marathon Swimming</li>
              <li>Morden Pentathlon</li>
              <li>Rhythmic Gymnastic</li>
              <li>Rowing</li>
              <li>Rugby Sevens</li>
              <li>Sailing</li>
              <li>Shooting</li>
              <li>Swimming</li>
              <li>Synchronised Swimming</li>
              <li>Table Tennis</li>
              <li>Taekwondo</li>
              <li>Tennis</li>
              <li>Trampoline Gymnastics</li>
              <li>Triathlon</li>
              <li>Volleyball</li>
              <li>Water Polo</li>
              <li>Weightlifting</li>
              <li>Wrestling</li>
            <ol>
          </p>
        </div>

      <script>
      var slideIndex = 0;
      showSlides();

      function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex> slides.length) {slideIndex = 1}
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 3000); // Change image every 3 seconds
      }
    </script>
    <div> Login as <a href="admin/adminlogin.php">Admin</a> <br></div>
    <div class ="footer"><small>&copy;Ayodotun Ojo</small> </div>
  </body>
</html>