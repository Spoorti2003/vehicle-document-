<?php
$conn=mysqli_connect("localhost","root","","vehicle_document_management");
if($conn)
{
	echo "db connected";
}
else
{
	echo "db not connected";
}
?>