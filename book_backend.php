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

if(ISSET($_REQUEST['sub']))


    $checkin = $_REQUEST['in'];
    $checkout = $_REQUEST['out'];
    $room = $_REQUEST['room'];
    $gnumber=$_REQUEST['guest'];
    $price=$_REQUEST['rate'];
    $payment=$_REQUEST['pay'];
    
    //echo ($name1);
   //print_r($_POST['name']);exit;
    $sql = "INSERT INTO booking (cin,cout,room,gnumber,price,payment) VALUES ('$checkin','$checkout','$room','$gnumber','$price','$payment')";

    $ml = mysqli_query($conn,$sql);
    

     {
        
        
       echo "<script>alert('Booking successful')</script>";

 echo "<script>window.location.href='conformation.php'</script>";
     }



?>