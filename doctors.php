<?php
include 'db.php';
  $id ="";
    $fname="";
    $lname= "";
    $age ="";
    function getPosts()
    {
        $posts=array();
        $posts[0]=$_POST['id'];
        $posts[1]=$_POST['fname'];
        $posts[2]=$_POST['lname'];
        $posts[3]=$_POST['age'];
        return $posts;
    }
    if(isset($_POST['search']))
    {
        $data= getPosts();
        $search_Query="SELECT * FROM users WHERE id ='$data[0]'";
        $search_Result=mysqli_query($con,$search_Query);
        if($search_Result)
        {
            if(mysqli_num_rows($search_Result))
            {
                while ($row=mysqli_fetch_array($search_Result))
                {
                    $id=$row['id'];
                    $fname=$row['fname'];
                    $lname=$row['lname'];
                            $age=$row['age'];
                }
            }
            else
                {
                echo 'No data for this id';
            }
        }     
        else
            {
            echo 'result error';
        }
    }
    if(isset($_POST['insert']))
    {
        $data=getPosts();

        $insert_Query="INSERT INTO `users`(`fname`,`lname`,`age`)VALUES('$data[1]','$data[2]','$data[3]')";
        try{
            $insert_Result=mysqli_query($con,$insert_Query);
            if($insert_Result)
            {
                if(mysqli_affected_rows($con)>0)
                {
                    echo 'data inserted';
                }else{
                     echo 'data not inserted';
                    
        }  

        
    }
    } 
    catch (Exception $ex){
        echo 'error insert',$ex->getMessage();
    }
    }
     if(isset($_POST['delete']))
    {
        $data=getPosts();
        $delete_Query="DELETE FROM `users` WHERE `id` = '$data[0]'";
        try{
            $delete_Result=mysqli_query($con,$delete_Query);
            if($delete_Result)
            {
                if(mysqli_affected_rows($con)>0)
                {
                    echo 'data deleted';
                }else{
                     echo 'data not deleted';
                    
        }  

        
    }
    } catch (Exception $ex){
        echo 'error delete',$ex->getMessage();
    }
    }
     if(isset($_POST['update']))
    {
        $data=getPosts();
        print_r($data);
        echo $update_Query="UPDATE `users` SET `fname`='$data[1]',`lname`='$data[2]',`age`='$data[3]' WHERE `id`='$data[0]'";
        try{
            $update_Result=mysqli_query($con,$update_Query);
            if($update_Result)
            {
                if(mysqli_affected_rows($con)>0)
                {
                    echo 'data updated';
                }else{
                     echo 'data not updated';
                    
        }  

        
    }
    } catch (Exception $ex){
        echo 'error update',$ex->getMessage();
    }
    }
    
    
    ?>
<html>
    <head>
        <title>hai</title>
        
    </head>
    <body>
        <form action="edit.php" method="POST">
        
        <input type="text" name="fname" placeholder="Firstname" value="<?php echo $fname;?>"<br><br>
        <input type="text" name="lname" placeholder="Lastname" value="<?php echo $lname;?>"<br><br>
        <input type="number" name="age" placeholder="Age" value="<?php echo $age;?>"<br><br>
        <div>
            <input type="submit" name="insert" value="Add">
            <input type="submit" name="update" value="Update">
            <input type="submit" name="delete" value="Delete">
            <input type="submit" name="search" value="Find">
       
        </div>
    </body>
</form>
</html>