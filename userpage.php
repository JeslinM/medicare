
<?php
//session_start();
include_once 'db.php';
if(!isset($_SESSION['login_id']))
{
//header("Location: ../users/index.html");
}

$id = $_SESSION['login_id'];






$res=mysqli_query($con,"SELECT * FROM userregistration WHERE login_id=$id");

if ($res===false) {
	echo mysqli_error();
} 

$userRow=mysqli_fetch_array($res,MYSQLI_ASSOC);

?>



    

<!DOCTYPE html>
<html>
<title>USERPAGE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}

body  {
  background-image: url("med/img/oo.jpg");
  background-color: #cccccc;
  background-repeat:no-repeat;
 background-size: 1500px 600px;
 
 
}


</style>
<body class="w3-theme-l5">

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  
  <div class="w3-dropdown-hover w3-hide-small">
     
  </div>
  
        
  </a>
 </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
</div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:50px;margin-left: 40px;" >    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-blue" style="height:300px">
        <div class="w3-container">
         <h4 class="w3-center">My Profile</h4>
         <p class="w3-center"><img src="reg4/photo/<?php echo $userRow['Photo']; ?>"  style="height:50px;width:50px;"  alt="Avatar"></p>
         <hr>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i><?php echo $userRow['name']; ?> </p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i><?php echo $userRow['address']; ?> </p>
         <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> <?php echo $userRow['DOB']; ?> </p>
         
        </div>
      </div>
      <br>
      
      <!-- Accordion -->
      <div class="w3-card w3- w3-green" <img src="med/img/cover2.jpg" alt="Flowers in Chania" >
        <div class="w3-yellow">
          <html>
<head>
<style>
ul {
    text-decoration:hotpink;
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
}

li a {
    text-decoration: hotpink;
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

li a.active {
    text-decoration: hotpink;
  background-color: red;
  
  color: white;
}

li a:hover:not(.active) {
  background-color: #555;
  color: white;
}
</style>
</head>
<body>
 
    <ul>
   
        <li><a class="active" href="patient/patient.php">APPOINTMENT</a></li>
        
    
<li><a  href="registration/viewww.php">VIEW PROFILE</a></li>

<li><a href="changepassword.php">CHANGE PASSWORD</a></li>


<li><a href="admin/drimage.php">SPECIALIST DOCTORS</a></li>
<li><a href="med/drview.php">AVAILABLE DOCTORS</a></li>
<li><a href="payment.php">PAYMENT</a></li>
<li><a href="med/billl.php"> VIEW BILL</a></li>
<li><a href="home/index.html">LOG OUT</a></li>
    </ul>

</body> </div>
                     </div>
           </div>
      <br>
      
      <!-- Interests --> 
      
      <br>
      
      <!-- Alert Box -->
      
    
    <!-- End Left Column -->
    </div>
              
    
    <!-- Middle Column -->
    
    <!-- Right Column -->
    
      <br>
      
      
      <br>
      
      
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>

<!-- Footer -->
<footer class="w3-container w3-theme-d3 w3-padding-16">
  
</footer>

<footer class="w3-container w3-theme-d5">
  
</footer>
 
<script>
// Accordion
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-theme-d1";
  } else { 
    x.className = x.className.replace("w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-theme-d1", "");
  }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html> 
