<?php 

include('admin/dbconnect2.php');

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="css/stylelogin.css">
</head>
<body>
     <form action="adduserbackend.php" method="post">
     	<h1>SIGNUP</h1>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>ID Number</label>
     	<input type="number" name="id" placeholder="ID Number" required maxlength=10><br>

		 <label>Name</label>
     	<input type="text" name="name" placeholder="Name" required><br>

		 <label>Phone</label>
     	<input type="phone" name="phone" placeholder="Phone Number" required maxlength=10><br>

		 <label>Status</label>
		 <select name="status" required>
		 	<option value="" disabled selected>Select Status</option>
				<option value="User"> User </option>
		 </select><br>

     	<label>Password</label>
     	<input type="password" name="pwd" placeholder="Password" required><br>


     	<button type="submit">Sign Up</button>
          <a href="login.php" class="ca">Already have an account? Login</a>
     </form>

<?php include('scripts.php'); ?>
<script type="text/javascript">

	$(document).on('submit', '#addsdtaff', function(event) {
		
		event.preventDefault();
		// This removes the error messages from the page
		 $(".list-group-item").remove();
		
		var formData = $(this).serialize();

			$.ajax({
					url: 'adduserbackend.php',
					type: 'post',
					data: formData,
					dataType: 'JSON',

					success: function(response){

						if(response.error){

							console.log(response.error);
					}

						else{

							Swal.fire({
							  position: 'top-end',
							  icon: 'success',
							  title: 'Staff Saved',
							  showConfirmButton: false,
							  timer: 3000
							});
							
							
							setTimeout( function(){
								window.location='add_user.php';
							}, 900);
							

						}

					}
					
					
				});
		


	});

</script>

</body>
</html>