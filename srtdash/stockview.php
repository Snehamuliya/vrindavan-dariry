<?php include("header.php");?>
<div class="main-content-inner">
                <div class="row">
                     <!-- Dark table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Stock Report</h4>
								 <div class="card-body">
								<button type="button" onclick="window.print();"  class="btn btn-outline-primary">Print</button> 
								</div>
                                <div class="data-tables datatable-dark">
                                    <table id="dataTable3" class="text-center">
                                        <thead class="text-capitalize">
                                            <tr>
								     <td>Sr.No</td>
                                     
                                     <th scope="col"> Product Name</th>
                                     <th scope="row"> Current stock</th>
                                           </tr>
                                        </thead>
										 <tbody>
										<?php
										$result=$conn->prepare("SELECT name,sum(s.stock) as currentstock FROM prod1 p Left outer join  stock_det s on p.id=s.product_id Group by name ORDER BY name ");    
										                     // ("SELECT name,sum(s.stock) as currentstock FROM product p Left outer join  stock_det s on p.id=s.product_id Group by name ORDER BY name ");
										$result->execute();
										for($i=0;$row=$result->fetch();$i++)
										{   ?>
											
											<tr> 
                                            <td> <?php echo $i+1;?></td>
                                            
                                       		<td> <?php echo $row['name'];?></td>
                                            <td><?php echo $row['currentstock']; ?></td>
											</tr>
										<?Php
										}
									
										?>
										</div>
										</div>
										   <script>

</script>

                                       </tbody>
                                    </table>
                                </div>
                            
                        
                   
                    <!-- Dark table end -->
                   
                   
                </div>
            </div>
       
        <!-- main content area end --> 

<?php include("Footer.php");?>



