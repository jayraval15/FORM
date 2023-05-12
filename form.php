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
    <link rel="stylesheet" href="form.css">      
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>
<body  style=" background-color: #4D9D">

<div class="container">
<hr>
<div class="card bg-light">
	
		<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">STUDENT FORM</h4>
	<p class="divider-text">
        <span class="bg-light">OR</span>
    </p>
	<form action="form_join.php" method="post" enctype="multipart/form-data">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
		 </div>
        <input name="name" class="form-control" placeholder="Full name" type="text">
    </div> <!-- form-group// -->
	<div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"><i class="bi bi-calendar"></i></span>
		 </div>
        <input name="dob" class="form-control" placeholder="Email address" type="date">
    </div> <!-- form-group// -->
	<div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="bi bi-gender-ambiguous"></i></span>
		</div>
			<input type="radio" name="gender" value="1"> male
			 <br><input type="radio" name="gender" value="2"> female
	</div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"><i class="bi bi-envelope"></i> </span>
		 </div>
        <input name="email" class="form-control" placeholder="Email address" type="email">
    </div> <!-- form-group// -->
	
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"><i class="bi bi-telephone"></i> </span>
		</div>
    	<input name="number" class="form-control" placeholder="Phone number" type="text">
    </div> <!-- form-group// -->

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"><i class="bi bi-book"></i> </span>
		</div>
		<select class="form-control" name="subject">
			<option selected="">SELECT THE SUBJECT</option>
			<option>Designer</option>
			<option>Manager</option>
			<option>Accaunting</option>
		</select>
	</div> <!-- form-group end.// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"><i class="bi bi-eye"></i></span>
		</div>
        <input name="password" class="form-control" placeholder="password" type="password">
    </div> <!-- form-group// -->
   <div class="form-group input-group">
   <div class="input-group-prepend">
</div>
   </div> 
   <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"><i class="bi bi-file-earmark-image"></i></span>
		 </div>
        <input type="file" name="photo">
    </div>                                   
    <div class="form-group">
		<br>
        <button type="submit"  name="submit" class="btn btn-primary btn-block"> SUBMIT  </button>
    </div> <!-- form-group// -->      
                                                                  
</form>
</article>
</div> 
</div> 
</body>
</html>