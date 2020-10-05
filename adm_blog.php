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
        <div class="col-md-6 pr-md-5">
          <form action="adm_blog.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <input type="text" class="form-control px-3 py-3"  name="t" placeholder="Blog Title">
            </div>
            
              <input type="file" class="form-control px-3 py-3" name="pic" placeholder="Add Image">
            
            <div class="form-group">
              <input type="text" class="form-control px-3 py-3" name="h" placeholder="Heading..">
            </div>
            <div class="form-group">
              <textarea name="d" cols="30" rows="7" class="form-control px-3 py-3" placeholder="Description.."></textarea>
            </div>
            <div class="form-group">
              <input type="submit" name="sub" value="Add To Blog" class="btn btn-primary py-3 px-5">
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
				$title=$_POST['t'];
				$img=$_POST['pic'];
				$heading=$_POST['h'];
				$desc=$_POST['d'];
				
				//echo "<script>alert($view);</script>";
				$imageFile=$_FILES['pic']['tmp_name']; //image path
				//print "Image file name : ".$imageFile."<br>";
				$currentD=getcwd();
				//print "Current Directory : ".$currentD."<br>";
				$temp = explode(".", $_FILES['pic']['title']);
				
				//print  $_FILES['ip']['name']."<br>";
				$newfilename =$title.$img. '.'.end($temp);
				$path_name=$currentD.DIRECTORY_SEPARATOR."blog".DIRECTORY_SEPARATOR.$newfilename;
				$pn=$newfilename;
				
				
				$query="insert into blog (title,image,heading,discription)
						  values ('$title', '$pn','$heading','$desc') ";
					
					$success = $db->exec($query);
					
					if($success){
						$s=move_uploaded_file($imageFile,$path_name);
						if($s){
							echo "<script>alert('Blog updated..');</script>";
						}
						else{
							echo "<script>alert('Failed to update blog!');</script>";
						}
					}
					else
					{
						echo "<script>alert('data could not be added!\\n $sql');</script>";
					}
			}
            
	?>
  
  </body>
 </html>