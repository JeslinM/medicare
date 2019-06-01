<?php
include "db.php";
$kid=$_GET["appid"];
//$session=$_GET[ 'login_id'];
$res=mysqli_query($con, "DELETE a.*, b.*,c.* FROM userregistration a
	JOIN appointment b
		On a.login_id = b.login_id
	JOIN doctorschedule c
		On b.scheduleId=c.scheduleId
	WHERE b.login_id ='$session'");
//$userRow=mysqli_fetch_array($res);//mysqli_query($con,"DELETE FROM `doctorschedule` WHERE scheduleId='$kid'");
header("Location:userbook.php")
?>
