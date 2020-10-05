<!DOCTYPE html>
<html>

	<head>

	  <meta charset="UTF-8">

	  <title>Admin Login </title>

	  <link rel="stylesheet" href="log_reset.css">

		<link rel="stylesheet" href="log_style.css" media="screen" type="text/css" />

	</head>

	<body>

	    <div class="wrap">
			<form action="login.php" method="POST">
			<div class="avatar">
				<img src="logo.gif">
			</div>
			<input type="text" name="username" placeholder="username" required>
			<div class="bar">
				<i></i>
			</div>
			<input type="password" name="password" placeholder="password" required>
			<a href="" class="forgot_link">forgot ?</a>
			<input type="submit" value="Login" id="sub">
			</form>
		</div>

	  <script src="js/index.js"></script>
	  
	  <?php
		$msg="";
		if(count($_POST)>0)
		{
			$conn=mysqli_connect("localhost","deepak","deepak","need");
			$res=mysqli_query($conn,"SELECT * FROM admin WHERE UserId='".$_POST['username']."' and Password='".$_POST['password']."'");
			$count=mysqli_num_rows($res);
			if($count==0)
			{
				
		?>
				<script>
					alert("Invalid UserId and/or Password \n Please check again..!!");
				</script>
		<?php
			}
			else
			{
				
				header("Location:Adm_donate.php");
				exit;
							
			}
			
		}
		
		
	  ?>

	</body>

</html>