<?php 
include("con.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>simple Curds</title>
	<!-- bootstrap cdn -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container m-5 p-5">
		<button type="button" class="btn btn-primary mb-5"
		><a href="add.php" class="text-light">Add</a></button>

		<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">City</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  	<?php 	
	$sql = "select * from `user`";
	$result = mysqli_query($con,$sql);
	if($result){
		// echo "value found!";
		while ($row=mysqli_fetch_assoc($result)) {
			$id = $row['id'];
			$name = $row['name'];
			$city = $row['city'];

			echo '
				<tr>
			      <th scope="row">'.$id.'</th>
			      <td>'.$name.'</td>
			      <td>'.$city.'</td>
			      <td><button type="button" class="btn btn-warning"><a href="Edit.php?editId='.$id.'" class="text-dark">Edit</a></button></td>
			      <td><button type="button" class="btn btn-danger"><a href="Delete.php?deleteId='.$id.'" class="text-light">Delete</a></button></td>
			    </tr>
			';
		}
	}

    
    
    ?>

  </tbody>
</table>
</div>
</body>
</html>