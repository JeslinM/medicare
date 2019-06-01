<?php

include "../db.php";
 ?>
<html><head>
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
    margin-left: 100px;
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
<table border=2 id="customers" >
<tr>
            
             <th>Name</th>
            <th>DOB</th>
            <th>ADDRESS</th>
            <th>PHONENUMBER</th>
             <th>PHOTO</th>
             <th>GENDER</th>
             <th>STATE</th>
             <th>DISTRICT</th>
             
             <th>DELETE</th>
</tr>

<?php
$result = mysqli_query($con, "SELECT * from userregistration ");


while($res = mysqli_fetch_array($result)){

 ?>
<tr>

<td><?php echo $res['name']; ?>
</td>
<td><?php echo $res['birth']; ?>
</td>
<td><?php echo $res['address']; ?>
</td>
<td><?php echo $res['phonenumber']; ?>
</td>
<td><img style="height:100px;width:100px;" src="photo/<?php echo $res['Photo']; ?>">

</td>

<td><?php echo $res['gender']; ?>
</td>
<td><?php echo $res['state_id']; ?>
</td>
<td><?php echo $res['District_id']; ?>
    
</td>


<td> <a href="useredit.php?uid=<?php echo $res["Userid"]; ?>" class="edit_btn">Edit</a>
</td>
<td>
    <a href="deleteuser.php?uid=<?php echo $res["Userid"]; ?>" class="del_btn">Delete</a>
</td>
</tr>
<?php }
?>
</table>
</html>