
<?php include("connection.php"); ?>

<?php

$DelID=$_GET["id"];




$result = $conn->prepare("delete from subcategory where id=$DelID" );
$result->execute();

if ($result)
{
echo "<script>
alert('Your record is deleted successfully...!');
window.location.href='Subcategoryview.php';
</script>";

}




?>