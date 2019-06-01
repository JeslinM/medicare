<?php

include_once '../db.php';
if (isset($_POST['index'])) {
    $index = $_POST['index'];
    $q = mysqli_query($con, "SELECT State_id,Satename FROM State where Districtid='" . $index . "' and status=1");
    //var_dump($q);
    
     if($q){
        $data = json_encode(mysqli_fetch_all($q));
        echo $data;
    }else{
        echo 'err';
    }

}
?>
