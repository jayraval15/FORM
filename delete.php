<?php
require_once("conetion.php");

$id = $_GET['id'];

$query = "DELETE FROM $tablename where `id`='$id'" or die("delete error");

$result = mysqli_query($conn,$query) or die("result error");

if($result){
    header("location:table_form.php");
}

?>