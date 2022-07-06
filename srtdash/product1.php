<?php include("header.php");?>
<?php
error_reporting(0);
?>
<?php
$msg = "";

// If upload button is clicked ...
if (isset($_POST['submit'])) {

	$pname=$_POST['name'];
	$pinfo=$_POST['info'];
	$pcat=$_POST['ca'];
    $package=$_POST['pack'];
	$pexp=$_POST['dat'];
	$total=$_POST['pri'];
	$ping=$_POST['ing'];
	$life=$_POST['plife'];
	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
		$folder = "image/".$filename;
		
	$db = mysqli_connect("localhost", "root", "", "dairy1");

		// Get all the submitted data from the form
		$sql = "INSERT INTO prod1 (filename,name,information,category,pack,exp_date,price,matrial,life) VALUES ('$filename','$pname','$pinfo','$pcat','$package','$pexp','$total','$ping','$life')";

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
 
                    <div class="col-lg-6 col-ml-12">
                        <div class="row">
                    
							<!-- Server side start -->
                            <div class="col-12">
                                <div class="card mt-5">
                                    <div class="card-body">
                                        <h4 class="header-title">Product Master</h4>
<form method="POST" action="" enctype="multipart/form-data">



											<div class="form-row">
											
											<div class="col-md-4 mb-3">
                                                    <label for="validationCustom07">Product name</label>
                                 <input class="form-control" type="text" id="validationCustom07" placeholder="Product Name"  id="example-tel-input" name="name">
													<div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div></div>
												
												<div class="form-row">
												<div class="col-md-4 mb-3">
									<label for="exampleFormControlTextarea" class="col-form-label">Product information <span class="star" style="color: red">*</span></label>
										<textarea class="form-control" id="exampleFormControlTextarea" placeholder="Product information"  name="info" required=""></textarea>
													</div>
														</div>
												
																			
												<div class="form-row">
																			
												
								 <div class="col-md-4 mb-3">
								         <div class="form-group">
                                    <label for="validationCustom02">Category Name<span class="star" style="color: red">*</span> </label>
                                    <select class="form-control" name="ca" id="validationCustom02">
												<?php
													$result = $conn->prepare("SELECT * From category");
													$result->execute();
													for($i=0; $row = $result->fetch(); $i++)
													{
													echo "<option value='". $row['id'] ."'>" .$row['Category'] ."</option>" ;
													}
												?>
 
                                    </select>
								</div>
                                </div>	


												<div class="col-md-4 mb-3">
                                                    <label for="validationCustom08">Pakaging</label>
                                 <input class="form-control" type="text" id="validationCustom08" placeholder="Packaging" id="example-tel-input" name="pack">
													<div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>								
													
														</div>
														
																	<div class="form-row">
																			
												
								 <div class="col-md-4 mb-3">
								         <div class="form-group">
                                    <label for="validationCustom14">Expiry-date<span class="star" style="color: red">*</span> </label>
						<input class="form-control" type="date" id="validationCustom14" placeholder="expiry date" id="example-tel-input" name="dat">

								</div>
                                </div>	


												<div class="col-md-4 mb-3">
                                                    <label for="validationCustom018">Price</label>
                                 <input class="form-control" type="number" id="validationCustom018" placeholder="Price" id="example-tel-input" name="pri">
													<div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>								
													
														</div>

<div class="form-row">
											
		<div class="col-md-4 mb-3">
                                                    <label for="validationCustom019">image</label>
								 	<input type="file" name="uploadfile" value=""/>
													<div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>				
</div>


					<div class="form-row">
																			
												
								 <div class="col-md-4 mb-3">
								         <div class="form-group">
                                    <label for="validationCustom14">Ingridients<span class="star" style="color: red">*</span> </label>
						<input class="form-control" type="text" id="validationCustom14" placeholder="expiry date" id="example-tel-input" name="ing">

								</div>
                                </div>	


												<div class="col-md-4 mb-3">
                                                    <label for="validationCustom018">Shelf life</label>
                                 <input class="form-control" type="text" id="validationCustom018" placeholder="Price" id="example-tel-input" name="plife">
													<div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>								
													
														</div>

				<div>
		<button type="submit" name="submit">Submit</button>
		</div>
</form>
										
                                   
                                </div>
                            </div>
                            <!-- Server side end -->
							</div></div></div>
</body>
</html>
      <?php include("footer.php");?>