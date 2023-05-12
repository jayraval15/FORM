<?php
require_once("conetion.php");

$tablename = "dark";

if(isset($_POST['submit'])){

    $add_subject = $_POST['add_subject'];

$query = "INSERT INTO $tablename (`subject`) value ('$add_subject')";

$result = mysqli_query($conn,$query);

    if($result==1){
        header("location:add_subject.php");
    }else{
        echo " join error";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
  <!--for demo wrap-->
 <center> <h1>STUDENT FORM</h1></center>
 <form action="" method="post">
  <div class="tbl-header">
    ADD : <input type="text" name="add_subject">
    <button type="submit" name="submit" value="SUBMIT">SUBMIT </button> 
    <br><br>
            <table cellpadding="20" cellspacing="30" border="30" >
      <thead>
                    <tr>                       
                       <th class="text-muted fw-600">#</th>
                       <th class="text-muted fw-600">SUBJECT</th>                       
                       <th class="text-muted fw-600">ACTION</th>                       
                   </tr>
      </thead>
      <tbody>
                    <?php

                        $query = "SELECT * FROM $tablename " or die("table query error");
                        
                           $result = mysqli_query($conn,$query) or die(" table  result error");
                           
                           if(mysqli_fetch_row($result) > 1){
                            $sr=1;
                            while($row = mysqli_fetch_assoc($result)){
                                
                                ?>

                               <tr>
                                    <td><?php echo $sr++ ?></td>
                                    <td><?php echo $row['subject'] ?></td>
                                    <td><a href="subject_delet.php?id=<?php echo $row['id']; ?>"><i class="bi bi-trash-fill"></i></a></td>
                                    </tr>

                                <?php
                            }
                           }else{?>

                           <th>
                            <td>NO DATA FOUND</td>
                           </th>
<?php
                           }

                    ?>
                </tbody>
    </table>


  </div>
  </form>
</body>
</html>
  