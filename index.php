<!DOCTYPE html>
<html lang="en">
  <head>
    <title>NEED - User Page </title>
	<style>
	.drop{
		position:relative;
		display:inline-block;
	}
	.dr{
		display:none;
		position:absolute;
		background-color:#f1f1f1;
		min-width:160px;
		box-shadow:0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index:1;
	}
	.dr about{
		color:black;
		padding:12px 16px;
		text-decoration:none;
		display:block;
	}
	.dr a:hover{
		background-color:#ddd;
	}
	.drop:hover .dr{
		display:block;
	}
	
	</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
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
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">Need..</a><br/>
	  <a href="index.html" class="nav-link">Everyone needs it..</a></li>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="donate.php" class="nav-link">Donate</a></li>
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
      <div class="block-30 item" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7">
              <h2 class="heading">Please Help Poor Children , To Give Them A Better Life.</h2>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  

  <div class="site-section">
    <div class="container">
      <div class="row">

        <div class="col-md-4">
          <div class="media block-6">
            <div class="icon"><span class="flaticon-first-aid-kit"></span></div>
            <div class="media-body">
              <h3 class="heading">Medical Mission</h3>
              <p>From your small donations , we'll give them medical help.</p>
              <p><a href="#">Learn More</a></p>
            </div>
          </div>     
        </div>

        <div class="col-md-4">
          <div class="media block-6">
            <div class="icon"><span class="flaticon-donate"></span></div>
            <div class="media-body">
              <h3 class="heading">Make Donation Now</h3>
              <p>Even small amount which you donated can make someone smile , Donate now.</p>
              <p><a href="#">Learn More</a></p>
            </div>
          </div>  
        </div>

        <div class="col-md-4">
          <div class="media block-6">
            <div class="icon"><span class="flaticon-people"></span></div>
            <div class="media-body">
              <h3 class="heading">We Need Volunteers</h3>
              <p>To provide certain help towards poor childs.. we need volunteers,</p>
              <p><a href="#">Learn More</a></p>
            </div>
          </div> 
        </div>

      </div>
    </div>
  </div> <!-- .site-section -->



  <div class="featured-donate overlay-color" style="background-image: url('images/bg_2.jpg');">
    
    <div class="container">
      <div class="row">
        <div class="col-lg-8 order-lg-2 mb-3 mb-lg-0">
          <img src="images/bg_2.jpg" alt="Image placeholder" class="img-fluid">
        </div>
        <div class="col-lg-4 pr-lg-5">
          <span class="featured-text mb-3 d-block">Featured</span>
          <h2>School in Rural India Need Renovations</h2>
          <p class="mb-3">Some true examples : In rural part of India childrens suffering from lack of education & it leads their future towards dark .</p>
          
                   
          <p><a href="donate.php" class="btn btn-primary btn-hover-white py-3 px-5">Donate Now</a></p>
        </div>
        
      </div>
    </div>

  </div> <!-- .featured-donate -->

  <div class="site-section fund-raisers">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-12">
          <h2>Top Fundraisers</h2>
        </div>
      </div>

      <div class="row">
        
        <div class="col-md-12 block-11">
          <div class="nonloop-block-11 owl-carousel">

		  <?php
			include'database.php';
			
			$query ="SELECT title , image,discription FROM blog";
					$res =$db->query($query);
					$result=$res->fetch();
					while($result)
					{
				
		?>
		  
            <div class="card fundraise-item">
              <a href="#"><img class="card-img-top" src="<?php print 'donor/'.$result['image'];?>" alt="Image placeholder"></a>
              <div class="card-body">
                <h3 class="card-title"><a href="#"><?php echo $result['title'];?></a></h3>
                <p class="card-text"><?php echo $result['discription'];?></p>
                <div class="progress custom-progress-success">
                </div>
              </div>
            </div>
			
			<?php
				$result=$res->fetch();
					}
					
					
			?>
           
           
           
          </div>
        </div>
      </div>
    </div>
  </div> <!-- .section -->


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
          <h2>School in Maharashtra (Rural) Need Renovations. Thanks To All Donors</h2>
          <p class="mb-3">Few of districts from maharashtra needs renovations in school & lack of education.</p>
          

          <p><a href="#" class="btn btn-success btn-hover-white py-3 px-5">Read The Full Story</a></p>
        </div>
        
      </div>
    </div>

  </div> <!-- .featured-donate -->

  <div class="site-section bg-light">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-12">
          <h2>Latest News</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="post-entry">
            <a href="#" class="mb-3 img-wrap">
              <img src="images/img_4.jpg" alt="Image placeholder" class="img-fluid">
              <span class="date">July 26, 2018</span>
            </a>
            <h3><a href="#">Be A Volunteer Today</a></h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
            <p><a href="#">Read More</a></p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="post-entry">
            <a href="#" class="mb-3 img-wrap">
              <img src="images/img_5.jpg" alt="Image placeholder" class="img-fluid">
              <span class="date">July 26, 2018</span>
            </a>
            <h3><a href="#">You May Save The Life of A Child</a></h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
            <p><a href="#">Read More</a></p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="post-entry">
            <a href="#" class="mb-3 img-wrap">
              <img src="images/img_6.jpg" alt="Image placeholder" class="img-fluid">
              <span class="date">July 26, 2018</span>
            </a>
            <h3><a href="#">Children That Needs Care</a></h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
            <p><a href="#">Read More</a></p>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- .section -->

  
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
             &copy;<script>document.write(new Date().getFullYear());</script> -Savita Virkar & Deepak Shinde <i class="icon-heart" aria-hidden="true"></i>
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