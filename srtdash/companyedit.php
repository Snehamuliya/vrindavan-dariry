<?php include("header.php");?>
          
            <div class="main-content-inner">

                    <div class="col-lg-6 col-ml-12">
                        <div class="row">
                          	<?php
										
										$id=$_GET["ID"];
											$result = $conn->prepare("SELECT * From company where id=".$id);
		                                   $result->execute();
		                                  $row = $result->fetch();
                                           ?>
                          
    
                            <!-- Server side start -->
                            <div class="col-12">
                                <div class="card mt-5">
                                    <div class="card-body">
                                        <h4 class="header-title">Company Edit</h4>

										<form action="companyedit.php?ID=<?php echo $id;?>" method="POST" enctype="multipart/form-data">
										
									<div class="form-group">
<label for="example-text-input" class="col-form-label">Company Name<span class="star" style="color: red">*</span></label>
<input class="form-control col-md-6" type="text" id="example-text-input" placeholder="name" pattern="([a-z] ?)+[a-z]" onkeypress="return onlyAlphabets(event,this)" name="name" value="<?php echo $row['Name']; ?>"required="">
</div>
<div class="form-group">
<label for="exampleFormControlTextarea" class="col-form-label">Address <span class="star" style="color: red">*</span></label>
<textarea class="form-control" id="exampleFormControlTextarea" placeholder="Address" name="address" required=""><?php echo $row['Address']; ?></textarea>
</div>
<div class="form-row">
<div class="col-md-4 mb-3">
<label for="example-text-input" class="col-form-label">City</label>
<input class="form-control" type="text" placeholder="City" pattern="([a-z] ?)+[a-z]" onkeypress="return onlyAlphabets(event,this)" id="example-text-input" name="city" value="<?php echo $row['City']; ?>">
</div>
<div class="col-md-4 mb-3">
<label for="example-text-input" class="col-form-label">District</label>
<input class="form-control" type="text" placeholder="District" pattern="([a-z] ?)+[a-z]" onkeypress="return onlyAlphabets(event,this)" id="example-text-input" name="district" value="<?php echo $row['District']; ?>">
</div>

<div class="col-md-4 mb-3">
<label for="example-text-input" class="col-form-label">Pincode</label>
<input class="form-control" type="text" placeholder="Pincode" onkeypress="return isNumberKey(event)" maxlength="6" id="example-text-input" name="pincode" value="<?php echo $row['Pincode']; ?>">
</div>
</div>
<div class="form-row">
<div class="col-sm-4 mb-3">
<label for="example-email-input" class="col-form-label"> Company Email<span class="star" style="color: red">*</span> </label>
<input class="form-control" type="email" placeholder="name@example.com" id="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name="email" value="<?php echo $row['Email']; ?>" required="">
</div>

<div class="col-sm-4 mb-3">
<label for="example-tel-input" class="col-form-label"> Company Mobile Number <span class="star" style="color: red">*</span> </label>
<input class="form-control" type="text" placeholder="Mobile Number" required="" pattern="[0-9]{10}" maxlength="10" id="mobile" name="phoneno" onkeypress="return isNumberKey(event)" value="<?php echo $row['Phone']; ?>">
</div>
</div>
<div class="form-row">
<div class="col-sm-4 mb-3">
<label for="example-text-input" class="col-form-label">Contact Person Name <span class="star" style="color: red">*</span> </label>
<input class="form-control" type="text" id="example-text-input" placeholder="Person Name" pattern="([a-z] ?)+[a-z]" onkeypress="return onlyAlphabets(event,this)" name="personname" value="<?php echo $row['Pname']; ?>" required="">
</div>

<div class="col-sm-4 mb-3">
<label for="example-tel-input" class="col-form-label"> Contact Person Mobile No. <span class="star" style="color: red">*</span> </label>
<input class="form-control" type="text" placeholder="Person Mobile No." required="" pattern="[0-9]{10}" maxlength="10" id="phoneno" name="personphoneno" onkeypress="return isNumberKey(event)" value="<?php echo $row['Pmobile']; ?>">
</div>
</div>

                                            <button type="submit" style="margin:25px" class="btn btn-primary"  id="submit" name="submit">Update</button> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
											<a href=""><button class="btn btn-primary" type="button">Back</button></a>
                                        </form>
							
										<?php
										 if (isset($_POST['submit']))
										{
											$cname=$_POST['name'];
											$add=$_POST['address'];
											$city=$_POST['city'];
											$dis=$_POST['district'];
											$pin=$_POST['pincode'];
											$no=$_POST['phoneno'];
											$pname=$_POST['personname'];
											$pno=$_POST['personphoneno'];
											$mail=$_POST['email'];
											
											$result=$conn->prepare("update company set Name='$cname',Address='$add',City='$city',District='$dis',Pincode='$pin',Email='$mail',Phone='$no',Pname='$pname',Pmobile='$pno' Where id=$id");
											
											$result->execute();
											
											echo "<script>
                          alert('Your record is updated successfully...!');
                           window.location.href='companyview.php';
                             </script>";
										}
										
										?>		
											
											
                                    </div>
                                </div>
                            </div>
                            <!-- Server side end -->
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main content area end -->
      <?php include("footer.php");?>
	  