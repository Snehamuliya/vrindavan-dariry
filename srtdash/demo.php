<?php include("header.php");?>
          
            <div class="main-content-inner">

                    <div class="col-lg-6 col-ml-12">
                        <div class="row">
                          
                          
    
                            <!-- Server side start -->
                            <div class="col-12">
                                <div class="card mt-5">
                                    <div class="card-body">
                                        <h4 class="header-title">Product Master</h4>
                                        <form class="needs-validation" action="demo.php" method="post">
                                            <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom01">Name</label>
                                                    <input type="text" class="form-control" placeholder="Product Name" id="validationCustom01" name="name" pattern="[0-9a-zA-Z_.-]*" required="">
                                                     
													 <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
												
												<div class="col-md-4 mb-3">
										   <div class="form-group">
                                            <label class="col-form-label">Category</label>
                                            <select class="form-control" name="sub">
                                                <option>Select</option>
                                                <option>milk</option>
                                                <option>Cheese</option>
                                            </select>
											</div>
                                        </div>
												
												
												
                                            </div>
										
                                          
												
										 <div class="col-md-3 mb-3">
                                                    <label for="validationCustom03">City</label>
                                                    <input type="date" class="form-control" placeholder="City" id="validationCustom03" name="da" required="">
													 
                                                 
												   <div class="invalid-feedback">
                                                        Please provide a valid city.
                                                    </div>
                                                </div>
									
											 
                                       
                                            <button class="btn btn-primary" type="submit" name="submit">Submit form</button> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href=""><button class="btn btn-primary" type="button">Back</button></a>
                                        </form>
										<?php
										if (isset($_POST['submit']))
										{
											$name=$_POST['name'];
											$subcat=$_POST['sub'];
											$date=$_POST['da'];
											$result=$conn->prepare("insert into demotab(name,sub,date) values('$name','$subcat','$date')");
											
											$result->execute();
											
											echo "<script>
                          alert('Your record is inserted successfully...!');
                           window.location.href='demo.php';
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