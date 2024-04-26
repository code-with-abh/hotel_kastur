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

if(ISSET($_POST['sub']))

    $location = $_POST['loc'];
    $name = $_POST['name'];
    $mobile = $_POST['mob'];
    
    $checkin = $_POST['cin'];
    $checkout = $_POST['cout'];
    $guest = $_POST['gnum'];
    $price = $_POST['rate'];
    $payment = $_POST['pay'];
    
  
   
    //echo ($name1);
   //print_r($_POST['name']);exit;
    $sql = "INSERT INTO tour (location,name,mobile,cin,cout,gnumber,price,payment) VALUES ('$location','$name','$mobile','$checkin','$checkout','$guest','$price','$payment')";

    mysqli_query($conn,$sql);

  

     {
       echo "<script>alert('booking successful')</script>";
       echo "<script>window.location.href='tour_conformation.php'</script>";
     }




?>