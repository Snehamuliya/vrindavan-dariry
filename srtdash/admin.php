<?php include("header.php");?>
          
            <div class="main-content-inner">

                    <div class="col-lg-6 col-ml-12">
                        <div class="row">
                          
                          
    
                            <!-- Server side start -->
                            <div class="col-12">
                                <div class="card mt-5">
                                    <div class="card-body">
                                        <h4 class="header-title">Admin Master</h4>
                                      <form action="admin.php" method="POST" enctype="multipart/form-data">
<div class="form-row">

<div class="col-md-4 mb-3">
<label for="example-text-input" class="col-form-label">Admin name</label>
<input class="form-control" type="text" placeholder="Name" pattern="([a-zA-Z] ?)+[a-zA-Z]" onkeypress="return onlyAlphabets(event,this)" id="example-text-input" name="name">
</div>
<div class="col-md-4 mb-3">
<label for="exampleFormControlTextarea" class="col-form-label">Address <span class="star" style="color: red">*</span></label>
<textarea class="form-control" id="exampleFormControlTextarea" placeholder="address" name="add" required=""></textarea>
</div></div>

<div class="form-row">
<div class="col-md-4 mb-3">
<label for="example-text-input" class="col-form-label">City</label>
<input class="form-control" type="text" placeholder="City" pattern="([a-zA-Z] ?)+[a-zA-Z]" onkeypress="return onlyAlphabets(event,this)" id="example-text-input" name="city">
</div>
<div class="col-md-4 mb-3">
<label for="example-text-input" class="col-form-label">District</label>
<input class="form-control" type="text" placeholder="dis" pattern="([a-zA-Z] ?)+[a-zA-Z]" onkeypress="return onlyAlphabets(event,this)" id="example-text-input" name="dis">
</div>

<div class="col-md-4 mb-3">
<label for="example-text-input" class="col-form-label">Pincode</label>
<input class="form-control" type="text" placeholder="pin"  maxlength="6" id="example-text-input" name="pin">
</div>
</div>
<div class="form-row">
<div class="col-sm-4 mb-3">
<label for="example-email-input" class="col-form-label">Email<span class="star" style="color: red">*</span> </label>
<input class="form-control" type="email" placeholder="name@example.com" id="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name="email" required="">
</div>

<div class="col-sm-4 mb-3">
<label for="example-tel-input" class="col-form-label"> Mobile Number <span class="star" style="color: red">*</span> </label>
<input class="form-control" type="text" placeholder="Mobile Number" required="" pattern="[0-9]{10}" maxlength="10" id="mobile" name="mno" onkeypress="return isNumberKey(event)">
</div>
</div>
<div class="form-row">
<div class="col-sm-4 mb-3">
<label for="example-text-input" class="col-form-label">USerName <span class="star" style="color: red">*</span> </label>
<input class="form-control" type="text" id="example-text-input" placeholder="Person Name" onkeypress="return onlyAlphabets(event,this)" name="user" required="">
</div>

<div class="col-sm-4 mb-3">
<label for="example-tel-input" class="col-form-label"> Password <span class="star" style="color: red">*</span> </label>
<input class="form-control" type="password" placeholder="Person Mobile No." required="" id="phoneno" name="pass" onkeypress="return isNumberKey(event)">
</div>

<div class="col-sm-4 mb-3">
<label for="example-text-input" class="col-form-label">Mother Name <span class="star" style="color: red">*</span> </label>
<input class="form-control" type="text" id="example-text-input" placeholder="Person Name" pattern="([a-zA-Z] ?)+[a-zA-Z]" onkeypress="return onlyAlphabets(event,this)" name="m_name" required="">
</div>

</div>

<button type="submit" class="btn btn-primary" id="submit" name="submit">Save</button>
<a href="CompanyList.php" class="btn btn-primary" id="submit">Back</a>




</form>
<?php
										if (isset($_POST['submit']))
										{
											$name=$_POST['name'];
											$address=$_POST['add'];
											$city=$_POST['city'];
											$dis=$_POST['dis'];
											$pincode=$_POST['pin'];
											$email=$_POST['email'];
											$mot=$_POST['m_name'];
											$mobile=$_POST['mno'];
											$user=$_POST['user'];
											$pass=$_POST['pass'];
										
										$result=$conn->prepare("SELECT COUNT(id) AS total FROM admin WHERE user='" . $_POST["user"] ."'");
$result->execute();
//$res = $db->query($qry);

$row = $result->fetch();

//$rec = $db->fetchAssoc($res);
$count = $row['total'];

											if($count>0)
											{
													
											echo "<script>
                          alert('Username allready exist.... Please enter another Username');
                           window.location.href='admin.php';
                             </script>";	
												
											}
											else
											{
											$result1=$conn->prepare("insert into admin(Name,Address,City,District,Pincode,Email,Phone,user,Pass,m_name) values('$name','$address','$city','$dis','$pincode','$email','$mobile','$user','$pass','$mot')");
											
											$result1->execute();
											
											echo "<script>
                          alert('Your record is inserted successfully...!');
                           window.location.href='admin.php';
                             </script>";
										}
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