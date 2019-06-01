<!DOCTYPE html>
<?php
include "db.php";
if (isset($_POST["submit"])) {
    
    $department = $_POST['did'];
    $doctor = $_POST['id'];
    


   
  
}
?>





<!DOCTYPE html>
<html lang="en">
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
    <li><a class="active" href="../medilife/index.html">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>

</body>

        <!-- Adding oh-autoVal css style -->

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact Information Form Template - reusable form</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
    </head>
    <body >
        <div class="container">
            <div class="container form-top">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                        <div class="panel panel-danger">
                            <div class="panel-body">
                                <form action="#" method="post" enctype="multipart/form-data">
                                    <a href="department.php"></a>  
                                    
                                    <div class="form-group">
                                        <div class="control-group">
                                            <label class="control-label"><b>Department:</b></label>
                                            <div class="controls">
                                                <!--<input type="text" placeholder="Enter your country"  class="input-xlarge" required/>-->
                                                <select  name="did" id="department" required/>
                                                <option value="-1">select</option>
                                            <?php
//include "db.php";

                                                $z = mysqli_query($con,"SELECT did,department FROM department");
                                                //var_dump($q);

                                                while ($row = mysqli_fetch_array($z)) {
                                                    ?>
                                                    <option value="<?php echo $row['did']; ?>" > <?php echo $row['department']; ?> </option>
                                                    <?php }
                                                ?>
                                                 </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="control-group" >
                                                <label class="control-label"><b>Doctor:</b></label>
                                                <div class="controls">
                                                    <!--<input type="text" placeholder="Enter your state" id="state" name="state" class="input-xlarge" required/>-->
                                                    <select name="id" id="doctor" required/><option value="-1">select</option></select>
                                                </div>
                                            </div>
                                        </div>
                                        
                                      
                                        

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <script src="assets/js/jquery-3.3.1.min.js"></script>
        <script>
                                    $(document).ready(function () {

                                        $("#department").on("change", function () {
                                            $department = $('#department').val();

                                            $html = "";
                                            $.ajax({
                                                type: 'post',
                                                data: {'index': $department},
                                                url: 'getdoctor.php',
                                                success: function (data) {
                                                    console.log(data);
                                                    $data = JSON.parse(data);
//                                
                                                    $html = '<option value="">--SELECT DOCTOR--</option>';
                                                    for (var index = 0; index < $data.length; index++)
                                                    {
                                                        // alert($data[index][0]);
                                                        $html += '<option value="' + $data[index][0] + '">' + $data[index][1] + "</option>";
                                                    }

                                                    $("#doctor").html($html);
                                                }
                                            });
                                        });


                                    });



        </script>

    </body>
</html>