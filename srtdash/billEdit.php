<?php include("header.php");?>
          
            <div class="main-content-inner">

                    <div class="col-lg-6 col-ml-12">
                        <div class="row">
                          	<?php
										
										$id=$_GET["ID"];
											$result = $conn->prepare("SELECT * FROM final where id=".$id);
		                                   $result->execute();
		                                  $row = $result->fetch();
										  $del_date=date("d/m/Y");
										  
                                           ?>
                          
    
                            <!-- Server side start -->
                            <div class="col-12">
                                <div class="card mt-5">
                                    <div class="card-body">
                                        <h4 class="header-title">Bill Edit</h4>

										<form action="billEdit.php?ID=<?php echo $id;?>" method="POST" enctype="multipart/form-data">
									
                                            <div class="form-row">
											

										     <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ID</label>
                                            <input class="form-control col-md-3" type="text" id="example-text-input" placeholder="ID" readonly name="id" value="<?php echo $row['id']; ?>">
                                        </div>
											
                                                <div class="col-md-4 mb-3">
                                                   <div class="form-group">
                                            <label for="example-text-input2" class="col-form-label">Status<span class="star" style="color: red">*</span> </label>
                                            <input class="form-control col-md-6" type="text" id="example-text-input2" name="cat" required="" value="<?php echo $row['status']; ?>">
											
                                        </div>
                                                </div>
												
											
												<div class="col-md-4 mb-3">
                                                   <div class="form-group">
                                            <label for="example-text-input2" class="col-form-label">Actual Date<span class="star" style="color: red">*</span> </label>
                                            <input class="form-control col-md-6" type="text" id="example-text-input2" name="ddate" required="" value="<?php echo $row['del_date']; ?>"><p> todays date is :- <?php echo $del_date; ?></p>
											
                                        </div>
                                                </div>											
												
												
												
                                            </div>
										
                                       
									  
                                          
                                            <button type="submit" style="margin:25px" class="btn btn-primary"  id="submit" name="submit">Update</button> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
											<a href=""><button class="btn btn-primary" type="button">Back</button></a>
                                        </form>
										
									<?php
									
										if (isset($_POST['submit']))
											{
												$cat=$_POST['cat'];
												$da=$_POST['ddate'];
												
											
	                $result = $conn->prepare("update final set 	status='$cat',del_date='$da' Where id=$id ");
	                $result->execute();
					$result = $conn->prepare("update cart_bil set cstatus='$cat' Where bil_no=$id ");
	                $result->execute();

											echo "<script>
											alert('Your record is updated successfully....!');
											window.location.href='bill_mas.php';
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