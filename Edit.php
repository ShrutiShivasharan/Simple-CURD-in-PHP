<?php 
include 'con.php';

$id=$_GET['editId'];
$sql = "select * from user where id=$id";
$result = mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$city=$row['city'];

if(isset($_POST['submit'])){
    $name=$_POST['username'];
    $city=$_POST['usercity'];
    $sql="update user set id=$id,name='$name',city='$city' where id='$id'";
    $result = mysqli_query($con,$sql);
    if($result){
        header('location:TableDisplay.php');
    }else{
        echo "Error";
    }
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Users</title>
    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container m-5 p-5">
        <form method="post" action="">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="username" value="<?php echo $name ?>">
            </div>
            <div class="form-group">
                <label>City</label>
                <input type="text" class="form-control" placeholder="Enter your city" name="usercity"  value="<?php echo $city ?>">
            </div>
            
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>

