<?php  
$connect = mysqli_connect("localhost", "root", "", "ajaxcurd1");
$sql = "INSERT INTO tbl_sample(first_name, email) VALUES('".$_POST["first_name"]."', '".$_POST["last_name"]."')";  
if(mysqli_query($connect, $sql))  
{  
     echo 'Data Inserted';  
}  
 ?>