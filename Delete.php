<?php 

include 'con.php';

if(isset($_GET['deleteId'])){
	$id = $_GET['deleteId'];
	$sql = "delete from user where id=$id";
	$result = mysqli_query($con,$sql);
	if($result){
        header('location:TableDisplay.php');
    }else{
        echo "Error";
    }
}

?>