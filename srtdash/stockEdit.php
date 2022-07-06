<?php include("header.php");?>
          
            <div class="main-content-inner">

                    <div class="col-lg-6 col-ml-12">
                        <div class="row">
                          	<?php
										
										$id=$_GET["ID"];
											$result = $conn->prepare("SELECT * FROM stock_det where id=".$id);
		                                   $result->execute();
		                                  $row = $result->fetch();
                                           ?>
                          
    
                            <!-- Server side start -->
                            <div class="col-12">
                                <div class="card mt-5">
                                    <div class="card-body">
                                        <h4 class="header-title">Category Master</h4>

										<form action="stockEdit.php?ID=<?php echo $id;?>" method="POST" enctype="multipart/form-data">
									
                                            <div class="form-row">
											

										     <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ID</label>
                                            <input class="form-control col-md-3" type="text" id="example-text-input" placeholder="ID" readonly name="id" value="<?php echo $row['id']; ?>">
                                        </div>
											
                                                <div class="col-md-4 mb-3">
                                                   <div class="form-group">
                                            <label for="example-text-input2" class="col-form-label">stock<span class="star" style="color: red">*</span> </label>
                                            <input class="form-control col-md-6" type="number" id="example-text-input2" name="stock" pattern="[0-9]{10}" required="" value="<?php echo $row['stock'] ?>">
                                        </div>
                                                </div>


        <div class="col-md-4 mb-3">
                                                   <div class="form-group">
                                            <label for="example-text-input2" class="col-form-label">Product id<span class="star" style="color: red">*</span> </label>
                                            <input class="form-control col-md-6" type="number" id="example-text-input2" name="prod" pattern="[0-9]{10}" required="" value="<?php echo $row['product_id'] ?>">
                                        </div>
                                                </div>												</div>
												

             
										  
												<div class="form-row">		
										 <div class="col-md-3 mb-3">
                                                    <label for="validationCustom03">Purchase id</label>
                                                    <input type="number" class="form-control" placeholder="City" pattern="[0-9]{10}" id="validationCustom03" name="pur" required="" value="<?php echo $row['Purchase_id'] ?>">
                                                    <div class="invalid-feedback">
                                                        Please provide a valid city.
                                                    </div>
                                                </div>
												
										  <div class="col-md-3 mb-3">
                                                    <label for="validationCustom04">Purchase return id</label>
                                                    <input type="number" class="form-control" placeholder="City" pattern="[0-9]{10}" id="validationCustom04" name="pret" required="" value="<?php echo $row['PurchaseRet_id'] ?>">
                                                    <div class="invalid-feedback">
                                                        Please provide a valid city.
                                                    </div>
                                                </div>
										
									</div>
									
									  <div class="form-row">
                                     
                                          
										   <div class="col-md-4 mb-3">
                                                    <label for="validationCustom07">sale id</label>
                                
													   <input class="form-control" type="number" id="validationCustom07" name="sale" pattern="[0-9]{10}" value="<?php echo $row['Sale_id'] ?>" />
													  
													<div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
										  
										  
										  
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom07">sale return id</label>
                                 <input class="form-control" type="tel" id="validationCustom07" placeholder="Mobile"
                                                      maxlength="10" id="validationCustom07" name="saler" value="<?php echo $row['SaleRet_id'] ?>">
													  
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
												
											    $stock=$_POST['stock'];
												$prod=$_POST['prod'];
												$purc=$_POST['pur'];
												$pur_ret=$_POST['pret'];
												$sale=$_POST['sale'];
												$s_ret=$_POST['saler'];
												
											
	                $result = $conn->prepare("update stock_det set stock='$stock',product_id='$prod',Purchase_id='$purc',PurchaseRet_id='$pur_ret',Sale_id='$sale',SaleRet_id='$s_ret' Where id=$id ");
	                $result->execute();

											echo "<script>
											alert('Your record is updated successfully....!');
											window.location.href='stockview.php';
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