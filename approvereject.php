<?php
include 'adminhdr.php';
include 'db.php';
// select address
//session_start();
$id = $_SESSION['login_id'];

      $qry5="SELECT Userid,login_id,name,birth,address,phonenumber,gender,email,state_id,District_id FROM userregistration  where UserSid=Userid and status='pending'";
     $ab4 = mysqli_query($con, $qry5);
  if (isset($_POST["approve"])) {
                                
                                $uid = $_POST['Userid'];
                                $lid=$_POST['login_id'];
                              echo  $q = "update useregistration set status='approved' where Userid='$uid'";
                               echo $s = "update login set status='approved' where login_id='$lid'";
                                mysqli_query($con, $q) or die(mysqli_error($con));
                                 mysqli_query($con, $s) or die(mysqli_error($con));
                                if (mysqli_affected_rows($con) > 0) {
                                    ?>
                                    <script>
                                        alert("approved")
                                        window.location.href = "viewstaff.php";
                                    </script>
                                    <?php
                                }
                            }
                            if (isset($_POST["delete"])) {
                                
                                
                                $sid = $_POST['stid'];
                                $lid=$_POST['lid'];
                                $q = "update userregistration set status='rejected' where User_id='$uid'";
                                 echo $s = "update login set status='rejected' where login_id='$lid'";
                                mysqli_query($con, $q) or die(mysqli_error($con));
                                 mysqli_query($con, $s) or die(mysqli_error($con));
                               // $data = mysqli_query($con, $q) or die(mysqli_error($con));
                                if (mysqli_affected_rows($con) > 0) {
                                    ?>
                                    <script>
                                        alert("rejected")
                                        window.location.href = "viewstaff.php";
                                    </script>
                                    <?php
                                }
                            }
         
?>
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
  <li><a class="active" href="../a/index.html">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>

</body>
</style>
<style>
        
.submit {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.submit1 {
  background-color:red;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
    </head>
    <body>
        <br>
        <center><h2>STAFFS</h2></center>
        <br>
        
  <center>
   
        <table border="1">
  
    <td >
      <tr>
       
        <th>NAME</th>
         
          <th>DOB</th>
        <th>ADDRESS</th>
         <th>PHONENUMBER</th>
         <th>GENDER</th>
        <th>EMAIL</th>
        <th>STATE</th>
         <th>DISTRICT</th>
          
          <th></th>
          <th></th>
        <th>APPROVE</th>
         <th>REJECT</th>
         
         
      
       
        
   
        </tr>
        <?php
        
        while ($rest1=mysqli_fetch_array($ab4)  )
	 {
         
        
          ?>
 <form action="#" method="post">
      <tr>
        
          <td><center><?php echo $rest1['name'];?></center></td>
        <td><center><?php echo $rest1['birth'];?></center></td>
         <td><center><?php echo $rest1['address'];?></center></td>
       <td><center><?php echo $rest1['phonenumber'];?></center></td>
        <td><center><?php echo $rest1['gender'];?></center></td>
         <td><center><?php echo $rest1['email'];?></center></td>
         <td><center><?php echo $rest1['state_id'];?></center></td>
        <td><center><?php echo $rest1['District_id'];?></center></td>
         <
        
 <td><input  type="text" hidden="hidden" name="stid" value="<?php echo $rest1['staffid'];?>"></td>
 <td><input  type="text" hidden="hidden" name="lid" value="<?php echo $rest1['loginid'];?>"></td>
        <td><input type="submit" name="approve" class="submit" value="APPROVAL"></td>
        <td><input type="submit" name="delete" class="submit1" value="REJECT"></td>
       
      
      
        
      </tr></form>
  <?php
                            
}
                                                 ?> 

      
      
</table>
        

          
          <script>
			$( function() {
				  // init Isotope
			  	var $container = $('.isotope').isotope
			  	({
				    itemSelector: '.element-item',
				    layoutMode: 'fitRows'
			  	});


  				// bind filter button click
  				$('#filters').on( 'click', 'button', function() 
  				{
				    var filterValue = $( this ).attr('data-filter');
				    // use filterFn if matches value
				    $container.isotope({ filter: filterValue });
				 });
  
			  // change is-checked class on buttons
			  	$('.button-group').each( function( i, buttonGroup ) 
			  	{
			    	var $buttonGroup = $( buttonGroup );
			    	$buttonGroup.on( 'click', 'button', function() 
			    	{
			      		$buttonGroup.find('.is-checked').removeClass('is-checked');
			      		$( this ).addClass('is-checked');
			    	});
			  	});
			  
			});
		</script>


                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>


 <?php
        include 'component/footer.php';
        ?>