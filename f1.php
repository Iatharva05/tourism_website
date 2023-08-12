<?php
extract($_POST);

if(isset($register) && !empty($register)){
    
    if(isset($name) && !empty($name)){

    }
    else
    {
    exit(header("Location: ./index.php?msg=Please Enter Name!"));
    }

    if(isset($email) && !empty($email)){

    }
    else
    {
    exit(header("Location: ./index.php?msg=Please Enter Email!"));
    }

    if(isset($phone) && !empty($phone)){

    }
    else
    {
    exit(header("Location: ./index.php?msg=Please Enter Phone!"));
    }

    if(isset($review) && !empty($review)){

    }
    else
    {
    exit(header("Location: ./index.php?msg=Please Enter Review!"));
    }

    $con = mysqli_connect("localhost","root","","tourism");

    $sql="INSERT INTO `contact`(`name`, `email`, `phone`, `review`) VALUES ('$name','$email','$phone','$review')";
    if(mysqli_query($con,$sql)){
        exit(header("Location: ./index.php?msg=FeedBack Registered Successfully!"));
        }
        else{
        $error=mysqli_error($con);
        exit(header("Location: ./index.php?msg=$error!"));
        }
    }
    else{
        exit(header("Location: ./index.php?msg=Invalid Request!"));
    }

?>