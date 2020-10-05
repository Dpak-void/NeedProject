<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Need..</title>
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
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">Need..</a>
	  <a href="index.html" class="nav-link">Everyone needs it..</a></li>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item active"><a href="donate.php" class="nav-link">Donations</a></li>
          <li class="nav-item"><a href="gallery.php" class="nav-link">Gallery</a></li>
          <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->
  
  <div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
      <div class="block-30 block-30-sm item" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center">
              <h2 class="heading">Donate To Save Lives</h2>
              <p class="lead">Your minimum help & donation can make someone happy, let's spread Happiness let's Donate.</p>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
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


  <div class="site-section fund-raisers">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-12 text-center">
          <h2>Latest Donations</h2>
        </div>
      </div>
	   <div class="row">
		<?php
			include'database.php';
			
			$query ="SELECT name , image,amount,date FROM donate";
					$res =$db->query($query);
					$result=$res->fetch();
					while($result)
					{
				
		?>
     
        <div class="col-md-6 col-lg-3 mb-5">
          <div class="person-donate text-center bg-light pt-4">
            <img src="<?php print 'donor/'.$result['image'];?>" alt="Image placeholder" width="250px" height="200px" class="img-fluid">
            <div class="donate-info">
              <h2><?php echo $result['name']?></h2>
              <span class="time d-block mb-3">D Date : <?php echo $result['date']?></span>

              <div class="donate-amount d-flex">
                <div class="label">Donated</div>
                <div class="amount"><?php echo $result['amount']?></div>
              </div>
            </div>
          </div>    
        </div>

     
	 <?php
					$result=$res->fetch();
					}
				?>
				</div>
    </div>
  </div> <!-- .section -->
  
  
	
  <div class="featured-section overlay-color-2" style="background-image: url('images/bg_3.jpg');">
    
    <div class="container">
      <div class="row">

        <div class="col-md-6">
          <img src="images/bg_3.jpg" alt="Image placeholder" class="img-fluid">
        </div>

        <div class="col-md-6 pl-md-5">
          <span class="featured-text d-block mb-3">Success Stories</span>
          <h2>School in MH Need Renovations. Thanks To All Donors</h2>
          <p class="mb-3">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          <span class="fund-raised d-block mb-5">We have raised $30,000</span>

          <p><a href="#" class="btn btn-success btn-hover-white py-3 px-5">Read The Full Story</a></p>
        </div>
        
      </div>
    </div>

  </div> <!-- .featured-donate -->

  <div class="site-section bg-light">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-12 text-center">
          <h2>Testimonial</h2>
        </div>
      </div>
	   <div class="row">
	   
	  <?php
			include'database.php';
			
			$query ="SELECT name , image,view,date FROM donate";
					$res =$db->query($query);
					$result=$res->fetch();
					while($result)
					{
				
		?>
     
     
        <div class="col-md-6 mb-5">
          <div class="block-47 d-flex">
            <div class="block-47-image">
              <img src="<?php print 'donor/'.$result['image'];?>" alt="Image placeholder" class="img-fluid">
            </div>
            <blockquote class="block-47-quote">
              <p>&ldquo <?php echo $result['view'];?> </p>
              <cite class="block-47-quote-author"><?php echo $result['name'];?></cite>
            </blockquote>
          </div>
			</div>
       

        
        <?php
		$result=$res->fetch();
					}
		?>
		

      </div>
	  </div>
    </div>
  

  
  
  <footer class="footer">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-6 col-lg-4">
          <h3 class="heading-section">About Us</h3>
          <p class="mb-5">It is an non-profit organization whose primary objectives are Philanthropy and social well-being.</p>
          <p><a href="#" class="btn btn-primary px-4 py-3">Join Volunteer</a></p>
        </div>
        <div class="col-md-6 col-lg-4">
          <h3 class="heading-section">Blog</h3>
          <div class="block-21 d-flex mb-4">
            <figure class="mr-3">
              <img src="images/img_1.jpg" alt="" class="img-fluid">
            </figure>
            <div class="text">
              <h3 class="heading"><a href="#">Give Meal A Day</a></h3>
              <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span> July 29, 2018</a></div>
                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
              </div>
            </div>
          </div>

          <div class="block-21 d-flex mb-4">
            <figure class="mr-3">
              <img src="images/img_2.jpg" alt="" class="img-fluid">
            </figure>
            <div class="text">
              <h3 class="heading"><a href="#">Free Education For African Children</a></h3>
              <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span> July 29, 2018</a></div>
                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
              </div>
            </div>
          </div>

          <div class="block-21 d-flex mb-4">
            <figure class="mr-3">
              <img src="images/img_4.jpg" alt="" class="img-fluid">
            </figure>
            <div class="text">
              <h3 class="heading"><a href="#">Join As A Volunteers</a></h3>
              <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span> July 29, 2018</a></div>
                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="block-23">
            <h3 class="heading-section">Contact Info</h3>
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">MET ICS , near Lilavati , Bandra west.</span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">0123 456 789</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@NEEDMET.com</span></a></li>
                <li><span class="icon icon-clock-o"></span><span class="text">Monday &mdash; Friday 8:00am - 5:00pm</span></li>
              </ul>
            </div>
        </div>
        
        
      </div>
      <div class="row pt-5">
        <div class="col-md-12 text-center">
          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
             &copy;<script>document.write(new Date().getFullYear());</script> -Savita Virkar & Dipak Shinde <i class="icon-heart" aria-hidden="true"></i>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>