<?php
$hostname = "localhost";
$user = "root";
$dbpass = "";
$dbname = "darkweb";
$tablename = "jinkolp";

$conn = mysqli_connect($hostname,$user,$dbpass,$dbname) or die("conection error");


if($conn){
    echo "";
}else{
    echo "conn error";
}
?>