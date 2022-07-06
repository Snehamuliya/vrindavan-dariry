<?php include("header.php");?>
          
            <div class="main-content-inner">

                    <div class="col-lg-6 col-ml-12">
                        <div class="row">
                          
                          
    
                            <!-- Server side start -->
                            <div class="col-12">
                                <div class="card mt-5">
                                    <div class="card-body">
                                        <h4 class="header-title">Category Master</h4>
                                        <form class="needs-validation" action="letche.php" method="post">
                                            <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                   <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Category<span class="star" style="color: red">*</span> </label>
                                            <input class="form-control col-md-6" type="text" id="example-text-input" placeholder="category" pattern="([a-z] ?)+[a-z]" name="category" required="">
                                        </div>

                                                </div>
                                            </div>
										
                                       
									  
                                          
                                            <button class="btn btn-primary" type="submit" name="submit">Submit form</button> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href=""><button class="btn btn-primary" type="button">Back</button></a>
                                        </form>
										<?php
										if (isset($_POST['submit']))
										{
											$cat=$_POST['category'];
											
} else {  
    echo $cat;  
 
											

											
											echo "<script>
                          alert('Your record is inserted successfully...!');
                           window.location.href='letche.php';
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