<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
</style>
</head>
<body>

<ul>
    <li><a class="active" href="med/index.php">Home</a></li>
  
</ul>

</body>
</html>

       <?php
       include 'db.php';
$id = $_SESSION['login_id'];
  
?>
<?php                           



$qry1="select id, name,DOB,address,dpt.department,phonenumber,d.Photo from `doctor` d,department dpt where  login_id=$id and d.did=dpt.did ";

      $as = mysqli_query($con,$qry1);
     while($rest=mysqli_fetch_array($as))
     {
     $a = $rest["id"];
     $b = $rest["name"]; 
      $c = $rest["DOB"];
      $d = $rest["address"];
      $e = $rest["department"];
      $f = $rest["phonenumber"];
       $Photo = $rest["Photo"];
      //$Email=$rest['Email'];
     
     }


?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    
    body {
  background-image: url("med/img/in.jpg");
  background-repeat: no-repeat;
  background-size: 1400px 700px;
  
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin-left: 10px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<h2 style="text-align:center;margin-left: -900px;size: 20px;">DOCTOR SALARY REPORT</h2>

<div class="card" style="margin-left:300px;">
    <img width="50px;"height="50px;" src="doctorreg/photo/<?php echo $Photo;?>" alt="<?php echo $Photo;?>" />
    <table style="margin-left:70px;" id="id">
  <tr>
          <th>Name :</th>
      <th><?php echo $b; ?></th>
  </tr>
  <br>
  <tr>
       <th>DOB :</th>
      <th><?php echo $c;?></th>
  </tr>
  <br>
  <tr>
       <th>Address: </th>
      <th><?php echo $d;?></th>
  </tr>
  <br>
  <tr>
      <th>Department </th>
       <th><?php echo $e;?></th>
       </tr>
       <tr>
      <th>Phonenumber </th>
       <th><?php echo $f;?></th>
       </tr>

  </table>
  
  
</div>

</body>
</html>

   <?php                           



$qry="select * from `salaryd` where  id='$a' ";

      $as = mysqli_query($con,$qry);
     while($rest=mysqli_fetch_array($as))
     {
     $a = $rest["basicpay"];
      $b = $rest["dearnessallowance"];
      $c = $rest["conveyanceallowance"];
      $d = $rest["medicalallowance"];
      $e = $rest["houserentallowance"];
      $f = $rest["foodallowance"];
      $g = $rest["professionaltax"];
      $h = $rest["providentfund"];
      $s=0;
      
      //$Email=$rest['Email'];
     
     }


?> 
<style type="text/css">
table.hovertable {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#333333;
	border-width: 1px;
	border-color: #999999;
	border-collapse: collapse;
}
table.hovertable th {
	background-color:#c3dde0;
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #a9c6c9;
}
table.hovertable tr {
	background-color:#d4e3e5;
}
table.hovertable td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #a9c6c9;
}
</style>



    
  <!DOCTYPE html>
<html>  
    <head>
        <style type="text/css">
table.hovertable {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#333333;
	border-width: 1px;
	border-color: #999999;
	border-collapse: collapse;
}
table.hovertable th {
	background-color:#c3dde0;
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #a9c6c9;
}
table.hovertable tr {
	background-color:#d4e3e5;
}
table.hovertable td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #a9c6c9;
}
</style>



<style>
table, th, td,tr {
    font-family: verdana,arial,sans-serif;
    margin-left: 500px;
	font-size:11px;
	color:#333333;
	border-width: 1px;
	border-color: #999999;
	border-collapse: collapse;
  border: 1px solid black;
  border-collapse: collapse;
}
th, td,tr {
    
    background-color:#c3dde0;
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #a9c6c9;
  padding: 5px;
  text-align: left;
  background-color:#d4e3e5;
}
</style>
</head>
<body>

<h2></h2>
<p></p>

<table style="width:100px;margin-left: 650px;margin-top: -50px;">
 
  <tr>
      <th>Earnings</th>
    <th>Amount</th>
    <th>Deduction</th>
    <th>Amount</th>
  </tr>
  <tr>
    <td>Basic Pay</td>
    <td><?php echo $a?></td>
    <td>Professional Tax</td>
    <td><?php echo $g?></td>
  </tr>
  <tr>
    <td>Dearness Allowance</td>
    <td><?php echo $b?></td>
    <td>Provident Fund</td>
    <td><?php echo $h?></td>
  </tr>
  <tr>
    <td>Conveyance Allowance</td>
    <td><?php echo $c?></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Medical Allowance</td>
    <td><?php echo $d?></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>HouseRent Allowance</td>
    <td><?php echo $e?></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Food Allowance</td>
    <td><?php echo $f?></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
      <td>TOTAL EARNINGS</td>
    <td><?php


$s = $a +$b+$c+$d+$e+$f;

print $s;

//print ($direct_ $s);

?></td>
    <td>TOTAL DEDUCTION</td>
    <td><?php


$t = $h+$g;

print $t;
?>
</td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td>NET PAY</td>
    <td><?php


$to = $s-$t;

print $to;
?></td>
    
  </tr>
  
</table>

</body>
</html>
