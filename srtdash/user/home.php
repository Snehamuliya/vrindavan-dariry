<?php include("userheader.php") ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1300px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.9s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 2.5s;
  animation-name: fade;
  animation-duration: 2.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}

 <!--slider end --> 

</style>
</head>
<body>
<!--slider start -->
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 5</div>
  <img src="../b6.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 5</div>
  <img src="../b1.png" style="width:100%">
  <div class="text"></div>
</div>


<div class="mySlides fade">
  <div class="numbertext">4 / 5</div>
  <img src="../b7.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 5</div>
  <img src="../b2.jpg" style="width:100%">
  <div class="text"></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>

</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<!-- slider end --->

<div class="row" style="margin-left:60px;margin-right:60px;">
<div class="col-6">
<h2 align="center" style="">vision</h2>
<p style="font-family:Malgun Gothic;font-size:20px;">“Exceptional quality, lifelong health” We want to become the benchmark for providing organic, healthy products that suit today’s fast-paced, ever changing lifestyles.
 We want to become a preferred choice for customers in the food and beverages industry.
</p>	</div>
<div class="col-6">
<h2 align="center">mission</h2>
<p style="font-family:Malgun Gothic;font-size:20px;">Our mission is to become leaders in the business of providing nutritional A2 natural milk that is unadulterated and safe to drink. Our aim is to deliver milk to customers’
 homes within 12 hours of milking in order to retain the freshness of Gir cow milk. </p>
	</div>

    </div>
<br>
<h1 align="center">Most ordered product </h1>
<div class="row" style="margin-left:60px;margin-right:60px;">
        <?php


	$result=$conn->prepare("select * from prod1 where category between 3 and 5 or category=1");
$result->execute();
for($i=0;$row=$result->fetch();$i++)
{

        ?>
			<div class="col-4 mt-2">
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
				
							</p>
		     
			
                        
										
                </div>
            </div>
			
			
        <?php 
        }
        ?>

    </div>
 <br>
 <div class="row" style="margin-left:40px;margin-right:40px;">
<div class="col-sm-6">
<img src="../home3.jpg" class="img-fluid" height="200px"></img>
	</div>
<div class="col-sm-6" style="font-family:Sitka Small;">
<br><br>
<h2>Our Cows</h2>
Pedigreed, perfect and pampered, our cross bred Swiss Holstein and Friesian cows are known world- over for their ability to produce high quality milk. Each cow on our farm has her own bed, and is kept in perfect condition. Apart from shady green 
areas to rest and ruminate, they are kept cool with water sprays and fans. The cows are nurtured and cherished like no other cows in the country. The reason? Contented cows give better milk! This creamier, far more nourishing milk tastes better than anything experienced before.
</div>
<div class="col-sm-6" style="font-family:Sitka Small;">
<br><br>
<h2>Our nurturing</h2>
The cows are bestowed with care by a specially trained team. What we ingrain in our team is that it's not what we want, but what the cows want! So from 24x7 on-demand supplies of food and water to providing them their very own fans,
 sprinklers and sprays; from ensuring that milking is never forced, to being nurtured by expert handlers and healthcare providers, the cows receive expert loving care all the way.
	https://www.youtube.com/watch?v=dG6ZieI8CVQ</div>
<div class="col-sm-6">
<img src="../home2.jpg" class="img-fluid" height="200px"></img>
</div>	
    </div>
	
<?php include("slider.php") ?>	
</body>
</html> 
<?php include("userfooter.php") ?>