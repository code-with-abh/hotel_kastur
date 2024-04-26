<?php

$host='localhost';
$user='root';
$pass='';
$db='hotel_kasturi';

$con=mysqli_connect($host,$user,$pass,$db);
if($con)
    echo 'reday';
    $sql="insert into login login id,password values ('abhi@gmail.com','1234');
    $query=mysqli_query($con,$sql);
    if($query)
    echo 'sorry';

?>
