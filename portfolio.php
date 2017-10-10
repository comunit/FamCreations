<?php include 'head.php';?>
<!-- Navbar (sit on top) -->

<div class="w3-top">

  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="./#home" class="w3-bar-item w3-button">HOME</a>
    <a href="./#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> ABOUT</a>
    <a href="portfolio.php" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-camera"></i> PHOTO</a>
    <a href="./#video" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-play"></i> VIDEO</a>
    <a href="./#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACT</a>
  </div>



  <!-- Navbar on small screens -->

  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="./#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
    <a href="portfolio.php" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTFOLIO</a>
    <a href="./#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->

<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">OUR<span> PHOTOGRAPHY</span>
  </div>
</div>

<?php include 'pic.php';?>


<?php include 'footer.php';?>