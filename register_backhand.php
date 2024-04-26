<?php
  $servername="localhost";
  $username="root";
  $password="";
  $database="kasturi_db";

  $conn=mysqli_connect($servername,$username,$password,$database);
  if(!$conn)
  {
    die("connection failed:"); 
  }
  echo "Connected successfully";
session_start();
if(ISSET($_POST['sub']))


    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $dob=$_POST['dob'];
    $gender=$_POST['gen'];
    $marital=$_POST['mar'];
    
    $filename = $_FILES["pic"]["name"];
    $tempname = $_FILES["pic"]["tmp_name"];
    $folder = "./image/" . $filename;
    $password=$_POST['pass'];
    //echo ($name1);
   //print_r($_POST['name']);exit;
    $sql = "INSERT INTO hotel (name, email, mobile, dob, gender, marital ,filename,password) VALUES ('$name','$email','$mobile','$dob','$gender','$marital', '$filename','$password')";

    mysqli_query($conn,$sql);

    if (move_uploaded_file($tempname, $folder)) 
  

     {
       echo "<script>alert('Registration successful')</script>";
       echo "<script>window.location.href='login.php'</script>";
     }
else
{
  echo "<script>alert('Registration not successful')</script>";
     }



?>