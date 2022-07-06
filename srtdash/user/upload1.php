<?php
error_reporting(0);
?>
<?php
$msg = "";

// If upload button is clicked ...
if (isset($_POST['submit'])) {

	$pname=$_POST['name'];
	$pinfo=$_POST['info'];
	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
		$folder = "../image/".$filename;
		
	$db = mysqli_connect("localhost", "root", "", "dairy1");

		// Get all the submitted data from the form
		$sql = "INSERT INTO prod1 (filename,name) VALUES ('$filename','$pname')";

		// Execute query
		mysqli_query($db, $sql);
		
		// Now let's move the uploaded image into the folder: image
		if (move_uploaded_file($tempname, $folder)) {
			echo "<script>alert('Your image added successfully....!');</script>";
		}else{
			echo "<script>alert('Your image not added successfully....!');</script>";
	}
}


	?>

<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<link rel="stylesheet" type= "text/css" href ="style.css"/>
<div id="content">

<form method="POST" action="" enctype="multipart/form-data">
	<input type="file" name="uploadfile" value=""/>
		<br> name :-<input type="text" name="name" value=""/>
				<br> information :-<textarea rows=4 cols=5 name="info" value=""/></textarea>
	<div>
		<button type="submit" name="submit">UPLOAD</button>
		</div>
</form>
</div>
</body>
</html>
