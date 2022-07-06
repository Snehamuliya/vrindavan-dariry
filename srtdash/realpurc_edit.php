PurchaseEdit.php
<?php include("header.php");?>
 <div class="main-content-inner">
 <div class="row">
 <!-- Dark table start -->
 <div class="col-12 mt-5">
 <div class="card">
 <div class="card-body">
 <h4 class="header-title">Purchase Master</h4>
 <?php
 $id=$_GET["ID"];
 $result = $conn->prepare("SELECT * FROM purchase_master where ID=". $id);
 $result->execute();
 $row = $result->fetch(); 
 ?>
 <form action="PurchaseEdit.php?ID=<?php echo $id;?>" method="POST" 
enctype="multipart/form-data">
 <div class="form-row">
 <div class="col-md-3 mb-3"> 
 <label for="example-text-input" class="col-form-label">ID</label>
 <input class="form-control" type="text" id="example-text-input" 
placeholder="ID" readonly name="id" value="<?php echo $row['id']; ?>">
 </div>
 <div class="col-md-3 mb-3">
 <label for="validationCustom01">Supplier<span class="star" style="color: 
red">*</span> </label>Pro We Graphics
 <select class="form-control" name="name">
 <?php
 
 if($row['supplier_id']>0)
 {
 $result3 = $conn->prepare("SELECT * From supplier where 
id=".$row['supplier_id']."");
 $result3->execute();
 $rowcat2 = $result3->fetch();
 echo "<option selected value='". $rowcat2['id'] ."'>" .$rowcat2['Name'] 
."</option>" ;
 }
 $result4 = $conn->prepare("SELECT * From supplier where id not 
in(".$row['supplier_id'].") ");
 
 $result4->execute();
 for($k=0; $rowcompall1 = $result4->fetch(); $k++)
 {
 echo "<option value='". $rowcompall1['id'] ."'>" .$rowcompall1['Name'] 
."</option>" ;
 }
 ?>
 
 </select>Pro We Graphics
 </div>
 <div class="col-md-3 mb-3">
 <label for="example-date-input" class="col-form-label">Date</label>
 <input class="form-control" type="date" value="<?php echo $row['date']; ?>" 
id="example-date-input" name="date">
 </div>
 </div>
 
 <div class="single-table">
 <div class="table-responsive datatable-dark">
 <table class="table table-bordered text-center" id="newtable">
 <thead class="text">
 <tr>
 <th scope="col">Product</th>
 <th scope="col">Quantity</th>
 <th scope="col">Price</th>
 <th scope="col">Amount</th>
 <!----<th scope="col">GST %</th>
 <th scope="col">GST Amt</th>----->
 <th scope="col">Tax %</th>
 <th scope="col">Tax Amt</th>
 <th scope="col">Discount %</th>
 <th scope="col">Discount Amt</th>
 <th scope="col">GST %</th>
 <th scope="col">GST Amt</th>
 <th scope="col">Cess %</th>
 <th scope="col">Cess Amt</th>
 <th scope="col">Final Amount</th>Pro We Graphics
 <th scope="col">Actions</th>
 </tr>
 </thead>
 <tbody>
 <?php
 $result5 = $conn->prepare("SELECT * FROM purchase_detail where 
purchase_id=".$id);
 $result5->execute();
 for($i=0; $rowdet = $result5->fetch(); $i++){
 
 ?>
 <tr> 
 <th scope="row">
 <select class="form-control" name="product[]" style="width: 150px;">
 
 <?php
 if($rowdet['product_id']>0)
 {
 $result3 = $conn->prepare("SELECT * From product where 
id=".$rowdet['product_id']."");
 $result3->execute();
 $rowcat2 = $result3->fetch();
 echo "<option selected value='". $rowcat2['id'] ."'>" .$rowcat2['name'] 
."</option>" ;
 }
 $result4 = $conn->prepare("SELECT * From product where id 
not in(".$rowdet['product_id'].") ");
 $result4->execute();
 for($k=0; $rowcompall1 = $result4->fetch(); $k++)
 {
 echo "<option value='". $rowcompall1['id'] ."'>" 
.$rowcompall1['name'] ."</option>" ;
 }
 ?>
 
 </select> 
 </th>
 
 <td>
 <input class="form-control" type="text" placeholder="Quantity" 
id="quantity<?php echo $i+1;?>" name="quantity[]" onkeydown="calcurows(<?php echo $i+1;?>)" 
value="<?php echo $rowdet['quantity']; ?>" style="width: 80px;" >
 </td>
 <td>
 <input class="form-control" type="text" placeholder="Price" 
id="price<?php echo $i+1; ?>" name="price[]" onkeydown="calcurows(<?php echo $i+1;?>)" 
value="<?php echo $rowdet['price']; ?>" style="width: 70px;">
 </td>
 <td>
 <input class="form-control" type="text" 
placeholder="amount"id="amount<?php echo $i+1;?>" value="<?php echo $rowdet['amount']; ?>" 
name="amount[]" readonly onchange="totalamt('newtable')" style="width: 90px;" >
 </td>Pro Web Graphics
 <td>
 <input class="form-control" type="text" placeholder="Tax %" 
name="tax[]" id="tax<?php echo $i+1;?>" onkeydown="taxcalrows(<?php echo $i+1;?>)" value="<?php 
echo $rowdet['price']; ?>" style="width: 70px;">
 </td>
 <td>
 <input class="form-control" type="text" placeholder="Tax Amt" 
name="taxamt[]" id="taxamt<?php echo $i+1;?>" onkeydown="taxcalrows(<?php echo $i+1;?>)" 
readonly="" value="<?php echo $rowdet['taxamt']; ?>" style="width: 90px;">
 </td>
 <td>
 <input class="form-control" type="text" placeholder="Discount %" 
id="discount<?php echo $i+1;?>" name="discount[]" onkeydown="discalrows(<?php echo $i+1;?>)" 
value="<?php echo $rowdet['discount']; ?>" style="width: 70px;">
 </td>
 <td>
 <input class="form-control" type="text" placeholder="Discount Amt" 
id="discountamt<?php echo $i+1;?>" name="discountamt[]" onkeydown="discalrows(<?php echo 
$i+1;?>)" readonly="" value="<?php echo $rowdet['discountamt']; ?>" style="width: 90px;">
 </td>
 <td>
 <input class="form-control" type="text" placeholder="GST %" 
id="gst<?php echo $i+1;?>" name="gst[]" onkeyup="gstcalrows(<?php echo $i+1;?>)" value="<?php 
echo $rowdet['gst']; ?>" style="width: 70px;">
 </td>
 <td>
 <input class="form-control" type="text" placeholder="GST Amt" 
id="gstamt<?php echo $i+1;?>" name="gstamt[]" onkeyup="gstcalrows(<?php echo $i+1;?>)" 
readonly="" value="<?php echo $rowdet['gstamt']; ?>" style="width: 90px;">
 </td>
 <td>Pro Web Graphics
 <input class="form-control" type="text" placeholder="Cess %" 
id="cess<?php echo $i+1;?>" name="cess[]" onkeyup="cesscalrows(<?php echo $i+1;?>)" value="<?php 
echo $rowdet['cess']; ?>" style="width: 70px;">
 </td>
 <td>
 <input class="form-control" type="text" placeholder="Cess Amt" 
id="cessamt<?php echo $i+1;?>" name="cessamt[]" onkeyup="cesscalrows(<?php echo $i+1;?>)" 
readonly="" value="<?php echo $rowdet['cessamt']; ?>" style="width: 90px;">
 </td>
 <td>
 <input class="form-control" type="number" placeholder="Final Amount" 
id="finalamount<?php echo $i+1;?>" name="finalamount[]" onkeydown="finalcalrows(<?php echo 
$i+1;?>)" readonly="" value="<?php echo $rowdet['finalamount']; ?>" style="width: 100px;">
 </td>
 
 <th scope="row">
 <p>
 
 <input type="button" class="btn btn-primary" onclick="rowFunction()" 
value="+">
 <input type='button' class='btn btn-primary' 
onclick='rowRemoveFunction("+ rowCount +")' value='-'>
 </p>
 
 </th>
 </tr>
 
 <?php }?>
 
 </tbody>
 </table>
 </div> Pro Web Graphics
 </div> 
 <div class="form-row" style="display: none;">
 <div class="col-md-3 mb-3" >
 <label for="example-text-input" class="col-form-label">Sub Total</label>
 <input class="form-control " type="text" readonly placeholder="Sub Total" 
id="sub" name="sub" readonly value="<?php echo $row['sub']; ?>">
 </div>
 </div>
 <div class="form-row" style="display: none;">
 <div class="col-md-2 mb-3">
 <label for="validationCustom01">GST %</label>
 <input class="form-control " type="text" placeholder="GST %" id="gstmaster" 
name="gstmaster" value="<?php echo $row['gstmaster']; ?>" onkeydown="mastergst();">
 </div>
 <div class="col-md-2 mb-3">
 <label for="validationCustom01">GST Amount</label>
 <input class="form-control " type="text" placeholder="GST Amount" 
id="gstamtmaster" name="gstamtmaster" readonly value="<?php echo $row['gstamtmaster']; ?>" 
onkeydown="mastergst()">
 </div>
 <div class="col-md-2 mb-3">
 <label for="validationCustom01">Tax %</label>
 <input class="form-control" type="text" placeholder="Tax %" id="taxmaster" 
name="taxmaster" value="<?php echo $row['taxmaster']; ?>" onkeydown="mastertax();" >
 </div>
 <div class="col-md-2 mb-3">
 <label for="validationCustom01">Tax Amount</label>Pro Web Graphics
 <input class="form-control" type="text" placeholder="Tax Amount" 
id="taxamtmaster" name="taxamtmaster" readonly value="<?php echo $row['taxamtmaster']; ?>" 
onkeydown="mastertax();">
 </div>
 <div class="col-md-2 mb-3">
 <label for="validationCustom01">Discount %</label>
 <input class="form-control" type="text" placeholder="Discount %" 
id="discountmaster" name="discountmaster" value="<?php echo $row['discountmaster']; ?>" 
onkeydown="masterdis();" >
 </div>
 <div class="col-md-2 mb-3">
 <label for="validationCustom01">Discount Amount</label>
 <input class="form-control" type="text" placeholder="Discount Amount" 
id="discountamtmaster" name="discountamtmaster" readonly value="<?php echo 
$row['discountamtmaster']; ?>" onkeydown="masterdis();" >
 </div>
 </div>
 
 <div class="form-row">
 <div class="col-md-2 mb-3" >
 <label for="example-text-input" class="col-form-label">Grand Total</label>
 <input class="form-control" type="text" placeholder="Grand Total" 
id="grandtotalmaster" name="grandtotalmaster" readonly value="<?php echo 
$row['grandtotalmaster']; ?>" onkeydown="mastergrand()">
 </div>
 
 <div class="col-md-2 mb-3">
 <label for="example-date-input" class="col-form-label">Payment 
Method</label>
 <select class="form-control" name="payment">
 <option <?php if ( $row['payment']=="Cash") echo 'selected= "selected"' ?> 
value="Cash">Cash</option>Pro Web Graphics
 <option <?php if ( $row['payment']=="Card") echo 'selected= "selected"' ?> 
value="Card">Card</option>
 <option <?php if ( $row['payment']=="Credit") echo 'selected= "selected"' ?> 
value="Credit">Credit</option>
 </select>
 </div>
 </div>
 
 <p>
 
 <button type="submit" class="btn btn-primary" id="submit" 
name="submit">Update</button>
 <!-- <a href="#?ID=<?php echo $id; ?>" class="btn btn-primary" 
id="submit">Print</a> 
 <a href="#?ID=<?php echo $id; ?>" class="btn btn-primary" 
id="submit">Bill Print</a> -->
 <a href="SaleList.php" class="btn btn-primary" id="submit">Back</a> 
 </p>
 </div>
 </form> 
 
 <script>
 function totalamt(x){
 var rowCount = document.getElementById(x).rows.length-1;
 var total=0;
 var i,amt;
 for(i=1; i <= rowCount; i++)
 {
 amt=document.getElementById('finalamount'+i).value;Pro Web Graphics
 total= total+ parseFloat(amt) ;
 
 } 
 document.getElementById('sub').value= total;
 }
function calcu()
{
 var x = document.getElementById('quantity1').value;
 x = parseFloat(x);
 var y = document.getElementById('price1').value;
 y = parseFloat(y);
 if(x > 0 && y >0)
{
 var amt=x * y;
 amt = parseFloat(amt);
 document.getElementById('amount1').value= amt;
 finalcal();
 mastergrand();
 totalamt('newtable');
}
}
function calcurows(i)
{
 var x = document.getElementById('quantity'+i).value;
 x = parseFloat(x);Pro Web Graphics
 var y = document.getElementById('price'+i).value;
 y = parseFloat(y);
 if(x > 0 && y >0)
{
 // document.getElementById('amount'+i).value= x * y;
 var amt=x * y;
 amt = parseFloat(amt);
 document.getElementById('amount'+i).value= amt;
 finalcalrows(i);
 mastergrand();
 totalamt('newtable');
 
}
}
function taxcal()
{
 var a = document.getElementById('amount1').value;
 a = parseFloat(a);
 var b = document.getElementById('tax1').value;
 b = parseFloat(b);
 if(a > 0 && b >0)
{
 var amt=a * b /100;Pro Web Graphics
 amt = parseFloat(amt);
 document.getElementById('taxamt1').value= amt;
 totalamt('newtable');
}
 
}
function taxcalrows(i)
{
 var a = document.getElementById('amount'+i).value;
 a = parseFloat(a);
 var b = document.getElementById('tax'+i).value;
 b = parseFloat(b);
 if(a > 0 && b >0)
{
 var amt=(a * b) / 100;
 amt = parseFloat(amt);
 document.getElementById('taxamt'+i).value= amt;
 totalamt('newtable'); 
}
 
}
function discal()
{Pro Web Graphics
 var p = document.getElementById('amount1').value;
 p = parseFloat(p);
 var q = document.getElementById('discount1').value;
 q = parseFloat(q);
 if(p > 0 && q >0)
{
 var amt=p * q/100;
 amt = parseFloat(amt);
 document.getElementById('discountamt1').value= amt;
 totalamt('newtable');
}
 
}
function discalrows(i)
{
 var p = document.getElementById('amount'+i).value;
 p = parseFloat(p);
 var q = document.getElementById('discount'+i).value;
 q = parseFloat(q);
 if(p > 0 && q >0)
{Pro Web Graphics
 var amt=(p * q) / 100;
 amt = parseFloat(amt);
 document.getElementById('discountamt'+i).value= amt;
 totalamt('newtable'); 
}
 
}
function finalcal()
{
 var f = document.getElementById('amount1').value;
 f = parseFloat(f);
 var t = document.getElementById('taxamt1').value;
 t = parseFloat(t);
 var j = document.getElementById('discountamt1').value;
 j = parseFloat(j);
 if(f>0)
{
 var amt=f + t - j;
 amt = parseFloat(amt);
 document.getElementById('finalamount1').value= amt;
 totalamt('newtable'); 
}Pro Web Graphics
}
function finalcalrows(i)
{
 var f = document.getElementById('amount'+i).value;
 f = parseFloat(f);
 var t = document.getElementById('taxamt'+i).value;
 t = parseFloat(t);
 var j = document.getElementById('discountamt'+i).value;
 j = parseFloat(j);
 if(f>0)
{
 var amt=f + t - j;
 amt = parseFloat(amt);
 document.getElementById('finalamount'+i).value= amt;
 totalamt('newtable'); 
}
}
function mastergst()
{
 var finalamount = document.getElementById('sub').value;Pro Web Graphics
 finalamount = parseFloat(finalamount);
 var gstmaster = document.getElementById('gstmaster').value;
 gstmaster = parseFloat(gstmaster);
{
 document.getElementById('gstamtmaster').value= (finalamount * gstmaster) / 100;
}
}
function mastertax()
{
 var finalamount = document.getElementById('sub').value;
 finalamount = parseFloat(finalamount);
 var taxmaster = document.getElementById('taxmaster').value;
 taxmaster = parseFloat(taxmaster);
{
 document.getElementById('taxamtmaster').value= (finalamount * taxmaster) / 100;
}
}Pro Web Graphics
function masterdis()
{
 var finalamount = document.getElementById('sub').value;
 finalamount = parseFloat(finalamount);
 var discountmaster = document.getElementById('discountmaster').value;
 discountmaster = parseFloat(discountmaster);
 {
 document.getElementById('discountamtmaster').value= (finalamount * discountmaster) / 100; 
 }
 
}
function mastergrand()
{
 var finalamount = document.getElementById('sub').value;
 finalamount = parseFloat(finalamount);
 var gstamtmaster = document.getElementById('gstamtmaster').value;
 gstamtmaster = parseFloat(gstamtmaster);
 var taxamtmaster = document.getElementById('taxamtmaster').value;
 taxamtmaster = parseFloat(taxamtmaster);
 var discountamtmaster = document.getElementById('discountamtmaster').value;
 discountamtmaster = parseFloat(discountamtmaster);Pro Web Graphics
 document.getElementById('grandtotalmaster').value= ((finalamount + gstamtmaster) + 
(taxamtmaster)) - discountamtmaster;
}
 
function rowRemoveFunction(i) {
 
 var a = document.getElementById('newtable');
 a.deleteRow(i);
 
 
 }
function rowFunction() {
 var a = document.getElementById('newtable').insertRow();
 var product = a.insertCell(0);
 var Qty = a.insertCell(1);
 var price = a.insertCell(2);
 var amount = a.insertCell(3);
 var tax = a.insertCell(4);
 var taxamt = a.insertCell(5);
 var discount = a.insertCell(6);
 var discountamt = a.insertCell(7);
 var gst = a.insertCell(8);
 var gstamt = a.insertCell(9);
 var cess = a.insertCell(10);
 var cessamt = a.insertCell(11);
 var finalamount = a.insertCell(12);
 var rowCount = document.getElementById('newtable').rows.length-1;Pro Web Graphics
 var btn = a.insertCell(13);
 
 
 
 product.innerHTML ="<select class='form-control' name='product[]'><?php
 $result = $conn->prepare("SELECT * From product_master");
 $result->execute();
 for($i=0; $row = $result->fetch(); $i++){
 echo "<option value='". $row['id'] ."'>" .$row['name'] ."</option>" ;
 }
 ?></select>"
 Qty.innerHTML = "<input class='form-control' type='text' placeholder='Quantity' id='quantity"+ 
rowCount +"' name='quantity[]' onkeyup='calcurows("+ rowCount +")' >";
 price.innerHTML = "<input class='form-control' type='text' placeholder='price' id='price"+ 
rowCount +"' name='price[]' onkeyup='calcurows("+ rowCount +")' >";
 amount.innerHTML = "<input class='form-control' type='text' placeholder='amount' 
id='amount"+ rowCount +"' name='amount[]' readonly value='0' onkeyup='calcurows("+ rowCount 
+")'>"
 tax.innerHTML = "<input class='form-control' type='text' placeholder='tax' name='tax[]' id='tax"+ 
rowCount +"' onkeyup='taxcalrows("+ rowCount +")'>";
 taxamt.innerHTML = "<input class='form-control' type='text' placeholder='taxamt' 
name='taxamt[]' id='taxamt"+ rowCount +"' readonly value='0' onkeyup='taxcalrows("+ rowCount +")' 
>";
 discount.innerHTML = "<input class='form-control' type='text' placeholder='discount' 
name='discount[]' id='discount"+ rowCount +"' onkeyup='discalrows("+ rowCount +")' >";
 discountamt.innerHTML = "<input class='form-control' type='text' placeholder='discountamt' 
name='discountamt[]' id='discountamt"+ rowCount +"' readonly value='0' onkeyup='discalrows("+ 
rowCount +")' >";
 gst.innerHTML = "<input class='form-control' type='text' placeholder='gst' name='gst[]' 
id='gst"+ rowCount +"' onkeyup='gstcalrows("+ rowCount +")'>";Pro Web Graphics
 gstamt.innerHTML = "<input class='form-control' type='text' placeholder='gstamt' 
name='gstamt[]' id='gstamt"+ rowCount +"' readonly value='0' onkeyup='gstamtcalrows("+ rowCount 
+")' >";
 cess.innerHTML = "<input class='form-control' type='text' placeholder='cess' name='cess[]' 
id='cess"+ rowCount +"' onkeyup='cesscalrows("+ rowCount +")'>";
 cessamt.innerHTML = "<input class='form-control' type='text' placeholder='cessamt' 
name='cessamt[]' id='cessamt"+ rowCount +"' readonly value='0' onkeyup='cesscalrows("+ rowCount 
+")' >";
 finalamount.innerHTML = "<input class='form-control' type='text' placeholder='finalamount' 
id='finalamount"+ rowCount +"' name='finalamount[]' readonly value='0' onkeyup='finalcalrows("+ 
rowCount +")' >";
 btn.innerHTML = "<input type='button' class='btn btn-primary' onclick='rowFunction()' 
value='+'><input type='button' class='btn btn-primary' onclick='rowRemoveFunction("+ rowCount +")' 
value='-'>";
 
 
 }
</script>
 
 
 <?php
//echo "Data inserted successfully";
if (isset($_POST['submit']))
 
{
 $name=$_POST['name'];
$date=$_POST['date'];
 $taxmaster=$_POST['taxmaster'];
$taxamtmaster=$_POST['taxamtmaster'];
 $gstmaster=$_POST['gstmaster'];
$gstamtmaster=$_POST['gstamtmaster'];
 $discountmaster=$_POST['discountmaster'];
$discountamtmaster=$_POST['discountamtmaster']; 
$grandtotalmaster=$_POST['grandtotalmaster'];
$sub=$_POST['sub'];
$payment=$_POST['payment'];
 $product=$_POST['product'];
 $quantity=$_POST['quantity']; 
$price=$_POST['price'];
$amount=$_POST['amount'];
 $tax=$_POST['tax'];
$taxamt=$_POST['taxamt'];
 $discount=$_POST['discount'];
$discountamt=$_POST['discountamt'];
$gst=$_POST['gst'];
$gstamt=$_POST['gstamt'];
 $cess=$_POST['cess'];
$cessamt=$_POST['cessamt'];
 $finalamount=$_POST['finalamount'];

 
 $result->execute();
 
 if (count($product) > 0)
 {
 
 $result3 = $conn->prepare("delete from purchase_detail Where purchase_id=$id"); 
 $result3->execute();
 $result8 = $conn->prepare("delete from stock_det Where purchase_id=$id"); 
 $result8->execute();
 for ($i=0;$i<=count($product)-1;$i++){
 // $result2 = $conn->prepare("INSERT INTO sale_detail(sale_id,product_id,quantity,price,amount,tax,taxamt,discount,discountamt,finalamount) VALUES ((select max(id) from sale_master),'$product[$i]','$quantity[$i]','$price[$i]','$amount[$i]','$tax[$i]','$taxamt[$i]','$discount[$i]','$discountamt[$i]','$finalamount[$i]')");
 
 $result2 = $conn->prepare("INSERT INTO 
purchase_detail(purchase_id,product_id,quantity,price,amount,tax,taxamt,discount,discountamt,gst,gst
amt,cess,cessamt,finalamount) VALUES 
('$id','$product[$i]','$quantity[$i]','$price[$i]','$amount[$i]','$tax[$i]','$taxamt[$i]','$discount[$i]','$disco
untamt[$i]','$gst[$i]','$gstamt[$i]','$cess[$i]','$cessamt[$i]','$finalamount[$i]')");
 $result2->execute(); 
$resultstk = $conn->prepare("INSERT INTO stock_det(stock, 
product_id,Purchase_id,PurchaseRet_id,Sale_id,SaleRet_id) VALUES 
('$quantity[$i]','$product[$i]',(select max(id) from purchase_master),0,0,0)");
 $resultstk->execute(); 
}
}
 if($result)
 {
 echo "<script>
 alert('Your record is updated successfully...!');
 window.location.href='PurchaseList.php';
 </script>";
 }
 else
 {
 echo "error in first query";
 }
 
}
?>
 </div>
 </div> 
 
 </div>
 </div>
 </div>
 <!-- main content area end -->
<?php include("footer.php");?>
