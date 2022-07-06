<?php include("header.php");?>
          
            <div class="main-content-inner">

                    <div class="col-lg-6 col-ml-12">
                        <div class="row">
                          
                          
    
                            <!-- Server side start -->
                            <div class="col-12">
                                <div class="card mt-5">
                                    <div class="card-body">
                                        <h4 class="header-title">Matarial Master</h4>
                                         <form class="needs-validation" action="matarial.php" method="post">
                                            
											<div class="form-row">
											
												 <div class="col-md-4 mb-3">
								         <div class="form-group">
                                    <label for="validationCustom02">Supplier Name<span class="star" style="color: red">*</span> </label>
                                    <select class="form-control" name="su" id="validationCustom02">
												<?php
													$result = $conn->prepare("SELECT * From supplier");
													$result->execute();
													for($i=0; $row = $result->fetch(); $i++)
													{
													echo "<option value='". $row['id'] ."'>" .$row['Name'] ."</option>" ;
													}
												?>
 
                                    </select>
								</div>
                                </div>
											
											</div>
											
											<div class="form-row">
										 <div class="col-md-4 mb-3">
                                            <label class="col-form-label">Matarial</label>
                                            <select class="form-control" name="mat">
                                                <option>Select</option>
                                                <option>Milk</option>
                                                <option>lemon</option>
                                            </select>
											</div>
											
											
											<div class="col-md-4 mb-3">
                                                    <label for="validationCustom02">Date</label>
                                                  <input type="date" class="form-control" placeholder="Date"  id="validationCustom01" name="da" required="">													<div class="valid-feedback">
                                                        Looks good!
                                                   
                                                </div>
												
											</div>
									
										
                                            <div class="form-group">
										
                                        </div>
												<div class="form-row">
                     				<div class="col-md-4 mb-3">
                                                    <label for="weigh">weight</label>
                                                  <input type="number" class="form-control" placeholder="Weight"  id="weigh" name="wei" required="">													<div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
												
										 <div class="col-md-4 mb-3">   
										 <div class="form-group">
                                            <label class="col-form-label">Unit</label>
                                            <select class="form-control" name="uni">
                                                <option>Gram</option>
                                                <option>Kilo-gram</option>
                                                <option>Liter</option>
                                            </select>
											</div>
                                        </div>
                                             
                                     
                                        
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom07">Matarial Price</label>
                                 <input class="form-control" type="number" id="validationCustom07" placeholder="Product Price" id="example-tel-input" name="pric">
													<div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                            </div>
									
											
                                        </div>
                                            <button class="btn btn-primary" type="submit" name="submit">Submit form</button> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href=""><button class="btn btn-primary" type="button">Back</button></a>
                                        </form>
										
										<?php
										 if (isset($_POST['submit']))
										{
											$supp=$_POST['su'];
											$mate=$_POST['mat'];
											$day=$_POST['da'];
											$unit=$_POST['uni'];
											$weight=$_POST['wei'];
											$pri=$_POST['pric'];
											$result=$conn->prepare("insert into material(supplier_id,name,date,weight,unit,price) values('$supp','$mate','$day','$weight','$unit','$pri')");
											
											$result->execute();
											
											echo "<script>
                          alert('Your record is inserted successfully...!');
                           window.location.href='matarial.php';
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