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
  ?>