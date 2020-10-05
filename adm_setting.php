<html>
	<head>
		<title>User's Feedback </title>
		<style>
		#feed{
			
			
			font-size:25px;
			border-color:  gray;
			
		}
		</style>
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500|Gaegu:700" rel="stylesheet">
    <link rel="stylesheet" href="css/......2274open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
	<body bgcolor="white">
	<div>
		<?php
			include'database.php';
			
			$query ="SELECT NAME , EMAIL , SUBJECT , MESSAGE from msg";
					$res =$db->query($query);
					$result=$res->fetch();
		?>
			<center>
			 <div class="row mb-5">
        <div class="col-md-12 text-center">
          <h2>Recent Feedback..</h2>
        </div>
      </div>
			<table border=3 cellspacing=0 id="feed">
		<?php
					
							print"<tr>";
							print"<th>Name : </th>";
							print"<th>Email : </th>";
							print"<th>Subject : </th>";
							print"<th>Message : </th>";
							print"</tr>";
					while($result)
					{
							print"<tr>";
								print"<td>";
									print $result['NAME'];
								print"</td>";
								
								print"<td>";
									print $result['EMAIL'];
								print"</td>";
								
								print"<td>";
									print $result['SUBJECT'];
								print"</td>";
								
								print"<td>";
									print $result['MESSAGE'];
								print"</td>";
							print"</tr>";
						
						
					$result=$res->fetch();
					}
					
					
				
		?>
		</table>
		</div>
	
	</body>
</html>