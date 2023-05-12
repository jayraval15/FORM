<?php
require_once("conetion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
  <!--for demo wrap-->
 <center> <h1>STUDENT FORM</h1></center>
  <div class="tbl-header">
    <form action="">
            <table cellpadding="20" cellspacing="30" border="30" >
      <thead>
                    <tr>                       
                       <th class="text-muted fw-600">#</th>
                       <th class="text-muted fw-600">NAME</th>
                       <th class="text-muted fw-600">DOB</th>
                       <th class="text-muted fw-600">GENDER</th>
                       <th class="text-muted fw-600">EMAIL</th>
                       <th class="text-muted fw-600">NUMBER</th>
                       <th class="text-muted fw-600">SUBJECT</th>
                       <th class="text-muted fw-600">PASSWORD</th>
                       <th class="text-muted fw-600">photos</th>
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
                                    <td><?php echo $row['name'] ?></td>
                                    <td><?php echo $row['dob'] ?></td>
                                    <td><?php echo $row['gender'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                    <td><?php echo $row['number'] ?></td>
                                    <td><?php echo $row['subject'] ?></td>
                                    <td><?php echo $row['password'] ?></td>
                                    <td><img src="imge/<?php echo $row['photo']; ?>" height="50px" ></td>
                                    <td><i class="bi bi-pencil-square"></i></td>
                                    <td><a href="delete.php?id=<?php echo $row['id']; ?>"><i class="bi bi-trash-fill"></i></a></td>
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
    </form>

  </div>
</body>
</html>
  