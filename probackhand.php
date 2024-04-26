





<?php
session_start();
include("connect.php");

if(ISSET($_POST['sub']))


$name=$_REQUEST['name'];
$mobile=$_REQUEST['mob'];

$dob=$_REQUEST['dob'];
$gender=$_REQUEST['gen'];
$marital=$_REQUEST['mar'];

 
$ml =mysqli_query($conn,"update profile set name='$name',mobile='$mobile',dob='$dob',gender='$gender',marital='$marital' where name='$name'");
mysqli_query($conn,$ml);


           
           
            
      {

             echo "<script>alert('successfully updated your profile.')</script>";
             header('location:my profile.php');
             echo "yes";
           }
     

  ?>
