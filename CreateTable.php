<?php 

include('con.php');

$sql = "create table user(id int(10),name varchar(20), city varchar(20))";

if(mysqli_query($con,$sql)){
	echo "Table Created!!";
}else{
	echo "Error!!";
}


?>