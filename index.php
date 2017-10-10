<?php include 'head.php';?>
<body>

<?php include 'navigation.php';  ?>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">FAM<span> CREATIONS</span><span class="w3-hide-small"> PHOTOGRAPHY</span>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">ABOUT Us</h3>
  <p class="w3-center"><em>We love photography</em></p>
  <p>We always strive to create unique and original work, which is why we don't follow gimmicky trends or use a template of shots. This frees us to produce instinctive and meaningful images with an emphasis on capturing the emotions, relationships and different personalities. We cover all weddings worldwide and would love to tell your story.</p>
  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-padding-large">
      <img src="images/1.jpg" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me" width="500" height="333">
    </div>

    <!-- Hide this text on small devices -->
    <div class="w3-col m6 w3-hide-small w3-padding-large">
      <p>When you choose Fam Creation Photography for your Asian wedding photography, you can be certain that you are getting a first class experience no matter the package you choose. We understand that every wedding is entirely unique, and ensure that we preserve the moments that matter, every time. Our Asian wedding photography in London and across the UK is fresh, innovative and unique. We don’t believe in staged, false smiles, but instead our destination Asian wedding photography aims to capture the natural beauty of a wedding, which you can keep forever. </p>
    </div>
  </div>
  
  </div>
</div>

<div class="w3-row w3-center w3-dark-grey w3-padding-16">
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">14+</span><br>
    Partners
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">300+</span><br>
    Projects Done
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">300+</span><br>
    Happy Clients
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">100%</span><br>
    Satisfaction
  </div>
</div>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">PORTFOLIO</span>
  </div>
</div>

<div class="w3-row-padding w3-center w3-section">

  <div class="w3-col m3">

    <img src="images/36.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">

  </div>



  <div class="w3-col m3">

    <img src="images/46.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">

  </div>



  <div class="w3-col m3">

    <img src="images/47.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">

  </div>



  <div class="w3-col m3">

    <img src="images/48.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">

  </div>


  <div class="w3-col">

    <button class="w3-button w3-white w3-border w3-border-blue" style="margin-top: 30px;"><a style="color: black" href="portfolio.php">SEE MORE</a></button>

  </div>



</div>

<?php include 'video.php'; ?>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-3 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide">CONTACT</span>
  </div>
</div>

<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64" id="contact">
  <h3 class="w3-center">WHERE WE WORK</h3>
  <p class="w3-center"><em>I'd love your feedback!</em></p>

  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container">
      <!-- Add Google Maps -->
      <div id="googleMap" class="w3-round-large w3-greyscale" style="width:100%;height:400px;"></div>
    </div>
    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> London, UK<br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: +44 7403 0895475<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: Info@famcreations.co.uk<br>
      </div>
      <p>Swing by for a cup of <i class="fa fa-coffee"></i>, or leave me a note:</p>
      <form id="form">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="name" required name="Name" id="name">
          </div>
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="email" required name="Email" id="email">
          </div>
        </div>
        <input class="w3-input w3-border" type="text" placeholder="message" required name="Message" id="message">
        <button class="w3-button w3-black w3-right w3-section" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </form>
    </div>
  </div>
</div>
 <?php include 'footer.php'; ?>
</body>
</html>
