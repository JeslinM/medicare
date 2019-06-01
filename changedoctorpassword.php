<?php
include 'db.php';
if(isset($_POST['submit']))
{
$id=$_POST["id"];
$cpass=$_POST["Currentpassword"];
$npass = $_POST["Newpassword"];
$cnpass=$_POST["Retypepassword"];
$sql="select * from login where  password='$cpass' and login_id='$id'";
//echo $sql;
$res=mysqli_query($con,$sql);
$no=mysqli_num_rows($res);
if($no==1)
{
	$sql1="update  login set password='$npass' where login_id='$id'";
	mysqli_query($con,$sql1);
        

	?>	
	<?php }
else
{
	echo "<script>alert('PASSWORD IS CHANGED')</script>";
            echo "<script>window.location='med/index.php?view=doctorform'</script>";
}

}

?>
<!DOCTYPE html>
<html>

	<head>
            <head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>

</body>
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}
h1{
    font-size: 20px;
    background-color: royalblue;
}
* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("img/pass.jpg");

  min-height: 1000px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  margin: 20px;
  max-width: 300px;
  padding: 16px;
  background-color: red;
      ;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: black;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: greenyellow;
  outline: blueviolet;
}

/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  margin-top: -50px;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<div class="bg-img"><form action="#" method="post"  class="container">
        <h1>CHANGE PASSWORD</h1>
				
									<div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                               <label style="font-weight:bold;">Current Password</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input  type="password" name="Currentpassword"style="width:330px;"required/>
                                            </div>
					
					
					
					
					
					<div class="col-sm-3 col-md-2 col-5">
                                               <label style="font-weight:bold;">New password</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input  type="password" name="Newpassword"style="width:330px;"required/>
                                            </div>
											<div class="col-sm-3 col-md-2 col-5">
                                               <label style="font-weight:bold;">Retype Password</label>
                                            
                                            <div class="col-md-8 col-6">
                                                <input  type="password" name="Retypepassword"style="width:330px;"required/>
                                            </div>
                                            <input type="hidden" class="margin-right" name="id" value="<?php echo $_SESSION['login_id'];?>">
                    
					<div style="margin-top:100px;margin-left:100px;width:100px;">
					<input type="submit" class="btn" name="submit" value="SUBMIT" class="form-control"required/>
					</div>
					
					
                                                                                        </div>
                                                                        </div>
					
				</form>
			
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>