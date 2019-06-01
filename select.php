<?php
include "db.php";
$sql="select name FROM doctor";
$result= mysqli_query($con,$sql);
echo"<select doctor='name'>";
while($row= mysqli_fetch_array($result)){
    echo "<option value='" . $row['name'] ."'>" . $row['name']."</option>";

}
echo"</select>";
?>