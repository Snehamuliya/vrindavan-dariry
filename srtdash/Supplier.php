<?php include("header.php");?>
          
            <div class="main-content-inner">

                    <div class="col-lg-6 col-ml-12">
                        <div class="row">
                          
                          
    
                            <!-- Server side start -->
                            <div class="col-12">
                                <div class="card mt-5">
                                    <div class="card-body">
                                        <h4 class="header-title">Supplier Master</h4>
                                        <form class="needs-validation" action="Supplier.php" method="post">
                                            <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom01">Name</label>
                                                    <input type="text" class="form-control" placeholder="Name" id="validationCustom01" pattern="([a-zA-Z] ?)+[a-zA-Z]" name="name" required="">   
													 <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
						
                                            </div>
											     
												 <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom02">Address</label>
                                                   <textarea class="form-control" placeholder="Address" aria-label="With textarea" name="add"></textarea>													
												   <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                            </div>
										
                                          
												<div class="form-row">		
										 <div class="col-md-3 mb-3">
                                                    <label for="validationCustom03">City</label>
                                                    <input type="text" class="form-control" placeholder="City" id="validationCustom03" pattern="([a-zA-Z] ?)+[a-zA-Z]" name="city" required="">
                                                    <div class="invalid-feedback">
                                                        Please provide a valid city.
                                                    </div>
                                                </div>
												
										  <div class="col-md-3 mb-3">
                                                    <label for="validationCustom04">District</label>
                                                    <input type="text" class="form-control" placeholder="City" id="validationCustom04" pattern="([a-zA-Z] ?)+[a-zA-Z]" name="da" required="">
                                                    <div class="invalid-feedback">
                                                        Please provide a valid city.
                                                    </div>
                                                </div>
										 <div class="col-md-4 mb-3">
                                                    <label for="validationCustom07">pincode</label>
                                
													   <input class="form-control" type="number" id="validationCustom07" name="pin" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==6) return false;" />
													  
													<div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
									</div>
										
									
									
									
									  <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom06">Email</label>
                                                   <input type="email" class="form-control form-control-danger" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" id="validationCustom06" name="mail">
                                     <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                          
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom07">Mobile No</label>
                                 <input class="form-control" type="tel" id="validationCustom07" placeholder="Mobile" pattern="[0-9]{10}"
                                                      maxlength="10" id="validationCustom07" name="mno" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;">
													  
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
											$name=$_POST['name'];
											$address=$_POST['add'];
											$city=$_POST['city'];
											$dis=$_POST['da'];
											$pincode=$_POST['pin'];
											$email=$_POST['mail'];
											$mobile=$_POST['mno'];
										
											$result=$conn->prepare("insert into supplier(Name,Address,City,District,Pincode,Email,Phone) values('$name','$address','$city','$dis','$pincode','$email','$mobile')");
											
											$result->execute();
											
											echo "<script>
                          alert('Your record is inserted successfully...!');
                           window.location.href='Supplier.php';
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