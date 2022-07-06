<?php include("userheader.php") ?>
<div class="row">
        <?php


	$result=$conn->prepare("select * from prod1 order by id asc");
$result->execute();
for($i=0;$row=$result->fetch();$i++)
{

        ?>
            <div class="col-md-3  mt-2">
                <div class="card">
                     <a href="single-product.php?product=<?php echo $product['id']?>">
                        <img class="card-img-top" src="../image/<?=$row['filename']?>" alt="hh">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">

                                <?php echo $row['name']; ?>
                            
                        </h5>

 
                        <h5 class="card-title">

                                <?php echo $row['information']; ?>
                            
                        </h5>

                    </div>
                </div>
            </div>
        <?php 
        }
        ?>
    </div>
<?php include('userfooter.php');?>
 