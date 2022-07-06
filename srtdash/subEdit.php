<?php include("header.php");?>
          
            <div class="main-content-inner">

                    <div class="col-lg-6 col-ml-12">
                        <div class="row">
                          	<?php
										
										$id=$_GET["ID"];
											$result = $conn->prepare("SELECT * FROM subcategory where id=".$id);
		                                   $result->execute();
		                                  $row = $result->fetch();
                                           ?>
                          
    
                            <!-- Server side start -->
                            <div class="col-12">
                                <div class="card mt-5">
                                    <div class="card-body">
                                        <h4 class="header-title">Sub-Category Edit</h4>

										<form action="subEdit.php?ID=<?php echo $id;?>" method="POST" enctype="multipart/form-data">
									
                                            <div class="form-row">
											

										     <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ID</label>
                                            <input class="form-control col-md-3" type="text" id="example-text-input" placeholder="ID" readonly name="id" value="<?php echo $row['id']; ?>">
                                        </div>
											
                                               											
												<div class="col-md-3 mb-3">
													<label for="validationCustom01">Category<span class="star" style="color: red">*</span> </label>
														<select class="form-control" name="Name"> 
															
															<?php
								
                              
                                                    if($row['category_id']>0)
                                                  {

                                                  $result3 = $conn->prepare("SELECT * From category where id=".$row['category_id']."");
                                                  $result3->execute();
                                                  $rowcat2 = $result3->fetch();

                                                    echo "<option selected value='". $rowcat2['id'] ."'>" .$rowcat2['Category'] ."</option>" ;

                                                  }
                                                  $result4 = $conn->prepare("SELECT * From category where id not in(".$row['category_id'].") ");
                                                  
                                                  $result4->execute();
                                                  for($k=0; $rowcompall1 = $result4->fetch(); $k++)
                                                  {


                                                    echo "<option  value='". $rowcompall1['id'] ."'>" .$rowcompall1['Category'] ."</option>" ;

                                                  }
                                                  ?>
												
												
										</select>
											</div>

												
												  <div class="col-md-3 mb-3">
                                            
                                            <label for="example-text-input2" class="col-form-label">Sub-Category<span class="star" style="color: red">*</span> </label>
                                            <input class="form-control col-md-6" type="text" id="example-text-input2" name="scat" pattern="([a-zA-Z] ?)+[a-zA-Z]" required="" value="<?php echo $row['subcategory']; ?>">
                        


									
                                                </div>
												
												
                                            </div>
										
                                       
									  
                                          
                                            <button type="submit" style="margin:25px" class="btn btn-primary"  id="submit" name="submit">Update</button> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
											<a href=""><button class="btn btn-primary" type="button">Back</button></a>
                                        </form>
									<?php
										if (isset($_POST['submit']))
											{
												$cat=$_POST['Name'];
												$sub_cat=$_POST['scat'];
												
											
	                $result = $conn->prepare("update subcategory set category_id='$cat',subcategory='$sub_cat' Where id=$id ");
	                $result->execute();

											echo "<script>
											alert('Your record is updated successfully....!');
											window.location.href='subcategoryView.php';
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