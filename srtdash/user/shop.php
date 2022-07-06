<?php include("userheader.php") ?>
<html>
<head>

<title>About Us</title>
</head>
<body>
<div class="container-fluid">
  <div class="row">
<div class="col-sm-2">

  <a class="list-group-item list-group-item-action" href="#list-item-1">Milk</a>
  <a class="list-group-item list-group-item-action" href="#list-item-2">Curd</a>
  <a class="list-group-item list-group-item-action" href="#list-item-3">Paneer</a>
  <a class="list-group-item list-group-item-action" href="#list-item-4">Ghee</a>
</div>
<div class="col-sm-10">
<div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
  <h4 id="list-item-1">MILK</h4>
 <div class="row">
        <?php


	$result=$conn->prepare("select * from prod1 where category=1 order by id asc");
$result->execute();
for($i=0;$row=$result->fetch();$i++)
{

        ?>
			<div class="col-4 mt-2">
                <div class="card">
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
						
						   <p class="card-t" style="padding-left:30px;">
                            <strong>Available:-</strong>&nbsp;<?php echo $row['stock']?>
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
						 <table align="center"> <form method="post" action="cartsave.php">
					    <input type="number" name="p_id" value="<?php echo $row['id']; ?>" style="display: none">  
						<tr><td>Quantity :- </td><td> <input type="number" name="qty" required/> </td></tr>
<tr><td colspan=2><center><input type="submit" class="btn btn-primary" id="submit" name="submit" value="add to cart"></td></tr></center>
							</form></table>
              </div>
            </div>
        <?php 
        }
        ?>
    </div><hr>
  <h4 id="list-item-2">CURD</h4><hr>
 <div class="row">
        <?php


	$result=$conn->prepare("select * from prod1 where category=2 order by id asc");
$result->execute();
for($i=0;$row=$result->fetch();$i++)
{

        ?>
			<div class="col-4 mt-2">
                <div class="card">
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
						
						<p class="card-t" style="padding-left:30px;">
                            <strong>Available:-</strong>&nbsp;<?php echo $row['stock']?>
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
							
				<table align="center"> <form method="post" action="cartsave.php">
					    <input type="number" name="p_id" value="<?php echo $row['id']; ?>" style="display: none">  
						<tr><td>Quantity :- </td><td> <input type="number" name="qty" required/> </td></tr>
<tr><td colspan=2><center><input type="submit" class="btn btn-primary" id="submit" name="submit" value="add to cart"></td></tr></center>
							</form></table>
						
                </div>
            </div>
        <?php 
        }
        ?>
    </div><hr>
	
  <h4 id="list-item-3">PANEER</h4><hr>
 <div class="row"">
        <?php


	$result=$conn->prepare("select * from prod1 where category=3 order by id asc");
$result->execute();
for($i=0;$row=$result->fetch();$i++)
{

        ?>
			<div class="col-4 mt-2">
                <div class="card">
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
						
						
						<p class="card-t" style="padding-left:30px;">
                            <strong>Available:-</strong>&nbsp;<?php echo $row['stock']?>
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
							
				 <table> <form method="post" action="cartsave.php">
					    <input type="number" name="p_id" value="<?php echo $row['id']; ?>" style="display: none">  
						<tr><td>Quantity :- </td><td> <input type="number" name="qty" required/> </td></tr>
<tr><td colspan=2><center><input type="submit" class="btn btn-primary" id="submit" name="submit" value="add to cart"></td></tr></center>
							</form></table>		
						
                </div>
            </div>
        <?php 
        }
        ?>
    </div>
	<hr>
  <h4 id="list-item-4">GHEE</h4><hr>
 <div class="row">
        <?php


	$result=$conn->prepare("select * from prod1 where category=4 order by id asc");
$result->execute();
for($i=0;$row=$result->fetch();$i++)
{

        ?>
			<div class="col-4 mt-2">
                <div class="card">
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
						
						  <p class="card-t" style="padding-left:30px;">
                            <strong>Available:-</strong>&nbsp;<?php echo $row['stock']?>
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
                            </a></p>
							
			 <table style="padding-left:30px;"> <form method="post" action="cartsave.php">
					    <input type="number" name="p_id" value="<?php echo $row['id']; ?>" style="display: none">  
						<tr><td>Quantity :- </td><td> <input type="number" name="qty" required/> </td></tr>
<tr><td colspan=2><center><input type="submit" class="btn btn-primary" id="submit" name="submit" value="add to cart"></td></tr></center>
							</form></table>			

						
                </div>
            </div>
        <?php 
        }
        ?>
    </div>

</div>
</div>
</div>
<br>
</body>
</html>
<?php include("userfooter.php") ?>