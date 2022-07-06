<?php include("header.php") ?>
		<h1 align="center">shop</h1>
<div class="row" style="padding:70px;">
        <?php


	$result=$conn->prepare("select * from admin where id=".$aid);
$result->execute();
for($i=0;$row=$result->fetch();$i++)
{

        ?>
			<div class="col-3 mt-2">
                <div class="card" >
                     <a href=" ">
                        <img class="card-img-top" src="../image/<?=$row['filename']?>" height="200px" alt="h">
                    </a>

 
                        <p class="card-t" style="font-size:22px;color:#336666;font-family:Lucida Fax;font-weight:bold;padding-left:30px;">
                            <?php echo $row['name']?>
                        </p>
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

                                                }?> </p>

												
												
							<p class="card-text" style="padding-left:30px;padding-bottom:10px;">
                            <a href="details.php?ID=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">
                                View
                            </a>
							<form method="post" action="cartsave.php">
					         <input type="number" name="p_id" value="<?php echo $row['id']; ?>" style="display: none">
							Quantity :- <input type="number" name="qty" id="user" required />
<input type="submit" class="btn btn-primary" id="submit" name="submit" value="add to cart" >
							</form></p>
						
							 
							
		     
			
                        
										
                </div>
            </div>
			
					
	<?php
										 if (isset($_POST['submit']))
										{
											
											echo "<script>
                          alert('Your record is inserted successfully...!');
                        
                             </script>";
										}
										
										?>
			
        <?php 
        }
        ?>

    </div>
 