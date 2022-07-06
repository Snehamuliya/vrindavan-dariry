<?php include("header.php");?>
          
            <div class="main-content-inner">

                    <div class="col-lg-6 col-ml-12">
                        <div class="row">
                          	<?php
										
										$id=$_GET["ID"];
											$result = $conn->prepare("SELECT * FROM material where id=".$id);
		                                   $result->execute();
		                                  $row = $result->fetch();
                                           ?>
                          
    
                            <!-- Server side start -->
                            <div class="col-12">
                                <div class="card mt-5">
                                    <div class="card-body">
                                        <h4 class="header-title">Material Edit</h4>

										<form action="MatEdit.php?ID=<?php echo $id;?>" method="POST" enctype="multipart/form-data">
										
										<div class="form-row">											
												<div class="col-md-3 mb-3">
													<label for="validationCustom01">Supplier<span class="star" style="color: red">*</span> </label>
														<select class="form-control" name="Name"> 
															
															<?php
								
                              
                                                    if($row['supplier_id']>0)
                                                  {

                                                  $result3 = $conn->prepare("SELECT * From supplier where id=".$row['supplier_id']."");
                                                  $result3->execute();
                                                  $rowcat2 = $result3->fetch();

                                                    echo "<option selected value='". $rowcat2['id'] ."'>" .$rowcat2['Name'] ."</option>" ;

                                                  }
                                                  $result4 = $conn->prepare("SELECT * From supplier where id not in(".$row['supplier_id'].") ");
                                                  
                                                  $result4->execute();
                                                  for($k=0; $rowcompall1 = $result4->fetch(); $k++)
                                                  {


                                                    echo "<option  value='". $rowcompall1['id'] ."'>" .$rowcompall1['Name'] ."</option>" ;

                                                  }
                                                  ?>
												
												
										</select>
											</div></div>
									
                                            <div class="form-row">
											

										     <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ID</label>
                                            <input class="form-control col-md-3" type="text" id="example-text-input" placeholder="ID" readonly name="id" value="<?php echo $row['id']; ?>">
                                        </div>
											
                                                <div class="col-md-4 mb-3">
                                                   <div class="form-group">
                                            <label for="example-text-input2" class="col-form-label">Matarial Name<span class="star" style="color: red">*</span> </label>
                                            <input class="form-control col-md-6" type="text" id="example-text-input2" name="name" pattern="([a-zA-Z] ?)+[a-zA-Z]" required="" value="<?php echo $row['name']; ?>">
                                        </div>
                                                </div>


	<div class="col-md-4 mb-3">
                                                    <label for="validationCustom02">Date</label>
                                                  <input type="date" class="form-control" placeholder="Date"  id="validationCustom01" name="da" required="" value="<?php echo $row['date']; ?>">													<div class="valid-feedback">
                                                        Looks good!
                                                   
                                                </div>
												
											</div>												</div>
												
										
											
																<div class="form-row">

                                            
                                                    <div class="col-md-4 mb-3">
                                                   <div class="form-group">
                                            <label for="example-text-input2" class="col-form-label">weight<span class="star" style="color: red">*</span> </label>
                                            <input class="form-control" type="text" id="example-text-input2" name="weight" required="" value="<?php echo $row['weight']; ?>">
                                        </div>
                                                </div>																
							
												
										  <div class="col-md-3 mb-3">
                                                    <label for="validationCustom04">Unit<span class="star" style="color: red">*</span> </label>
                                                    <input type="text" class="form-control"  id="validationCustom04" name="uni"  required="" value="<?php echo $row['unit']; ?>">
                                                    <div class="invalid-feedback">
                                                        Please provide a valid city.
                                                    </div>
                                                </div>
										 <div class="col-md-4 mb-3">
                                                    <label for="validationCustom07">price</label>
                                
													   <input class="form-control" type="number" id="validationCustom07" name="pri" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==6) return false;" value="<?php echo $row['price']; ?>" />
													  
													<div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
									</div>
												<div class="form-row">
											
								
											
											</div>
											
											


								
                                          
                                            <button type="submit" style="margin:25px" class="btn btn-primary"  id="submit" name="submit">Update</button> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
											<a href=""><button class="btn btn-primary" type="button">Back</button></a>
                                        </form>
									<?php
										if (isset($_POST['submit']))
											{
												$name=$_POST['name'];
											    $date=$_POST['da'];
												$weight=$_POST['weight'];
												$unit=$_POST['uni'];
												$price=$_POST['pri'];
												$sname=$_POST['Name'];
											
												
											
	                $result = $conn->prepare("update material set name='$name',date='$date',weight='$weight',unit='$unit',price='$price',supplier_id='$sname' Where id=$id ");
	                $result->execute();

											echo "<script>
											alert('Your record is updated successfully....!');
											window.location.href='MatarialView.php';
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