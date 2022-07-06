
<?php include("connection.php"); ?>

<?php

$DelID=$_GET["id"];




$result = $conn->prepare("delete from sale_return where sale_ret_id=$DelID" );
$result->execute();

if ($result)
{
echo "<script>
alert('Your record is deleted successfully...!');
window.location.href='sreturn_view.php';
</script>";

}




?>