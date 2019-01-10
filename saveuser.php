<?php
include "db.php";

if(isset($_POST['btnsubmit']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $profile = $_FILES['profile']['name'];
    $password = $_POST['password'];

    move_uploaded_file($_FILES['profile']['tmp_name'],"images/".$_FILES['profile']['name']);
    $profile="images/".$_FILES['profile']['name'];
    echo"image uploaded successfully";
    
    $query="insert into user(username,email,password,profile_pic) values('$username','$email','$password','$profile')";
    echo $query;
    
    $res=mysqli_query($con,$query);//true/false
    if($res)
    {
        echo "Data inserted Successfully";
        header("location:getusers.php");
    }
    else
    {
       echo "Error in insertion".mysqli_error($con);
    }
}
?>