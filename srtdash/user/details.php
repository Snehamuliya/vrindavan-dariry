<?php include("userheader.php");?>
          


                            	<?php
										
										$id=$_GET["ID"];
											$result = $conn->prepare("SELECT * From prod1 where id=".$id);
		                                   $result->execute();
		                                  $row = $result->fetch();
                                           ?>                        
    

                         
<div class="card-body">						 
						  
  <div class="row" style="padding:50px;">
    <div class="col-sm-6" >    <a href=" ">
                        <img class="img-fluid" src="../image/<?=$row['filename']?>" height="200px" alt="h">
                    </a></div>
    <div class="col-sm-6">
	<center>  <p class="card-t" style="font-size:22px;color:#336666;font-family:Lucida Fax;font-weight:bold;padding-left:30px;">
                            <?php echo $row['name']?>
                        </p> </center>
						<p><strong style="padding-left:30px;">Price :- &#8377; <?php echo $row['price']?></strong> </p>
						
						    <p class="card-t" style="padding-left:30px;">
                            <strong>Packaging :-</strong>&nbsp;<?php echo $row['pack']?>
                        </p>
						
						
							<p style="padding-left:30px;"><strong> Category :-</strong>&nbsp;<?php 
                                                      if($row['category']>0)
                                                {

                                                $resultcom = $conn->prepare("SELECT * From category where id=".$row['category']."");
                                                $resultcom->execute();
                                                $rowcomp = $resultcom->fetch();

                                                  echo $rowcomp['Category'] ;

                                                }?> 
												<strong style="padding-left:190px;">Expiry Date :-</strong><?php echo $row['exp_date']?> </p>
		<p><?php echo $row['information']; ?>	</p>	
	</div>



    <div class="col-sm-6" >    <a href=" ">
                        <img class="img-fluid" src="../maharashtra-district-map.jpg" height="200px" alt="h">
                    </a></div>
    <div class="col-sm-6">
	<p class="card-t" style="padding-left:30px;">
                            <strong>Used material :-</strong>&nbsp;<?php echo $row['matrial']?>
                        </p>
	<p class="card-t" style="padding-left:30px;">
                            <strong>Product life :-</strong>&nbsp;<?php echo $row['life']?>
                        </p>
						
						<h4 style="padding-left:30px;">Product Shipping location :-</h4>
						
							<p class="card-t" style="padding-left:30px;">
                            <strong>Location :-</strong>&nbsp;<br><br><font style="font-size:17px;"><?php echo $row['location']?></font>
                        </p>
							<p class="card-text" style="padding-left:30px;padding-bottom:10px;">
                           
							<form method="post" action="cartsave.php">
							
					         <input type="number" name="p_id" value="<?php echo $row['id']; ?>" style="display: none">
							<input type="number" name="qty" required/>

							<input type="submit" class="btn btn-primary" id="submit" name="submit" value="add to cart">
							</form>
							</p>
</div>

</div>
						 
						 
                        </div>
                 
                

        <!-- main content area end -->
      <?php include("userfooter.php");?>
	  