<?php  
	$connect = mysqli_connect("localhost", "root", "", "ajaxcurd1");
	$sql = "DELETE FROM tbl_sample WHERE id = '".$_POST["id"]."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Deleted';  
	}  
 ?>