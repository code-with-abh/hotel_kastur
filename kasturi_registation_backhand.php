``<?php
 
 $servername = "localhost";
 $username = "username";
 $password = "password";
 $dbname = "hotel_kasturi";
        $conn = mysqli_connect("localhost", "root", "", "hotel_kasturi");


  $email=$_REQUEST['email'];
  $mob=$_REQUEST['mobile'];
  $password=$_REQUEST['password'];
  $conpass=$_REQUEST['conpass'];

  if(ISSET($_REQUEST['ok']))

  {
  $el=mysqli_query($conn,"select email from user where email='$email'")or die("error");
  $n=(mysqli_num_rows($el));
  if($n==0||$n=='')
  {
    $ins=mysqli_query($conn,"insert into user values
     (' ','$email','$mobilr','$password','$conpass')")
               or die("insert error");

               if($ins)

                 {
                   echo "<script>alert('Registration successful')</script>";

                     echo "<script>window.location.href='login.php'</script>";
                 }

                 else
                 {
                   echo "<script>alert('Registration unsuccessful')</script>";
                   echo "<script>window.location.href='registration.php'</script>";

                 }

    }
    else
    {
       echo "<script>alert('Email already exist')</script>";

       echo "<script>window.location.href='registration.php'</script>";
    }

}


?>
  }
