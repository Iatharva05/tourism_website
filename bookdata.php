<?php
echo"<br/><br/>";
print_r($_FILES);

$new_identity_name=uniqid().rand();
$loc="./identity/$new_identity_name.pdf";

move_uploaded_file($_FILES['eidentity']['tmp_name'],$loc);

extract($_POST);

if(isset($register) && !empty($register)){
    
    if(isset($ename) && !empty($ename)){

    }
    else
    {
    exit(header("Location: ./book.php?msg=Please Enter First Name!"));
    }

    if(isset($lname) && !empty($lname)){
        
    }
    else
    {
    exit(header("Location: ./book.php?msg=Please Enter Last Name!"));
    }

    if(isset($mob) && !empty($mob)){

    }
    else
    {
    exit(header("Location: ./book.php?msg=Please Enter Mobile.!"));
    }

    if(isset($member) && !empty($member)){

    }
    else
    {
    exit(header("Location: ./book.php?msg=Please Enter Members!"));
    }

    if(isset($Addharno) && !empty($Addharno)){

    }
    else
    {
    exit(header("Location: ./book.php?msg=Please Enter Employee AddharNO!"));
    }

    if(isset($myage) && !empty($myage)){

    }
    else
    {
    exit(header("Location: ./book.php?msg=Please Enter Employee age!"));
    }

    if(isset($fromdate) && !empty($fromdate)){

    }
    else
    {
    exit(header("Location: ./book.php?msg=Please Enter Date!"));
    }

    if(isset($todate) && !empty($todate)){

    }
    else
    {
    exit(header("Location: ./book.php?msg=Please Enter Date!"));
    }

    if(isset($myGender) && !empty($myGender)){

    }
    else
    {
    exit(header("Location: ./book.php?msg=Please Enter Gender!"));
    }

    if(isset($email) && !empty($email)){

    }
    else
    {
    exit(header("Location: ./email.php?msg=Please Enter email!"));
    }


    if(isset($mycity) && !empty($mycity)){

    }
    else
    {
    exit(header("Location: ./book.php?msg=Please Enter Destination!"));
    }

    if(isset($myGender) && !empty($myGender)){

    }
    else
    {
    exit(header("Location: ./book.php?msg=Please Enter Gender!"));
    }

    $con = mysqli_connect("localhost","root","","tourism");

    $sql="INSERT INTO `booking`(`firstname`, `lastname`, `emailid`, `mobile`, `members`, `addharno`, `age`, `fromdate`, `todate`, `gender`, `class`, `destination`) VALUES ('$ename','$lname','$email','$mob','$member','$Addharno','$myage','$fromdate','$todate','$myGender','$myClass','$mycity')";
    
    if(mysqli_query($con,$sql))
    {
        exit(header("Location: ./book.php?msg=Booking Done Successfully!"));
        }
        else
        {
        $error=mysqli_error($con);
        exit(header("Location: ./book.php?msg=$error!"));
        }
}
else{
    exit(header("Location: ./book.php?msg=Invalid Request!"));
}
?>