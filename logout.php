<?php

session_start();
unset($_SESSION["login_id"]);
unset($_SESSION["username"]);
session_destroy();
//header("location:../roadsafety/login.php");
header("location:../home/index.html");
?>