
    <?php
include "../db.php";
if (isset($_POST["submit"])) {
    $a = $_POST['department'];
    
   

    $sql="INSERT INTO `department`(`department`)
     
   VALUES ('$a')";
  
   mysqli_query($con,$sql);
  echo "<script>alert('Added successfully')</script>";
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Adding oh-autoVal css style -->
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
    <li><a class="active" href="../med/ad.php">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>

</body>


        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ADD PHARMACIST</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
        <link rel="stylesheet" type="text/css" href="css/oh-autoVal-style.css">
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/oh-autoVal-script.js"></script>
    </head>
    <body >
        <div class="container">
            <div class="container form-top">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                        <div class="panel panel-danger">
                            <div class="panel-body">
                                <form action="#" method="post"  class="oh-autoval-form" enctype="multipart/form-data">
                                    <a href="adddoctor.php"></a>  
                                    <div class="form-group" av-name>
                                        <label >Add Department</label>
                                        <input type="text" name="department" required class="form-control av-name" av-message="Error department" >
                                    </div>
                                        <div class="form-submit">
                                   <!-- <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />-->
                                   <!-- <input type="submit" value="RESET ALL" class="submit" name="reset" id="reset" />-->
                                            <input type="submit" value="SUBMIT FORM" class="submit" name="submit" id="submit" />
                                        </div>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
