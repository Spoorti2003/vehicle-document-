<center>
   <h1><font size="7"<font color="gray">Vehicle Document Management</font> </h1><br></br>
	<h2><marquee><font size="6"><font color=" 3041B">one life one world explore it unleashing my new world</font></marquee></h2>
	 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <html>
<style>

   body{
	   
   background-image:url('pretty.jfif');
 background-repeat:no-repeat;
 background-attachment:fixed;
 
 background-size:100% 100%
   }
  
.button {
  background-color: #4CAF50; /* login */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
 .button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}




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
<body>

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




<?php
$conn=mysqli_connect("localhost","root","","vehicle_document_management");
$query=mysqli_query($conn,"select *FROM insurance");
?>
<html>
<head>
<title>form</title>
</head>
<body bgcolor="#e2f0f9"><br><br>
<center>
<table border=2>
   <tr>
    <th>Vehicle Number</th>
	<th>Owner</th>
	 <th>Vehicle Name</th>
	 <th>Amount For Vehicle</th>
	  <th>Date Of Expire</th>
	 <th> Date</th>
	 </tr>
	 <?php
	 while($r=mysqli_fetch_array($query))
	 {
		 $vehicle_number=$r['vehicle_number'];
		  $owner=$r['owner'];
		 $vehicle_name=$r['vehicle_name'];
		 $amount_for_vehicle =$r['amount_for_vehicle'];
		 $date_of_expire=$r['date_of_expire'];
		 $date_d=$r['date_d'];
		 
		  ?>
		  <tr>
		  
		  <td><?php echo $vehicle_number;?></td>
		   <td><?php echo $owner;?></td>
		   <td><?php echo $vehicle_name;?></td>
		   <td><?php echo $amount_for_vehicle;?></td>
		  <td><?php echo $date_of_expire;?></td>
		   <td><?php echo $date_d;?></td>
		   
    </tr>
	 <?php
	 }
	 ?>
	 </table>
	  <h2> Insurance Details</h2>
	   <a href="insuranceform.php" > <button  class="button button 2" name="ADD">ADD</button> </a>
	 
	 </center>
	 </body>
	 </html>