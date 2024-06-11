<?php
$servername='localhost';
$username='root';
$password='root';
$dbname='vivek';

$conn=mysqli_connect($servername,$username,$password,$dbname,"3307");

if($conn){
    // echo "connection successfull";
}
else{
    echo "connection failed";
}

?>