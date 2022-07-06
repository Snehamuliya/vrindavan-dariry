<?php include("header.php");?>
          
            <div class="main-content-inner">

                    <div class="col-lg-6 col-ml-12">
                        <div class="row">
                          
                          
    
                            <!-- Server side start -->
                            <div class="col-12">
                                <div class="card mt-5">
                                    <div class="card-body">
                                        <h4 class="header-title">Company Master</h4>
                                      <form action="CompanyAdd.php" method="POST" enctype="multipart/form-data">
<div class="form-group">
<label for="example-text-input" class="col-form-label">Company Name<span class="star" style="color: red">*</span></label>
<input class="form-control col-md-6" type="text" id="example-text-input" placeholder="name" pattern="([a-zA-Z] ?)+[a-zA-Z]" onkeypress="return onlyAlphabets(event,this)" name="name" required="">
</div>
<div class="form-group">
<label for="exampleFormControlTextarea" class="col-form-label">Address <span class="star" style="color: red">*</span></label>
<textarea class="form-control" id="exampleFormControlTextarea" placeholder="Address" name="address" required=""></textarea>
</div>
<div class="form-row">
<div class="col-md-4 mb-3">
<label for="example-text-input" class="col-form-label">City</label>
<input class="form-control" type="text" placeholder="City" pattern="([a-zA-Z] ?)+[a-zA-Z]" onkeypress="return onlyAlphabets(event,this)" id="example-text-input" name="city">
</div>
<div class="col-md-4 mb-3">
<label for="example-text-input" class="col-form-label">District</label>
<input class="form-control" type="text" placeholder="District" pattern="([a-zA-Z] ?)+[a-zA-Z]" onkeypress="return onlyAlphabets(event,this)" id="example-text-input" name="district">
</div>

<div class="col-md-4 mb-3">
<label for="example-text-input" class="col-form-label">Pincode</label>
<input class="form-control" type="number" placeholder="Pincode" maxlength="10"  name="pincode">
</div>
</div>
<div class="form-row">
<div class="col-sm-4 mb-3">
<label for="example-email-input" class="col-form-label"> Company Email<span class="star" style="color: red">*</span> </label>
<input class="form-control" type="email" placeholder="name@example.com" id="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name="email" required="">
</div>

<div class="col-sm-4 mb-3">
<label for="example-tel-input" class="col-form-label"> Company Mobile Number <span class="star" style="color: red">*</span> </label>
<input class="form-control" type="text" placeholder="Mobile Number" required="" pattern="[0-9]{10}" maxlength="10" id="mobile" name="phoneno" onkeypress="return isNumberKey(event)">
</div>
</div>
<div class="form-row">
<div class="col-sm-4 mb-3">
<label for="example-text-input" class="col-form-label">Contact Person Name <span class="star" style="color: red">*</span> </label>
<input class="form-control" type="text" id="example-text-input" placeholder="Person Name" pattern="([a-zA-Z] ?)+[a-zA-Z]" onkeypress="return onlyAlphabets(event,this)" name="personname" required="">
</div>

<div class="col-sm-4 mb-3">
<label for="example-tel-input" class="col-form-label"> Contact Person Mobile No. <span class="star" style="color: red">*</span> </label>
<input class="form-control" type="text" placeholder="Person Mobile No." required="" pattern="[0-9]{10}" maxlength="10" id="phoneno" name="personphoneno" onkeypress="return isNumberKey(event)">
</div>
</div>

<button type="submit" class="btn btn-primary" id="submit" name="submit">Save</button>
<a href="CompanyList.php" class="btn btn-primary" id="submit">Back</a>




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
											
											$result=$conn->prepare("insert into company(Name, Address, City, District, Pincode, Email, Phone, Pname, Pmobile) values('$cname','$add','$city','$dis','$pin','$mail','$no','$pname','$pno')");
											
											$result->execute();
											
											echo "<script>
                          alert('Your record is inserted successfully...!');
                           window.location.href='CompanyAdd.php';
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