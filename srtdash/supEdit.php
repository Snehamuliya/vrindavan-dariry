<?php include("header.php");?>
          
            <div class="main-content-inner">

                    <div class="col-lg-6 col-ml-12">
                        <div class="row">
                          	<?php
										
										$id=$_GET["ID"];
											$result = $conn->prepare("SELECT * FROM supplier where id=".$id);
		                                   $result->execute();
		                                  $row = $result->fetch();
                                           ?>
                          
    
                            <!-- Server side start -->
                            <div class="col-12">
                                <div class="card mt-5">
                                    <div class="card-body">
                                        <h4 class="header-title">Suppliear Master</h4>

										<form action="supEdit.php?ID=<?php echo $id;?>" method="POST" enctype="multipart/form-data">
									
                                            <div class="form-row">
											

										     <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ID</label>
                                            <input class="form-control col-md-3" type="text" id="example-text-input" placeholder="ID" readonly name="id" value="<?php echo $row['id']; ?>">
                                        </div>
											
                                                <div class="col-md-4 mb-3">
                                                   <div class="form-group">
                                            <label for="example-text-input2" class="col-form-label">Name<span class="star" style="color: red">*</span> </label>
                                            <input class="form-control col-md-6" type="text" id="example-text-input2" name="name" required="" pattern="([a-z] ?)+[a-z]" value="<?php echo $row['Name']; ?>">
                                        </div>
                                                </div> </div>
												
												<div class="form-row">
												
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom02">Address</label>
                                                   <textarea class="form-control" placeholder="Address" aria-label="With textarea" pattern="([a-z] ?)+[a-z]" name="add"><?php echo $row['Address']; ?>"</textarea>													
												   <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                            </div>
										
                                          
										  
												<div class="form-row">		
										 <div class="col-md-3 mb-3">
                                                    <label for="validationCustom03">City</label>
                                                    <input type="text" class="form-control" placeholder="City" pattern="([a-z] ?)+[a-z]" id="validationCustom03" pattern="([a-z] ?)+[a-z]" name="city" required="" value="<?php echo $row['City']; ?>">
                                                    <div class="invalid-feedback">
                                                        Please provide a valid city.
                                                    </div>
                                                </div>
												
										  <div class="col-md-3 mb-3">
                                                    <label for="validationCustom04">District</label>
                                                    <input type="text" class="form-control" placeholder="City" pattern="([a-z] ?)+[a-z]" id="validationCustom04" name="da" pattern="([a-z] ?)+[a-z]" required="" value="<?php echo $row['District']; ?>">
                                                    <div class="invalid-feedback">
                                                        Please provide a valid city.
                                                    </div>
                                                </div>
										 <div class="col-md-4 mb-3">
                                                    <label for="validationCustom07">pincode</label>
                                
													   <input class="form-control" type="number" id="validationCustom07" name="pin" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==6) return false;" value="<?php echo $row['Pincode']; ?>" />
													  
													<div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
									</div>
									
									  <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom06">Email</label>
                                                   <input type="email" class="form-control form-control-danger" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" id="validationCustom06" name="mail" value="<?php echo $row['Email']; ?>">
                                     <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                          
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom07">Mobile No</label>
                                 <input class="form-control" type="tel" id="validationCustom07" placeholder="Mobile" pattern="[0-9]{10}"
                                                      maxlength="10" id="validationCustom07" name="mno" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;" value="<?php echo $row['Phone']; ?>">
													  
													<div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                            </div>
												
												
                                           
										
                                       
									  
                                          
                                            <button type="submit" style="margin:25px" class="btn btn-primary"  id="submit" name="submit">Update</button> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
											<a href=""><button class="btn btn-primary" type="button">Back</button></a>
                                        </form>
									<?php
										if (isset($_POST['submit']))
											{
												$name=$_POST['name'];
											    $address=$_POST['add'];
												$city=$_POST['city'];
												$dis=$_POST['da'];
												$pincode=$_POST['pin'];
												$email=$_POST['mail'];
												$mobile=$_POST['mno'];
												
											
	                $result = $conn->prepare("update supplier set Name='$name',Address='$address',City='$city',District='$dis',Pincode='$pincode',Email='$email',Phone='$mobile' Where id=$id ");
	                $result->execute();

											echo "<script>
											alert('Your record is updated successfully....!');
											window.location.href='SupplierView.php';
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