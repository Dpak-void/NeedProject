<html>
	<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500|Gaegu:700" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
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
  
	</body>
	
<div class="site-section" style="margin-left:400px;">
    <div class="container">
      <div class="row block-9">
        <div class="col-md-6 pr-md-8">
          <form name="f" action="adm_make.php" method="POST" enctype="multipart/form-data" >
            <div class="form-group">
              <input type="text" class="form-control px-3 py-3" name="n" placeholder="Name of the donor">
            </div>
			<div class="form-group">
				<input type="file"  placeholder="select image" name="ip">
			</div>
            <div class="form-group">
              <input type="text" class="form-control px-3 py-3" name="e" placeholder="Email id">
            </div>
			<div class="form-group">
              <input type="text" class="form-control px-3 py-3" name="o"  placeholder="Your Occupation">
            </div>
            <div class="form-group">
              <input type="text" class="form-control px-3 py-3" name="amt" placeholder="amount Description..">
            </div>
			
            <div class="form-group">
              <textarea id="v" cols="30" rows="7" name="v" class="form-control px-3 py-3" placeholder="Their Views.."></textarea>
            </div>
            <div class="form-group">
              <input type="submit"   name="sub" value="Add Donor" class="btn btn-primary py-3 px-5">
            </div>
          </form>
        
        </div>

        <div class="col-md-6" id="map"></div>
      </div>
    </div>
  </div>
  
  <?php
			
			if(isset($_POST['sub']))
			{
				include('database.php');
				$name=$_POST['n'];
				$img=$_POST['ip'];
				$email=$_POST['e'];
				$occu=$_POST['o'];
				$amt=$_POST['amt'];
				$view=$_POST['v'];
				//echo "<script>alert($view);</script>";
				$imageFile=$_FILES['ip']['tmp_name']; //image path
				//print "Image file name : ".$imageFile."<br>";
				$currentD=getcwd();
				//print "Current Directory : ".$currentD."<br>";
				$temp = explode(".", $_FILES['ip']['name']);
				
				//print  $_FILES['ip']['name']."<br>";
				$newfilename =$name.$amt. '.'.end($temp);
				$path_name=$currentD.DIRECTORY_SEPARATOR."donor".DIRECTORY_SEPARATOR.$newfilename;
				$pn=$newfilename;
				
				
				$query="insert into donate (name,image,email,occupation,amount,view,date)
						  values ('$name', '$pn','$email','$occu','$amt','$view','') ";
					
					$success = $db->exec($query);
					
					if($success){
						$s=move_uploaded_file($imageFile,$path_name);
						if($s){
							echo "<script>alert('Product added successfully!');</script>";
						}
						else{
							echo "<script>alert('Product not added!');</script>";
						}
					}
					else
					{
						echo "<script>alert('Product could not be added!\\n $sql');</script>";
					}
			}
            
	?>
</body>
 </html> 