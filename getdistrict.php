

<?php


include_once 'db.php';
if (isset($_POST['index'])) {
   $index = $_POST['index'];
   $sql = "SELECT District_id, District_name FROM district where State_id='" . $index . "' and status=1";
    $q = mysqli_query($con,$sql);
	// print_r($con);
    
    if($q){
        $data = json_encode(mysqli_fetch_all($q));
        echo $data;
    }else{
        echo 'err';
    }

}
?>

