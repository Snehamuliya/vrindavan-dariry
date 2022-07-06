<?php include("header.php");?>
 <div class="row">
                    <!-- seo fact area start -->
                    <div class="col-lg-11" style="margin-left:20px";>
                        <div class="row">
                            <div class="col-md-6 mt-5 mb-3">
                                <div class="card">
                                    <div class="seo-fact sbg1">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"><i class="ti-thumb-up"></i> New users</div>
                                           
										<?php
										$result=$conn->prepare("SELECT COUNT(id) AS total FROM customer");
$result->execute();
$row = $result->fetch();
$count = $row['total']; ?>
										<h2><?php echo $count; ?></h2>
                                        </div>
                                        <canvas id="seolinechart1" height="50"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-md-5 mb-3">
                                <div class="card">
                                    <div class="seo-fact sbg2">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"><i class="ti-share"></i> feedback</div>
	<?php
$result=$conn->prepare("SELECT COUNT(id) AS total FROM feedback");
$result->execute();
$row = $result->fetch();
$fcount = $row['total']; ?>


										<h2><?php echo $fcount; ?></h2>
                                        </div>
                                        <canvas id="seolinechart2" height="50"></canvas>
                                    </div>
                                </div>
                            </div>
							
                            <div class="col-md-6 mb-3 mb-lg-0">
                                <div class="card">
                                    <div class="seo-fact sbg2">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"><i class="ti-share"></i>sale return</div>
                                            	<?php
										$result=$conn->prepare("SELECT COUNT(id) AS total FROM salereturn_master");
$result->execute();
$row = $result->fetch();
$count = $row['total']; ?>
										<h2><?php echo $count; ?></h2>
                                        </div>
										<canvas id="seolinechart3" height="60"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="seo-fact sbg4">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon">complete bill</div>
												<?php
										$result=$conn->prepare("SELECT COUNT(id) AS ctotal FROM final where status='done'");
$result->execute();
$row = $result->fetch();
$bcount = $row['ctotal']; ?>
										<h2><?php echo $bcount; ?></h2>
                                            
                                        </div>
										<canvas id="seolinechart4" height="60"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- seo fact area end -->
					</div>

									

 
      <?php include("footer.php");?>