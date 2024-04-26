<?php
    session_start();
    $id=$_SESSION['id'];
    include("connect.php");

    $oldpass=$_REQUEST['oldpass'];
    $newpass=$_REQUEST['newpass'];
    $repass=$_REQUEST['repass'];


      if(ISSET($_REQUEST['sub']))

      {
        $ml=mysqli_query($conn,"select * from hotel where  id='$email'")or die("error");
        //$pass = mysql_fetch_array($ml);

        if ($pass == $oldpass)
        {
        if ($newpass == $repass)

        {
        $update_pass = mysql_query("update users set  where id='$email'");
        echo "<script>alert('Update Sucessfully'); window.location='update password.php'</script>";
        }
        else
        {
        echo "<script>alert('Your new and Retype Password is not match'); window.location='update password.php'</script>";
        }
        }
        else
        {
        echo "<script>alert('Your old password is wrong'); window.location='update password.php'</script>";
        }
        }
        ?>
