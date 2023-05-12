<?php
require_once("conetion.php");
$tablename = "dark";

$id = $_GET['id'];

$query = "DELETE FROM $tablename where `id`='$id'" or die("delete error");

$result = mysqli_query($conn,$query) or die("result error");

if($result){
    header("location:add_subject.php");
}

?>