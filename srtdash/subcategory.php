<?php include("header.php");?>
          
            <div class="main-content-inner">

                    <div class="col-lg-6 col-ml-12">
                        <div class="row">
                          
                          
    
                            <!-- Server side start -->
                            <div class="col-12">
                                <div class="card mt-5">
                                    <div class="card-body">
                                        <h4 class="header-title">Subcategory Master</h4>
                                        <form class="needs-validation" action="subcategory.php" method="post">
                                            <div class="form-row">
                                              


                                <div class="col-md-4 mb-3">
								<div class="form-group">
                                    <label for="validationCustom02">Category<span class="star" style="color: red">*</span> </label>
                                    <select class="form-control" name="cat" id="validationCustom02">
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
                                                    <label for="validationCustom01">Subcategory<span class="star" style="color: red">*</span> </label>
                                                    <input type="text" class="form-control" placeholder="Product Name" pattern="([a-zA-Z] ?)+[a-zA-Z]" id="validationCustom01" name="name" required="">
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
											$name=$_POST['cat'];
											$subcat=$_POST['name'];
											$result=$conn->prepare("insert into subcategory(category_id,subcategory) values('$name','$subcat')");
											
											$result->execute();
											
											echo "<script>
                          alert('Your record is inserted successfully...!');
                           window.location.href='subcategory.php';
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