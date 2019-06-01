<?php
include 'db.php';



$id = $_SESSION['login_id'];
  
?>
<?php

$qry="select d.name,d.`DOB`,d.`Photo`,d.`address`,d.`phonenumber`,dpt.`department` from `doctor` d,`department` dpt where d.login_id=$id and d.did=dpt.did";

      $as = mysqli_query($con,$qry);
     while($rest=mysqli_fetch_array($as))
     {
     $a = $rest["name"];
     $b = $rest["DOB"];
    $Photo=$rest["Photo"];
    $c = $rest["address"];
    $d = $rest["phonenumber"];
     $e=$rest['department'];
     }
    


?>
<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: background;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px ;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: greenyellow;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: yellow;
  min-width: 60px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: gold;}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body>

<ul>
    <li><a href="nalika/index.php">Home</a></li>
  
    </div>
  </li>
</ul>



</body>
</html>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
  z-index: 2;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
  z-index: 1;
}
body {
 background-image: url("doctorreg/photo/dd1.jpg");
 background-color: #cccccc;
 background-repeat: no-repeat;
 background-size: 1400px 600px;
}
</style>
</head>
<body>

<h1 style="margin-left:500px;">PROFILE</h1>


<div  class="flip-card">
    <div style="margin-left:500px; margin-top: 40px;" class="flip-card-inner">
    <div class="flip-card-front">
        <img src="doctorreg/photo/<?php echo $Photo;?>" alt="<?php echo $Photo;?>"  style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
     <p>Name: <?php echo $a?></p> 
      <p>Department: <?php echo $e?></p> 
      <p>Phonenumber: <?php echo $d?></p> 
      <p>DOB: <?php echo $b?></p>
      <p>Address : <?php echo $c?></p>
    </div>
  </div>
</div>

</body>
</html>
