<?php
//session_start();
include_once 'db.php';
$session=$_SESSION[ 'login_id'];
$res=mysqli_query($con, "SELECT a.*, b.*,c.* FROM userregistration a
	JOIN appointment b
		On a.login_id = b.login_id
	JOIN doctorschedule c
		On b.scheduleId=c.scheduleId
	WHERE b.login_id ='$session'");
	
	$userRow=mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Make Appoinment</title>
		<!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet"> -->
		<link href="assets/css/material.css" rel="stylesheet">
		
		<link href="assets/css/default/style.css" rel="stylesheet">
		<link href="assets/css/default/blocks.css" rcel="stylesheet">
		<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css" />

	</head>
	<body>
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
    <li><a class="active" href="../medilife/index.html">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>

</body>
<style>

    
    
    #customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border: 1px rgb;
  border-color: red;
  width: 50px;
  
  
}

#customers th, #customers th {
  border: 1px rgb;
  padding: 5px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    width: 10px;
  padding-top: 40px;
  padding-bottom: 12px;
  text-align: left;
  background-color: red;
  color: white;
}
.btn {
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #5F9EA0;
    border: none;
    border-radius: 5px;
}
.edit_btn {
    text-decoration: none;
    padding: 2px 5px;
    background: #2E8B57;
    color: white;
    border-radius: 3px;
}

.del_btn {
    text-decoration: none;
    padding: 2px 5px;
    color: white;
    border-radius: 3px;
    background: #800000;
}
.msg {
    margin: 100px auto; 
    padding: 10px; 
    border-radius: 5px; 
    color: #3c763d; 
    background: #dff0d8; 
    border: 1px solid #3c763d;
    width: 50%;
    text-align: center;
}
table {
    margin-top: 100px;
    border: 1px rgb;
    border-color: green;
    margin-left: 400px;
    text-align: center;
  width:50%;
}
table, th, tr {
   border: buttonshadow;
    height: 30px;
    padding: 2px;

}
th, tr {
  padding: 15px;
  text-align: center;
}
table#customers tr:nth-child(even) {
  background-color: #eee;
  background: #F5F5F5;
}
table#customers tr:nth-child(odd) {
 background-color: #fff;
}
table#customers th {
  background-color: red;
  color: greenyellow;
}
</style>
</head>
<body>
<table width="100%" border="1" id="customers" cellpadding="1" cellspacing="1">
		<!-- navigation -->
<!-- display appoinment start -->
<?php



echo "<thead>";
echo "<tr>";
echo "<th>App Id</th>";
echo "<th>patientIc </th>";
echo "<th>Name </th>";
echo "<th>scheduleDay </th>";
echo "<th>scheduleDate </th>";
echo "<th>startTime </th>";
echo "<th>endTime </th>";
echo "<th>Doctorname </th>";
echo "<th>Cancel </th>";

echo "</tr>";
echo "</thead>";
$res = mysqli_query($con, "SELECT a.*, b.*,c.*
		FROM userregistration a
		JOIN appointment b
		On a.login_id = b.login_id
		JOIN doctorschedule c
		On b.scheduleId=c.scheduleId
		WHERE b.login_id ='$session'");




while ($userRow = mysqli_fetch_array($res)) {
echo "<tbody>";
echo "<tr>";
echo "<td>" . $userRow['appId'] . "</td>";
echo "<td>" . $userRow['login_id'] . "</td>";
echo "<td>" . $userRow['name'] . "</td>";
echo "<td>" . $userRow['scheduleDay'] . "</td>";
echo "<td>" . $userRow['scheduleDate'] . "</td>";
echo "<td>" . $userRow['starttime'] . "</td>";
echo "<td>" . $userRow['endTime'] . "</td>";

 $query=mysqli_query($con,"SELECT * FROM doctorschedule as dl,doctor as d where dl.id=d.id");
$row=mysqli_fetch_array($query);


                                                                                                    
echo "<td>" . $row['name'] . "</td>";
echo "<td><a href='dlte.php?' onClick=\"return confirm('Are you sure you want to delete?')\">DELETE</a></td>";


//echo "<td><a href='invoice.php?appid=".$userRow['appId']."' target='_blank'><span class='glyphicon glyphicon-print' aria-hidden='true'></span></a> </td>";
}

echo "</tr>";
echo "</tbody>";
echo "</table>";

?>
	</div>
</div>
</div>
</div>
<!-- display appoinment end -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>