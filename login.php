<!DOCTYPE html>
<html lang="">

<?php
session_start(); 
include('dbconnect.php');
    if(isset($_SESSION['staffid'])){

    	if($_SESSION['role']=='Admin'){
    	
      header("Location: admin/");
    }
     elseif($_SESSION['role']=='Police'){
    	
      header("Location: police/");
    }
    elseif($_SESSION['role']=='User'){
    	
      header("Location: user/");
    }
		
      
    }


 
?>


<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="css/stylelogin.css">
</head>
<body>
     <form action="logincheck.php" method="post">
     	<h1>LOGIN</h1>
     	<?php if (isset($_SESSION['error'])) { ?>
     		<p class="error"><?php echo $_SESSION['error']; ?></p>
     	<?php } ?>
     	<label>ID Number</label>
     	<input type="number" name="username" placeholder="ID Number" required><br>

     	<label>Password</label>
     	<input type="password" name="pwd" placeholder="Password" required><br>


       
       <button type="submit" name="login">Login</button>
          <a href="add_user.php" class="ca">Create an account</a>
     </form>


<script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>



</body>
</html>