 <html>
 <head>
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

</style>
</head>
<body >
<form method="POST">

	<center>
		<table>  
		  <h1><u><font color="gray">VEHICLE DOCUMENT MANAGEMENT</font></u></h1>
		  <img src="parker.jfif " height="500" width="600"></img><br></br>
		 <br></br>
	 <tr>
	<td>
		  <label><font size="6">Id</font></label>
		  <td><input type="text" name="a"placeholder="enter id" required /><br></td>
		  </tr>
		  <tr>
		  <td><br>
		    <label><font size="6">Password</font></label></td>
		  <td> <input type="text" name="b"placeholder="enter password" required /><br></td>
		  </td></tr>
		  <tr></br></table>
<br>		    
			<button  class="button button 2" name="login">login</button> 
  <center>
		  </form>
		  </body>
		  </html>
		  
		  
	 <?php
include('db_connect4.php');

if(isset($_POST['login']))
{
  $v1=$_POST['a'];
  $v2=$_POST['b'];
  $query=mysqli_query($conn,"SELECT * FROM admin WHERE id='$v1' and password='$v2'");
  if(mysqli_num_rows($query)>0)
  {

   echo "<script>
      alert('login successfully');
	  window.location.href='login_homepage.php';
	  </script>";
	  
 }
 else
 {
    echo "<script>
      alert('login failed');
	  window.location.href='admin.php';
	  </script>";
	  
 }
}
?>