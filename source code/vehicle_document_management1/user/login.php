 <html>
 <head>
  <style>
   body{
	   
   background-image:url('im.jfif');
 background-repeat:no-repeat;
 background-attachment:fixed;
 
 background-size:100% 100%
   }
   
    
.button {
  background-color: #4CAF50; /* user */
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
   
	
<body bgcolor="#ACDDDE">
<form method="POST">
	<center>
	<table>
	<h1><font color="navy blue">VEHICLE DOCUMENT MANAGEMENT</font></h1>
	<br>
	<br></br>
	<img src="royal.jfif"height="500" width="600"></img><br></br>
	<br></br>
	 <tr>
	<td>
	<label><font size="4"> enter mobile number</font></label>
	<td><input type="text" name="mobile_number" placeholder="enter mobile number" required></td>
	</tr>
	<tr>
	 <td><br>
	<label><font size="4">enter password</font></label>
	<td><input type="password" maxlength="10" name="password"placeholder="enter password" required>
	</td></tr>
	<br></br>
	</table><br>
	<button class="button button 1"name="login">login</button>
	 
	<br></br>
	<a href="signup1.php"><h2> I Dont have an account create new account</h2></a>
	 
	</center>
	</form>
	</body>
	</html>
<?php
include('db_connect1.php');

if(isset($_POST['login']))
{
  $v1=$_POST['mobile_number'];
  $v2=$_POST['password'];
  $query=mysqli_query($conn,"SELECT * FROM vehicle_document WHERE mobile_number='$v1' and password='$v2'");
  if(mysqli_num_rows($query)>0)
  {

   echo "<script>
      alert('login successfully');
	  window.location.href='user_home1.php';
	  </script>";
	  
 }
 else
 {
    echo "<script>
      alert('login failed');
	  window.location.href='login.php';
	  </script>";
	  
 }
}
?>