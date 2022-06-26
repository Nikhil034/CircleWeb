<!DOCTYPE html>
<html>
<head>
<title>Welcome to CircleWeb</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" type="image/png" href="favi1.png">
<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
</style>
</head>
<body>

<?php include('header.php');?>


<!-- Content -->
<div class="w3-content" style="max-width:1000px;margin-top:80px;margin-bottom:0px">

  

  <!-- Slideshow -->
  <div class="w3-container">
    <div class="w3-display-container mySlides">
      <img src="first.jpg" style="width:100%">
      <div class="w3-display-topleft w3-container w3-padding-32">
        <!-- <span class="w3-white w3-padding-large w3-animate-bottom">know your circle buddy present</span> -->
      </div>
    </div>
    <div class="w3-display-container mySlides">
      <img src="second.jpg" style="width:100%">
      <div class="w3-display-middle w3-container w3-padding-32">
        <span class="w3-white w3-padding-large w3-animate-bottom">Connect</span>
      </div>
    </div>
   <!--  <div class="w3-display-container mySlides">
      <img src="https://www.w3schools.com/w3images/sound.jpg" style="width:100%">
      <div class="w3-display-topright w3-container w3-padding-32">
        <span class="w3-white w3-padding-large w3-animate-bottom">Blorum pipsum</span>
      </div>
    </div>
 -->
    <!-- Slideshow next/previous buttons -->
    <div class="w3-container w3-dark-grey w3-padding w3-xlarge">
      <div class="w3-left" onclick="plusDivs(-1)"><i class="fa fa-arrow-circle-left w3-hover-text-teal"></i></div>
      <div class="w3-right" onclick="plusDivs(1)"><i class="fa fa-arrow-circle-right w3-hover-text-teal"></i></div>
    
      <div class="w3-center">
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
        
      </div>
    </div>
  </div>
  
  <!-- Grid -->
  <div class="w3-row w3-container">
    <div class="w3-center w3-padding-64">
      <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Why you use circleweb ?</span>
    </div>
    <div class="w3-col l3 m6 w3-light-grey w3-container w3-padding-16">
      <h3>Stay Update in circle</h3>
    </div>

    <div class="w3-col l3 m6 w3-grey w3-container w3-padding-16">
      <h3>No wasted of time</h3>
    </div>

    <div class="w3-col l3 m6 w3-light-grey w3-container w3-padding-16">
      <h3>Contact Easyly</h3>    
    </div>

    <div class="w3-col l3 m6 w3-grey w3-container w3-padding-16">
      <h3>Drop job and projects</h3>
    </div>
  </div>

  <!-- Grid -->
  <div class="w3-row-padding" id="plans">
    <div class="w3-center w3-padding-64">
      <h3>3 Way you use CircleWeb </h3>
      <p>Choose Option</p>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-center w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Profile</li>
         <img src="profile.jpg" style="width:80%">
        </li>
        <li class="w3-light-grey w3-padding-24">
          <a href="profile.php"><button class="w3-button w3-green w3-padding-large">Create Profile</button></a>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-center w3-hover-shadow">
        <li class="w3-dark-grey w3-xlarge w3-padding-32">Explore Circle</li>
         <img src="explore.jpg" style="width: 80%">

        <li class="w3-light-grey w3-padding-24">
          <a href="explore.php"><button class="w3-button w3-green w3-padding-large">Tap to go</button></a>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-center w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Post job & project</li>
         <img src="project.jpg" style="width: 80%">
        <li class="w3-light-grey w3-padding-24">
          <a href="post.php"><button class="w3-button w3-green w3-padding-large">Post</button></a>
        </li>
      </ul>
    </div>
  </div>

  <!-- Grid -->



<!-- Footer -->



<script>
// Slideshow
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demodots");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>



</body>
<?php include('footer.php');?>
</html>
