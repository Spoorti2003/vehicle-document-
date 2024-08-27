<html>
 <head>
   <style>
   body{
	   
   background-image:url('potrait.jfif');
 background-repeat:no-repeat;
 background-attachment:fixed;
 
 background-size:100% 100%
   }
   </style>
   </head>
   <body>
<form method="POST">

	<center>
	<table>
	<br>
	<br></br>
	<h1><font size="10"><font color="navy blue"><u>Signup Form</u></font></h1>
	<br>
	<form>
	 <tr>
	 <td>
	<label><font color="#0000FF">Name</font></label> 
	<td><input type=" text"maxlength="15" name="a"placeholder="enter name" required><br></td>
	 </tr>
	 <tr>
	 <td><br>
	<label><font color="#0000FF">Mobile Number</font></label> 
	<td><input type="number" maxlength="10" name="b" placeholder="enter mobile number" required><br> </td>
	  </tr>
	 <tr>
	 <td><br>
 
	<label><font color="#0000FF">City</font></label> 
	<td><input type="text"maxlength="15" name="c"placeholder="enter city" required><br> </td>
	  </tr>
	 <tr>
	 <td><br>
	 
	<label><font color="#0000FF">Address</font></label> 
	<td><input type="text"maxlength="20" name="d"placeholder="enter address" required><br> </td>
	  </tr>
	 <tr>
	 <td><br>
	<label><font color="#0000FF" >Password</font></label> 
	<td><input type="number,text,special chracter" maxlength="15" name="e"placeholder="enter password" required><br> </td>
	 </tr>
	 <tr>
	 <td><br>
</table><br>
<input type="submit" name="signup" value="signup"/> 
	 </center>
	</form>
  </body>
	</html>
	   
   <?php
   $conn=mysqli_connect("localhost","root","","user");
    
   if(isset($_POST['signup']))
   {
	   $v1=$_POST["a"];
	    $v2=$_POST["b"];
		 $v3=$_POST["c"];
	    $v4=$_POST["d"];
		 $v5=$_POST["e"];
		 
		  
		 
		 
		$query=mysqli_query($conn,"Insert Into ta values('$v1','$v2','$v3','$v4','$v5')");
		  
		  if($query)
		  {
		  echo"<script>
		  alert('signup successfully');
		  window.location.href='login.php';
		  </script>";
		  }
            else		 
		 { 
		   echo"<script>
		  alert('signup failed');
		  window.location.href='signup1.php';
		  </script>";
		  }
		  
 }
   ?>
		  
		 
	 