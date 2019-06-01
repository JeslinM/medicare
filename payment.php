
<?php
include 'db.php';

  $id = $_SESSION['login_id'];
?>
<?php

$qry="select * from `userregistration` where login_id='$id'";

      $as = mysqli_query($con,$qry);
     while($rest=mysqli_fetch_array($as))
     {
     $a = $rest["Userid"];
      $b = $rest["name"];
      
      $c = $rest["address"];
      
      //$Email=$rest['Email'];
     }
    


?>
<?php

$qry="select * from `bill` where Userid=$a";

      $as = mysqli_query($con,$qry);
     while($rest=mysqli_fetch_array($as))
     {
     $j = $rest["amount"];
      
      //$Email=$rest['Email'];
     }
    


?>
<?php

$qry="select * from `bank` where Userid=$a";

      $as = mysqli_query($con,$qry);
     while($rest=mysqli_fetch_array($as))
     {
     $k = $rest["amount"];
      
      //$Email=$rest['Email'];
     }
    


?>
<?php
    

    if (isset($_POST["submit"])) {

  
    $a = $_POST["fullname"];
    
	$c = $_POST["address"];
//	$city= $_POST[city"];
//  $state= $_POST["state"];
	
	$k = $_POST["cardtype"];
	$e = $_POST["nameoncard"];
	$f = $_POST["creditcardnumber"];
	
    $g = $_POST["expmonth"];
	$h = $_POST["expyear"];
    $i = $_POST["cvv"];
	$j = $_POST["amount"];
      
    
  $db= mysqli_query($con,"INSERT INTO `payment`(`fullname`,`address`,`cardtype`,`nameoncard`,`creditcardnumber`,`expmonth`,`expyear`,`cvv`,`amount`) VALUES ('$a','$c','$k','$e','$f','$g','$h','$i','$j')");
    
    $query2 = "UPDATE `bank` set amount=amount-$j";
     
 
mysqli_query($con,$query2)or die (mysqli_error($con));
 echo "<script>alert(' $j deducted in your account')</script>";
 }
 
?>

<html>
<head>
    
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
  width:500px;
  margin-left:300px;
}


.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 50%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>



 <style>
body  {
  background-image: url("admin1/images/kk.jpeg");
  background-color: #cccccc;
  background-repeat:no-repeat;
   background-size: 1000px;
 
}
</style>

  <div class="col-75">
    <div class="container">
        <form action="#" method="post">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fullname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" value="<?php echo $b?>" name="fullname" >
            
            <label for="adrdress"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" value="<?php echo $c?>" name="address" >
			
           
             
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
			</div>
			
			<div class="form-group">
			 <label for="cname">Card Type</label>
                              <select class="form-control" placeholder="Card Type" name="cardtype" required>
							  <option value="select">select</option>

                              <option value="Master card">Master card</option>
                              <option value="visa">visa</option>
                              <option value="Rupay">Rupay</option>
							  </select>
							  </div>
                                  <br>
                                 <br>                    			
             <div class="form-group">
            <label for="cname">Name on Card</label>
			<br>
            <input type="text" id="cname" name="nameoncard" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="creditcardnumber" placeholder="1111-2222-3333-4444">
			
                              
             <div class="form-group">
          <label for="cname">Exp Month</label>
                              <select class="form-control" placeholder="ExpMonth" name="expmonth" required>
							  <option value="select">select</option>

                              <option value="January">January</option>
                              <option value="February">February</option>
                              <option value="March">March</option>
							  <option value="April">April</option>
							  <option value="May">May</option>
							  <option value="June">June</option>
							  <option value="July">July</option>
							  <option value="August">August</option>
							  <option value="September">September</option>
							  <option value=">October">October</option>
							  <option value="November">November</option>
							  <option value="December">December</option>
							  </select>
							  </div>
							  <br>
							  <br>
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="date" id="expyear" name="expyear" placeholder="2018">
              </div>
			  <br>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
			  <br>
			  <div class="col-50">
                <label for="cvv">Total_Price</label>
                <input type="text" id="amount" name="amount" value="<?php echo $j;?>">
              </div>
                
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="submit"> 
        </label>
        <input type="submit" value="PAY" class="btn">
      </div>
  </div>
<!--  <div class="col-25">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <p><a href="#">Product 1</a> <span class="price">$15</span></p>
      <p><a href="#">Product 2</a> <span class="price">$5</span></p>
      <p><a href="#">Product 3</a> <span class="price">$8</span></p>
      <p><a href="#">Product 4</a> <span class="price">$2</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
    </div>-->
</form>

</body>
</html>
