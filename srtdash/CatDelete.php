
<?php include("connection.php"); ?>

<?php

$DelID=$_GET["id"];




$result = $conn->prepare("delete from category where id=$DelID" );
$result->execute();

if ($result)
{
echo "<script>
alert('Your record is deleted successfully...!');
window.location.href='Categoryview.php';
</script>";

}




?>