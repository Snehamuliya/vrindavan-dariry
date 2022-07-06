<?php include("header.php");?>  
<script>    
    function rowFunction(x) { 
            var a = document.getElementById(x).insertRow(0); 
            var b = a.insertCell(0); 
            var c = a.insertCell(1); 
            b.innerHTML = c.innerHTML = "row"; 
            alert("wdfgdefg"); 
         } 
</script> 
  
            <div class="main-content-inner"> 
                <div class="row"> 
                     <!-- Dark table start --> 
                    <div class="col-12 mt-5"> 
                        <div class="card"> 
                            <div class="card-body"> 
                                <h4 class="header-title">sale Master</h4> 
                <form action="SaleMaster.php" method="POST" enctype="multipart/form-data"> 
                                       <div class="form-row"> 
                                        <div class="col-md-4 mb-3"> 
                                            <label for="validationCustom01">Customer<span class="star" style="color: red">*</span> </label> 
                                            <select class="form-control col-md-6" name="cus"> 

                                                 
                                                <?php 
                                                 $result = $conn->prepare("SELECT * From customer"); 
                                                 $result->execute(); 
                                                 for($i=0; $row = $result->fetch(); $i++){ 
                                                 echo "<option  value='". $row['id'] ."'>" .$row['Name'] ."</option>" ; 
                                                 } 
                                                   ?>                                                
                                            </select> 
                                        </div>                                            
                                            <div class="col-md-3 mb-3"> 
                                            <label for="example-date-input" class="col-form-label">Date</label> 
                                            <input class="form-control" type="date" id="example-date-input" name="date"> 
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
                                                    <th scope="col">Final Amount</th> 
                                                    <th scope="col">Actions</th> 
                                                </tr> 
                                            </thead> 
                                            <tbody> 
                                                <tr> 
                                                  <th scope="row"> 
                                                  <div class=""> 
                                                  <select class="form-control" name="product[]" style="width: 150px;"> 
                                               <?php 
                                                 $result = $conn->prepare("SELECT * From prod1"); 
                                                 $result->execute(); 
                                                 for($i=0; $row = $result->fetch(); $i++){ 
                                                 echo "<option  value='". $row['id'] ."'>" .$row['name'] ."</option>" ; 
                                                 } 
                                                   ?>      
                                            </select> 
                                        </div> 
                                         
                                                    </th>                                                 
                                                    <td> 
                                                        <input class="form-control" type="text" placeholder="Quantity" id="quantity1" name="quantity[]" onkeyup="calcu()" style="width: 80px;"> 

                                                    </td> 
                                                    <td> 
                                                        <input class="form-control" type="text" placeholder="Price" id="price1" name="price[]" onkeyup="calcu()" style="width: 70px;"> 
                                                    </td> 
                                                     <td> 
                                                        <input class="form-control" type="text" placeholder="amount" id="amount1" value="0" readonly="" name="amount[]" onkeyup="calcu('newtable')"  style="width: 90px;"> 
                                                    </td> 
                                                     <td> 
                                                        <input class="form-control" type="text" placeholder="Tax %" name="tax[]" id="tax1" onkeyup="taxcal()" style="width: 70px;"> 
                                                    </td> 
                                                     <td> 
                                                        <input class="form-control" type="text" placeholder="Tax Amt" name="taxamt[]" id="taxamt1" onkeyup="taxcal('newtable')" readonly="" value="0" style="width: 90px;"> 
                                                    </td> 
                                                     <td> 
                                                        <input class="form-control" type="text" placeholder="Discount %" id="discount1" name="discount[]" onkeyup="discal()" style="width: 70px;" > 
                                                    </td> 
                                                     <td> 
                                                        <input class="form-control" type="text" placeholder="Discount Amt" id="discountamt1" name="discountamt[]" onkeyup="discal('newtable')" readonly="" value="0" style="width: 90px;"> 
                                                    </td> 
                                                     <td> 
                                                        <input class="form-control" type="text" placeholder="GST%" id="gst1" name="gst[]" onkeyup="gstcal()" style="width: 70px;"> 
                                                    </td> 

                                                     <td> 
                                                        <input class="form-control" type="text" placeholder="GST Amt" id="gstamt1" name="gstamt[]" onkeyup="gstcal('newtable')" readonly="" value="0" style="width: 90px;"> 
                                                    </td> 
                                                     <td> 
                                                        <input class="form-control" type="text" placeholder="Cess%" id="cess1" name="cess[]" onkeyup="cesscal()" style="width: 70px;"> 
                                                    </td> 
                                                     <td> 
                                                        <input class="form-control" type="text" placeholder="Cess Amt" id="cessamt1" name="cessamt[]" onkeyup="cesscal('newtable')" readonly="" value="0" style="width: 90px;"> 
                                                    </td> 
                                                     <td> 
                                                        <input class="form-control" type="number" placeholder="Final Amount" id="finalamount1" name="finalamount[]" onkeyup="finalcal('newtable')" readonly="" value="0" style="width: 100px;"> 
                                                    </td> 
                                                     
                                                     <th scope="row"> 
                                                        <p> 
                                                            <input type="button" class="btn btn-primary"  onclick="rowFunction()" value="+"> 
                                                      </p> 
                                                     
                                                    </th>  
                                                </tr>                                                                                          
                                            </tbody> 
                                        </table> 
                                </div>   
 
                                </div>  
                               <div class="form-row" style="display: none;"> 
                                        <div class="col-md-3 mb-3" > 
                                            <label for="example-text-input" class="col-form-label">Sub Total</label> 
                                           <input class="form-control " type="text" readonly placeholder="Sub Total" id="sub" name="sub" onkeyup="mastergst()"> 
                                        </div> 
                                </div> 
                               <div class="form-row" style="display: none;"> 
                                                <div class="col-md-2 mb-3"> 
                                            <label for="validationCustom01">GST %</label> 
                                            <input class="form-control " type="text" placeholder="GST %" id="gstmaster" name="gstmaster" onkeyup="mastergst()"> 
                                        </div> 
                                        <div class="col-md-2 mb-3"> 
                                            <label for="validationCustom01">GST Amount</label> 
                                            <input class="form-control " type="text" placeholder="GST Amount" id="gstamtmaster" name="gstamtmaster" onkeyup="mastergst()" readonly="" value="0"> 
                                        </div> 
                                        <div class="col-md-2 mb-3"> 
                                            <label for="validationCustom01">Tax %</label> 
                                            <input class="form-control" type="text" placeholder="Tax %" id="taxmaster" name="taxmaster" onkeyup="mastertax()"> 
                                        </div> 
                                        <div class="col-md-2 mb-3"> 
                                            <label for="validationCustom01">Tax Amount</label> 
                                            <input class="form-control" type="text" placeholder="Tax Amount" id="taxamtmaster" name="taxamtmaster" onkeyup="mastertax()" readonly="" value="0"> 
                                        </div> 
                                         <div class="col-md-2 mb-3"> 

                                            <label for="validationCustom01">Discount %</label> 
                                            <input class="form-control" type="text" placeholder="Discount %" id="discountmaster" name="discountmaster" onkeyup="masterdis()"> 
                                        </div> 
                                        <div class="col-md-2 mb-3"> 
                                            <label for="validationCustom01">Discount Amount</label> 
                                            <input class="form-control" type="text" placeholder="Discount Amount" id="discountamtmaster" name="discountamtmaster" onkeyup="masterdis()" readonly="" value="0"> 
                                        </div> 
                                        </div> 
                                    <div class="form-row"> 
                                        <div class="col-md-2 mb-3" > 
                                            <label for="example-text-input" class="col-form-label">Grand Total</label> 
                                            <input class="form-control" type="text" placeholder="Grand Total" id="grandtotalmaster"  name="grandtotalmaster" onkeyup="mastergrand()" readonly=""> 
                                        </div> 
                                            <div class="col-md-2 mb-3"> 
                                            <label for="example-date-input" class="col-form-label">Payment Method</label> 
                                            <select class="form-control" name="payment"> 
                                                <option  value="Cash">Cash</option> 
                                                <option value="Card">Card</option> 
                                                <option value="Credit">Credit</option> 
                                            </select> 
                                        </div> 
                                         </div> 
                                     <div class="form-row"> 
                                         
                                        <div class="col-md-2 mb-3" > 

                                             <button type="submit" class="btn btn-primary"  id="submit" name="submit">Save</button> 
                                             <a href="PurchaseView.php" class="btn btn-primary" id="submit">Back</a> 
                                        </div> 
                                    </div> 
                                           
<script> 
       function totalamt(x){ 
      var rowCount = document.getElementById(x).rows.length-1; 
       var total=0; 
       var i,amt; 
       for(i=1; i <= rowCount; i++) 
       { 
           amt=document.getElementById('finalamount'+i).value; 
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
    x = parseFloat(x);  
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
    var amt=a * b /100; 
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
function gstcal()
{
var k = document.getElementById('amount1').value;
k = parseFloat(k);
var m = document.getElementById('gst1').value;
m = parseFloat(m);

if(k > 0 && m >0)

{

var amt=(k * m) / 100;
amt = parseFloat(amt);
document.getElementById('gstamt1').value= amt;
totalamt('newtable');
}

}

function gstcalrows(i)
{
var k = document.getElementById('amount'+i).value;
k = parseFloat(k);

var m = document.getElementById('gst'+i).value;
m = parseFloat(m);

if(k > 0 && m >0)

{

var amt=(k * m) / 100;
amt = parseFloat(amt);
document.getElementById('gstamt'+i).value= amt;
totalamt('newtable');
}

}



function cesscal()
{
var k = document.getElementById('amount1').value;
k = parseFloat(k);

var m = document.getElementById('cess1').value;
m = parseFloat(m);

if(k > 0 && m >0)

{

var amt=k * m/100;
amt = parseFloat(amt);
document.getElementById('cessamt1').value= amt;
totalamt('newtable');
}

}

function cesscalrows(i)
{
var k = document.getElementById('amount'+i).value;
k = parseFloat(k);

var m = document.getElementById('cess'+i).value;
m = parseFloat(m);

if(k > 0 && m >0)

{

var amt=(k * m) / 100;
amt = parseFloat(amt);
document.getElementById('cessamt'+i).value= amt;
totalamt('newtable');
}

}



function discal() 
{ 
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
{  
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
	var g = document.getElementById('gstamt1').value; 
    g = parseFloat(g);
    var c = document.getElementById('cessamt1').value; 
    c = parseFloat(c);
    if(f>0)  
{ 
    var amt=f + t - j + g + c; 
    amt = parseFloat(amt); 
    document.getElementById('finalamount1').value= amt; 
   totalamt('newtable');  
}   
}  
function finalcalrows(i) 
{ 
    var f = document.getElementById('amount'+i).value; 
    f = parseFloat(f);  
     var t = document.getElementById('taxamt'+i).value; 
    t = parseFloat(t);  
    var j = document.getElementById('discountamt'+i).value; 
    j = parseFloat(j); 
	var g = document.getElementById('gstamt'+i).value; 
    g = parseFloat(g);
    var c = document.getElementById('cessamt'+i).value; 
    c = parseFloat(c);
    if(f>0)  
{ 

    var amt=f + t - j + g + c; 
    amt = parseFloat(amt); 
    document.getElementById('finalamount'+i).value= amt; 
   totalamt('newtable');   
}   
}    
function mastergst() 
{ 
    var finalamount = document.getElementById('sub').value; 
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
}  
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
    discountamtmaster = parseFloat(discountamtmaster);  
    document.getElementById('grandtotalmaster').value= ((finalamount + gstamtmaster) + (taxamtmaster)) - discountamtmaster; 
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
            var btn = a.insertCell(13);   
            var rowCount = document.getElementById('newtable').rows.length-1; 
             
             
            product.innerHTML ="<select class='form-control' name='product[]'><?php 
                                                 $result = $conn->prepare("SELECT * From product"); 
                                                 $result->execute(); 
                                                 for($i=0; $row = $result->fetch(); $i++){   
                                                 echo "<option  value='". $row['id'] ."'>" .$row['name'] ."</option>" ; 
                                                 } 
                                                   ?></select>" 
            Qty.innerHTML = "<input class='form-control' type='text' placeholder='Quantity' id='quantity"+ rowCount +"'  name='quantity[]' onkeyup='calcurows("+ rowCount +")' >"; 

            price.innerHTML = "<input class='form-control' type='text' placeholder='price' id='price"+ rowCount +"' name='price[]' onkeyup='calcurows("+ rowCount +")' >"; 
             amount.innerHTML = "<input class='form-control' type='text' placeholder='amount' id='amount"+ rowCount +"' name='amount[]' readonly value='0'   onkeyup='calcurows("+ rowCount +")'>" 
              tax.innerHTML = "<input class='form-control' type='text' placeholder='tax' name='tax[]' id='tax"+ rowCount +"' onkeyup='taxcalrows("+ rowCount +")'>"; 
               taxamt.innerHTML = "<input class='form-control' type='text' placeholder='taxamt' name='taxamt[]' id='taxamt"+ rowCount +"'   readonly value='0'   onkeyup='taxcalrows("+ rowCount +")' >"; 
               discount.innerHTML = "<input class='form-control' type='text' placeholder='discount' name='discount[]' id='discount"+ rowCount +"'  onkeyup='discalrows("+ rowCount +")' >"; 
               discountamt.innerHTML = "<input class='form-control' type='text' placeholder='discountamt' name='discountamt[]' id='discountamt"+ rowCount +"'   readonly value='0' onkeyup='discalrows("+ rowCount +")' >"; 
                gst.innerHTML = "<input class='form-control' type='text' placeholder='gst' name='gst[]' id='gst"+ rowCount +"' onkeyup='gstcalrows("+ rowCount +")'>"; 
               gstamt.innerHTML = "<input class='form-control' type='text' placeholder='gstamt' name='gstamt[]' id='gstamt"+ rowCount +"'   readonly value='0'   onkeyup='gstamtcalrows("+ rowCount +")' >";  
                cess.innerHTML = "<input class='form-control' type='text' placeholder='cess' name='cess[]' id='cess"+ rowCount +"' onkeyup='cesscalrows("+ rowCount +")'>"; 
               cessamt.innerHTML = "<input class='form-control' type='text' placeholder='cessamt' name='cessamt[]' id='cessamt"+ rowCount +"'   readonly value='0'   onkeyup='cesscalrows("+ rowCount +")' >"; 
               finalamount.innerHTML = "<input class='form-control' type='text' placeholder='finalamount' id='finalamount"+ rowCount +"' name='finalamount[]'  readonly value='0'  onkeyup='finalcalrows("+ rowCount +")' >";  
               btn.innerHTML = "<input type='button' class='btn btn-primary' onclick='rowFunction()' value='+'><input type='button' class='btn btn-primary' onclick='rowRemoveFunction("+ rowCount +")' value='-'>"; 
               
                    

         } 
</script> 
                                                                                            
   </form> 
  <?php   
//echo "Data inserted successfully"; 
if (isset($_POST['submit']))  
   
{ 
    $name=$_POST['name']; 
 $cus_id=$_POST['cus']; 
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
$result = $conn->prepare("insert into sale_master(id,date,cus_id,po_id,taxmaster,taxamtmaster,gstmaster,gstamtmaster,discountmaster,discountamtmaster,grandtotalmaster,sub,payment)values('$id','$date','$cus_id','$po_id','$taxmaster','$taxamtmaster','$gstmaster','$gstamtmaster','$discountmaster','$discountamtmaster','$grandtotalmaster' ,'$sub','$payment')"); 
        $result->execute();   
        if (count($product) > 0) 
    { 
         
   for ($i=0;$i<=count($product)-1;$i++) 

   {  
     $result2 = $conn->prepare("INSERT INTO sale_details(sale_id,product_id,quantity,price,amount,tax,taxamt,discount,discountamt,gst,gstamt,cess,cessamt,finalamount) VALUES ((select max(id) from sale_master),'$product[$i]','$quantity[$i]','$price[$i]','$amount[$i]','$tax[$i]','$taxamt[$i]','$discount[$i]','$discountamt[$i]','$gst[$i]','$gstamt[$i]','$cess[$i]','$cessamt[$i]','$finalamount[$i]')"); 
        $result2->execute();    
        $resultstk = $conn->prepare("INSERT INTO stock_det(stock, product_id,Purchase_id,PurchaseRet_id,Sale_id,SaleRet_id) VALUES ('-$quantity[$i]','$product[$i]',0,0,(select max(id) from sale_master),0)"); 
                                     
		$resultstk->execute();    
} 
  
 }  
                 if($result)    
                    {  
                         
                        $result3 = $conn->prepare("select max(id) as id from sale_master");    
                            $result3->execute(); 
                            $row3 = $result3->fetch();   

                             echo "<script> 
                         alert('Your record is inserted successfully...!'); 
                           window.location.href='salelist.php?ID=".$row3['id']."'; 
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