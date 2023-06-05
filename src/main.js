function myMap()

{

  myCenter=new google.maps.LatLng(51.507351, -0.127758);

  var mapOptions= {

    center:myCenter,

    zoom:6, scrollwheel: false, draggable: false,

    mapTypeId:google.maps.MapTypeId.ROADMAP

  };

  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);



  var marker = new google.maps.Marker({

    position: myCenter,

  });

  marker.setMap(map);

}



// Modal Image Gallery

function onClick(element) {

  document.getElementById("img01").src = element.src;

  document.getElementById("modal01").style.display = "block";

  var captionText = document.getElementById("caption");

  captionText.innerHTML = element.alt;

}



// Change style of navbar on scroll

window.onscroll = function() {myFunction()};

function myFunction() {

    var navbar = document.getElementById("myNavbar");

    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {

        navbar.className = "w3-bar" + " w3-card-2" + " w3-animate-top" + " w3-white";

    } else {

        navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top w3-white", "");

    }

}



// Used to toggle the menu on small screens when clicking on the menu button

function toggleFunction() {

    var x = document.getElementById("navDemo");

    if (x.className.indexOf("w3-show") == -1) {

        x.className += " w3-show";

    } else {

        x.className = x.className.replace(" w3-show", "");

    }

}


$(document).ready(function() {

  $('form').submit(function(e){

     var name = $('#name').val();

     var email = $('#email').val();

     var message = $('#message').val();



     var data = 'name=' + name + '&email=' + email + '&message=' + message;



     $.ajax({

      type: "POST",

      url: 'script.php',

      data: data,

      success: $(document).ready(function(){

      $("#myModal").modal("show");

      })

     });

      $("#form")[0].reset();

      e.preventDefault(); // avoid to execute the actual submit of the form.

  });

});

function playPause()
{
if (myVideo.paused)
myVideo.play();
else
myVideo.pause();
}

function playPause2()
{
if (myVideo2.paused)
myVideo2.play();
else
myVideo2.pause();
}

function playPause3()
{
if (myVideo3.paused)
myVideo3.play();
else
myVideo3.pause();
}

function playPause4()
{
if (myVideo4.paused)
myVideo4.play();
else
myVideo4.pause();
}