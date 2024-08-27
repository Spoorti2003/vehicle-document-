<center><h1>VEHICLE DOCUMENT MANAGEMENT</h1></center>
<h3><marquee>Definition:One life One World explore it unleashing my new.</marquee></h3>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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

.button {
  background-color: #4CAF50; /* add */
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

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

</style>
</head>

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="dl_user.php">Driving Licence</a>
  <a  class="active" href="i_user.php">Insurance</a>
   <a href="vd_user.php">Vehicle Document</a>
  <a class="active" href="about_us.php">About</a>
  <a href="user_logout.php">Logout</a>
</div>

<div style="padding-left:16px">
</div>

</body>
</html>
<br></br>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<center>
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
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
</html>

<?php
$conn=mysqli_connect("localhost","root","","vehicle_document_management");
$query=mysqli_query($conn,"select *FROM vehicle_document WHERE vehicle_number='$d'");
?>
<html>
<head>
<title>my form</title>
</head>
<body bgcolor="#e2f0f9">
<form method="POST">
<h1>Enter the vehicle number</h1>
<input type="text" name="vehicle_number"/>

<button class="button button1" name="search">search</button></a>
</form>
<?php
if(isset($_POST['search']))
{
include("db_connect69.php");
$d=$_POST['vehicle_number'];
$query=mysqli_query($conn,"SELECT * FROM vehicle_document WHERE vehicle_number='$d'");

?>
<html>
 <head>
  <title>my form</title>
  </head>
  <body>
<h3>Vehicle number=<?php echo $d;?></h3>
  <table border="5" cellspacing="4" cellpadding="6" align="center">
  <tr bgcolor="5499c7">
    <th>vehicle_number</th>
   <th>user_name</th>
   <th>vehicle_name </th>
   <th>mobile_number </th>
	  
	  <th>date_of_expire</th>
	 <th>date_of_manufacture</th>
	  <th>postal_address</th>
	  <th>password</th>
  </tr>
  
  <?php
  while($r=mysqli_fetch_array($query))
  {
	 		$vehicle_number=$r['vehicle_number'];
		 $user_name=$r['user_name'];
		 
		 $vehicle_name=$r['vehicle_name'];
		 $mobile_number=$r['mobile_number'];
		  
		 $date_of_expire=$r['date_of_expire'];
		 $date_of_manufacture =$r['date_of_manufacture'];
		 $postal_address =$r['postal_address'];
         $password =$r['password'];
	  
	  
	
	 ?>
	 <tr align="center"
	 bgcolor="ecfof1">
		 <td><?php echo $vehicle_number;?></td>
		   <td><?php echo $user_name;?></td>
		   
		   <td><?php echo $vehicle_name;?></td>
		   <td><?php echo $mobile_number;?></td>
		   
		   <td><?php echo $date_of_expire;?></td>
		   <td><?php echo $date_of_manufacture;?></td>
		   <td><?php echo $postal_address;?></td>
		   <td><?php echo $password;?></td>

  <?php } ?>
  <?php } ?>
       </tr>
  </table>
 </body>
</html>