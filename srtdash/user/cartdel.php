
<?php include("connection.php"); ?>

<?php

$DelID=$_GET["id"];


$result = $conn->prepare("delete from cart where id=$DelID" );
$result->execute();

$result1 = $conn->prepare("delete from cart_bil where id=$DelID" );
$result1->execute();

if ($result && $result1)
{
echo "<script>
alert('Your record is deleted successfully...!');
window.location.href='cart.php';
</script>";

}




?>