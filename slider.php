<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
 .text {
  
  position: absolute;
  color: #f2f2f2;
  font-size: 25px;
  padding: 8px 12px;
  bottom: 8px;
  width: 100%;
  text-align: center; 
  text-decoration : underline;
  weight: bolder;
}
/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}


</style>



</head>
<body>
    <!-- Slideshow container -->

<div class="slideshow-container" >

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <img src="img/goa.jpg";   style="width:100%">
    <div class="text">GOA </div>
  </div>
  <div class="mySlides fade">
    <img src="img/manali.jpg" style="width:100%">
    <div class="text">MANALI</div>
  </div>

  <div class="mySlides fade">
    <img src="img/rishikesh.jpg" style="width:100%">
    <div class="text">RISHIKESH</div>
  </div>
  <div class="mySlides fade">
    <img src="img/ranthambore.jpg" style="width:100%">
    <div class="text">RANTHAMBORE</div>
  </div>
  <div class="mySlides fade">   
    <img src="img/jaipur.jpg" style="width:100%">
    <div class="text">JAIPUR</div>
  </div>

  
  </style>
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a> 
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<script>
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>
</body>
</html>