
  <center>
   <h1><font size="7"<font color="gray">Vehicle Document Management</font> </h1><br></br>
	<h2><marquee><font size="6"><font color=" 3041B"><i>One Life One World Explore It Unleashing My New World</i></font></marquee></h2>
	 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <html>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body background="s.jpg" >

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a  href="dl1.php">Driving Licence</a>
  <a class="active"href="i1.php">Insurance</a>
   <a  href="vd11.php">Vechicle Document</a>
   
  <a class="active"href="aboutus_admin.php">About</a>
   <a href="admin_logout.php">logout</a>
</div>
<br>
<div style="padding-left:16px">
  
</div>

  <html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<br>
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  m  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>

 <br>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src=" mm.jfif" style="width:60%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="aircraf.jfif" style="width:60%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="bv.jfif" style="width:60%">
  <div class="text">Caption Three</div>
</div>

 </div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<br>
<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
 
 <h3><font size="5" ><font color="133A1B"> Transport portal is an online software application which fulfills the requirement of a typical details of vehicle,transport catergories
bus or cab from the employes in a company.</font></h3><br>
<h3><font size="5" ><font color="133A1B"> The aim of this application is o reduce the manual effort needed to manage transcitions in a company.</font></h3>


</center>
  
   
	
	</body>
	</html> 