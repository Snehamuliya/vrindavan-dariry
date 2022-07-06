<?php include("header.php");?>
          
            <div class="main-content-inner">

                    <div class="col-lg-6 col-ml-12">
                        <div class="row">
                          
                          
    
                            <!-- Server side start -->
                            <div class="col-12">
                                <div class="card mt-5">
                                    <div class="card-body">
                                        <h4 class="header-title">Product Master</h4>
                                         <form class="needs-validation" action="Product.php" method="post">
                                            
											<div class="form-row">
											
											<div class="col-md-4 mb-3">
                                                    <label for="validationCustom07">Product name</label>
                                 <input class="form-control" type="text" id="validationCustom07" placeholder="Product Name" pattern="([a-zA-Z] ?)+[a-zA-Z]" id="example-tel-input" name="name">
													<div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div></div>
												
												<div class="form-row">
												<div class="col-md-4 mb-3">
									<label for="exampleFormControlTextarea" class="col-form-label">Product information <span class="star" style="color: red">*</span></label>
										<textarea class="form-control" id="exampleFormControlTextarea" placeholder="Address"  name="info" required=""></textarea>
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
								         <div class="form-group">
                                    <label for="validationCustom02">Subcategory Name<span class="star" style="color: red">*</span> </label>
                                    <select class="form-control" name="scat" id="validationCustom02">
												<?php
													$result = $conn->prepare("SELECT * From subcategory");
													$result->execute();
													for($i=0; $row = $result->fetch(); $i++)
													{
													echo "<option value='". $row['id'] ."'>" .$row['subcategory'] ."</option>" ;
													}
												?>
 
                                    </select>
								</div>
                                </div>
											
											</div>
										
										<div class="form-row">
											
											<div class="col-md-4 mb-3">
                                                    <label for="validationCustom07">Weight</label>
                                 <input class="form-control" type="number" id="validationCustom07" placeholder="Product Name" id="example-tel-input" name="wei">
													<div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
												
												<div class="col-md-4 mb-3">
                                              
                                            <label class="col-form-label">Unit</label>
                                            <select class="form-control" name="unit">
                                                <option>Select</option>
                                                <option>Gram</option>
                                                <option>kilo-gram</option>
												<option>Liter</option>
                                            </select>
											
                                      
                                                </div>
												
												<div class="col-md-4 mb-3">
                                                    <label for="validationCustom07">Expiry Date</label>
                                 <input class="form-control" type="date" id="validationCustom07" placeholder="Product Name" id="example-tel-input" name="date">
													<div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div></div>
									
											
										<div class="form-row">
											
											<div class="col-md-4 mb-3">
                                                    <label for="validationCustom07">Quantity</label>
                                 <input class="form-control" type="number" id="validationCustom07" placeholder="Product Name" id="example-tel-input" name="qty">
													<div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
												
												<div class="col-md-4 mb-3">
                                                    <label for="validationCustom07">Price</label>
                                 <input class="form-control" type="number" id="validationCustom07" placeholder="Product Name" id="example-tel-input" name="total">
													<div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
												
												<div class="col-md-4 mb-3">
                                                    <label for="file">Product Image</label>
                                 <input type="file" name="file" id="file" placeholder="image">

								 

													<div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div></div>
                                      
										
                                            <button class="btn btn-primary" type="submit" name="submit">Submit form</button> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href=""><button class="btn btn-primary" type="button">Back</button></a>
                                        </form>
										
										
									
	
										
                                   
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