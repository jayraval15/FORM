<?php
$tmpname = $_FILES['photo']['tmp_name'];
$target_folder = "imge";
$target_name = $_FILES['photo']['name'];
$target_size = $_FILES['photo']['size'];
$target_error = $_FILES['photo']['error'];
$target_type = $_FILES['photo']['type'];

$target_file =  $target_folder."/".basename($target_name);

if($target_error==0){
    $file_tatuse = move_uploaded_file($tmpname,$target_file);
}

require_once("conetion.php");

$name = $_POST['name'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$number = $_POST['number']; 
$subject = $_POST['subject'];
$password =  $_POST['password'];
$photo = $_FILES['photo']['name'];

if($file_tatuse){
$query = "INSERT INTO $tablename (`name`,`dob`,`gender`,`email`,`number`,`subject`,`password`,`photo`) value ('$name','$dob','$gender','$email','$number','$subject','$password','$photo')";
}
$result = mysqli_query($conn,$query);

    if($result==1){
        header("location:table_form.php");
    }else{
        echo " join error";
    }

?>