<?php include("header.php");?>
          
            <div class="main-content-inner">

                    <div class="col-lg-6 col-ml-12">
                        <div class="row">
                          
                          <?php
										
										$id=$_GET["ID"];
											$result = $conn->prepare("SELECT * FROM prod1 where id=".$id);
		                                   $result->execute();
		                                  $row = $result->fetch();
                                           ?>
                          
    
                            <!-- Server side start -->
                            <div class="col-12">
                                <div class="card mt-5">
                                    <div class="card-body">
                                        <h4 class="header-title">Product Master</h4>
                                         <form action="prodEdit.php?ID=<?php echo $id;?>" method="POST" enctype="multipart/form-data">
                                            
											<div class="form-row">
											
											
										     <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ID</label>
                                            <input class="form-control col-md-3" type="text" id="example-text-input" placeholder="ID" readonly name="id" value="<?php echo $row['id']; ?>">
                                        </div>
										
											<div class="col-md-4 mb-3">
                                                    <label for="validationCustom07">Product name</label>
                                 <input class="form-control" type="text" id="validationCustom07" placeholder="Product Name" id="example-tel-input" name="name"  value="<?php echo $row['name']; ?>">
													<div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div></div>
												
												<div class="form-row">
												<div class="col-md-4 mb-3">
									<label for="exampleFormControlTextarea" class="col-form-label">Product information <span class="star" style="color: red">*</span></label>
										<textarea class="form-control" id="exampleFormControlTextarea" placeholder="Address" name="info"  required=""><?php echo $row['information']; ?></textarea>
													</div>
														</div>
												
								
											
											
											<div class="form-row">
										
																			
												<div class="col-md-3 mb-3">
													<label for="validationCustom01"> Category<span class="star" style="color: red">*</span> </label>
														<select class="form-control" name="cat"> 
															
															<?php
								
                              
                                                    if($row['category']>0)
                                                  {

                                                  $result3 = $conn->prepare("SELECT * From category where id=".$row['category']."");
                                                  $result3->execute();
                                                  $rowcat2 = $result3->fetch();

                                                    echo "<option selected value='". $rowcat2['id'] ."'>" .$rowcat2['Category'] ."</option>" ;

                                                  }
                                                  $result4 = $conn->prepare("SELECT * From category where id not in(".$row['category'].") ");
                                                  
                                                  $result4->execute();
                                                  for($k=0; $rowcompall1 = $result4->fetch(); $k++)
                                                  {


                                                    echo "<option  value='". $rowcompall1['id'] ."'>" .$rowcompall1['Category'] ."</option>" ;

                                                  }
                                                  ?>
												
												
										</select>
											</div>
											
																		
											
											</div>
											
											
										
										<div class="form-row">
											
											<div class="col-md-4 mb-3">
                                                    <label for="validationCustom07">Packaging</label>
                                 <input class="form-control" type="text" id="validationCustom07" placeholder="Product Name" id="example-tel-input" name="pack" value="<?php echo $row['pack']; ?>">
													<div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
												
										<div class="col-md-4 mb-3">
                                                    <label for="validationCustom07">Matarial</label>
                                 <input class="form-control" type="text" id="validationCustom07" placeholder="Product Name" id="example-tel-input" name="mat" value="<?php echo $row['matrial']; ?>">
													<div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
												
												
									
											
										<div class="form-row">
											
											<div class="col-md-4 mb-3">
                                                    <label for="validationCustom07">Quantity</label>
                                 <input class="form-control" type="number" id="validationCustom07" placeholder="Product Name" id="example-tel-input" name="qty" value="<?php echo $row['stock']; ?>">
													<div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
												
												<div class="col-md-4 mb-3">
                                                    <label for="validationCustom07">Price</label>
                                 <input class="form-control" type="number" id="validationCustom07" placeholder="Product Name" id="example-tel-input" name="total" value="<?php echo $row['price']; ?>">
													<div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
									</div>
                                      <div class="form-row">
									  
									  			
				

								 

													<div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
									  
									  </div>
										
                                            <button class="btn btn-primary" type="submit" name="submit">Submit form</button> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href=""><button class="btn btn-primary" type="button">Back</button></a>
                                        </form>
										
										
									
										
										
										
										<?php
										 if (isset($_POST['submit']))
										{
											$pname=$_POST['name'];
											$pinfo=$_POST['info'];
											$cat=$_POST['cat'];
											
											$pck=$_POST['pack'];
											$pmat=$_POST['mat'];
											
											$pqty=$_POST['qty'];
											$ptotal=$_POST['total'];
											
											
											
											
											$result=$conn->prepare("update prod1 set name='$pname',information='$pinfo',category='$cat',stock='$pqty',price='$ptotal' Where id=$id ");
											
											$result->execute();
											
											echo "<script>
                          alert('Your record is updated successfully...!');
                           window.location.href='Productview.php';
                             </script>";
										}
											
										?>
										
                                   
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