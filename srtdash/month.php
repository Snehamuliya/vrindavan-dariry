<?php 
$month = date('m');

if($month == 07){
   echo "<br />December is the month :)";
} else {
   echo "<br /> The month is probably not December";
}
?>
<?php 
$monthh = date('m-d-Y');
echo $monthh;
if($monthh = 07-18-2021){
   echo "<br />December is the month :)";
} else {
   echo "<br /> The month is probably not December";
}

?>
 <?php $transdate = date('m-d-Y', time());

      $d = date_parse_from_format("m-d-y",$transdate);



     $month = $d["month"];

      if($month == "7"){

    echo "December is the month :)";
       } else {
    echo "The month is probably not December";
       }
?>