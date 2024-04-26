<?php
session_start();
$servername = "localhost";
$username = "root";
$password ="";
$database = "kasturi_db";

$conn = new mysqli($servername,$username,$password,$database);
if (!$conn)
{
    die( "connection failed");

}
if(ISSET($_POST['sub']))

$email=$_REQUEST['email'];
$pass=$_REQUEST['pass'];

if(isset($_REQUEST['sub']))
{
 $ml=mysqli_query($conn,"select * from hotel where  email='$email' and password='$pass'")or die("error");

 if(mysqli_num_rows($ml)==1)
   {
     
        $p=mysqli_fetch_assoc($ml);
        $_SESSION['id']=$p['email'];
        
        echo "<script>alert('log in successful')</script>";
        echo "<script>window.location.href='userprofile.php'</script>";

       }
       else
       {
        echo "<script>alert('log in unsuccessful')</script>";
        echo "<script>window.location.href='login.php'</script>";
       }

      }
$conn->close();
?>