
<html>
    <head>
        
        <title>Add childrens</title>
   
         <style>
        body{
            background-color: whitesmoke
        }
        input{
            width:40%;
            height:5%;
            border:1px;
            border-radius: 05px;
            padding: 8px 15px 8px 15px;
            margin: 10px 0px 15px 0px;
            box-shadow: 1px 1px 2px 1px grey;
        }
        
</style>
</head>      
<body>
 <center>
 <h1> search data</h1>
 <form method="POST" action='#'>
<input type="text" name="Userid" placeholder="enter Id to search" />
 <input type="submit" name="search" value="search data" />
  </form>
    
        <?php
  
include 'db.php';
//$db= mysqli_select_db($con,'search');
if(isset($_POST['search']))
{
    $Userid=$_POST['Userid'];
    $query="SELECT * FROM userregistration where Userid='$Userid'";
    $query_run=mysqli_query($con,$query);
    while($row=mysqli_fetch_assoc($query_run))
    {
        
       ?>
 <form action="" method="POST">
    
                                <input type="text" name="Userid" id="name" value="<?php echo $row['Userid'] ?>"/>
                               
                           
                                <input type="text" name="name" id="name" value="<?php echo $row['name'] ?>"/>
                               
                            
                                <input type="text" name="birth" id="birth"value="<?php echo $row['birth'] ?>" />
                               
                            
                                <input type="text" name="address" id="address"value="<?php echo $row['address'] ?> "/>
                               
                            
                                <input type="text" name="phonenumber" id="phonenumber" value="<?php echo $row['phonenumber'] ?> " />
                          
                                <input type="text" name="gender" id="gender" value="<?php echo $row['gender'] ?> "/>
                            
                                   <input type="email" name="email" id="email" value="<?php echo $row['email'] ?> " />
                               
                           
</form>
       <?php
    }
    }
    ?>

 </center>
</body>
</