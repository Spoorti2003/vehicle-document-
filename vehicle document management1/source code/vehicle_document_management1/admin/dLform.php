<center>
   <h1><font size="7"<font color="gray">Vehicle Document Management</font> </h1><br></br>
	<h2><marquee><font size="6"><font color=" 3041B"><i>One Life One World Explore It Unleashing My New World</i></font></marquee></h2>
	 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <html>
<style>
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
   
  <a class="active"#href="aboutus_admin.php">About</a>
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







<html>
<head>
<title>   form</title>
 
<body bgcolor="#81B0B2">
 <form method="POST">
<center>
<table>

<h1> Driving Licence</h1><br>
<tr>
<td>
 <label>Licence Number</label>
<td><input type="number" name="v1" placeholder="enter num" required><br></td>
</tr>
<tr>
<td><br>
  <label> Owner Name</label>
<td><input type="text" maxlength="10" name="v2" placeholder="enter name" required><br></td>
</tr>
<tr>
<td><br>
<label>Mobile Number</label>
<td><input type="number"maxlength="10" name="v3" placeholder="enter num" required><br></td>
</tr>
<tr>
<td><br>

 <label> </font> Email</label>
 <td><input type="email" name="v4" placeholder="enter email" required><br></td>
 </tr>
<tr>
<td><br>
<label> Date Of Birth</label>
 <td><input type="date" name="v5" placeholder="enter dob" required><br></td> 
</tr>
<tr>
<td><br>
<label> Type Of Licence</label>
  <td> <select name="sd">
<option>Permanant Licence</option>
<option>Temporary Licence</option>
<option>Learning</option>
<option>International Driving Licence </option>
</td>
</select>
</td></tr>
 
<td><br>
<label> Type Of Vehicle</label>
<td><select name="acd">
<option>car</option>
<option>bike</option>
<option>jet</option>
<option>scooty</option>
 </td>

</select></td></tr>
  <tr>
  <td><br>
    <label> Date Of Expire</label>
 <td><input type="date" name="v6" placeholder="enter dob" required><br> </td>
</tr>
<tr>
<td><br>
   <label>Date Of Recived</label>
 <td><input type="date" name="v7" placeholder="enter dob" required><br></td> 
</tr>
  <br></br>
  </table><br>
  
    <input type="submit"name="add" />
   </form>
   
 </center>
 </body>
 </html>
 
 <?php
   $conn=mysqli_connect("localhost","root","","vehicle_document_management");
   
   if(isset($_POST['add']))
   {
	   $a=$_POST["v1"];
	    $b=$_POST["v2"];
		 $c=$_POST["v3"];
	    $d=$_POST["v4"];
		 $e=$_POST["v5"];
		  $f=$_POST["sd"];
		  $g=$_POST["acd"];
		 $h=$_POST["v6"];
		 $i=$_POST["v7"];
		 
		 echo $a;
		   echo $b;
		   echo $c;
		  echo $d;
		  echo $e;
		   echo $f;
		   echo $g;
		  echo $h;
		  echo $i;
		    
		  $query=mysqli_query($conn,"insert into driving_licence values('$a','$b','$c','$d','$e','$f','$g','$h','$i')");
		   
  if($query)
  
  
  {

   echo "<script>
      alert('inserted successfully');
	  window.location.href='dl1.php';
	  </script>";
	  
 }
 else
 {
    echo "<script>
      alert('insert failed');
	  window.location.href='dLform.php';
	  </script>";
	  
 }
}
?>	  
		  
		  
		  
		  
		  
		  
		  
		  
 
  