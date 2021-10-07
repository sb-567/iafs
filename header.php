<?php include('action.php'); ?>
<?php include('admin/config.php'); ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<meta name="keywords" content="fire safety course, Fire and safety training, No.1 fire safety college in india, Best fire safety course in india, Safety officer course in Mumbai, 
	Fire safety course  maharashtra in india, Fire safety course in pune maharastra India, 
	Fire safety course in nashik Maharashtra India">
	<meta name="description" content="INDIAN ACADEMY OF FIRE AND SAFETY was established to provide professional education in the streams of Fire Engineering and Safety Management. ">
	<!-- Title -->
	<title>Indian Academy Of Fire & safety</title>		
	
	<!-- Stylesheets Start -->
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="icon" type="image/icon" href="img/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700|Open+Sans:400,600" rel="stylesheet"> 
	
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!--<link rel="stylesheet" href="css/owl.theme.default.min.css">-->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/meanmenu.min.css">
	<link rel="stylesheet" href="css/responsive.css">	
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-156032528-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-156032528-1');
</script>


</head>
<body>
    
	<!-- Preloader Start -->
	<!--<div id="preloader">-->
	<!--	<div id="preloader-status"></div>-->
	<!--</div>-->
	<!-- Preloader End -->
    
    
    <div class="">
        <div class="hd-lft1">
			<marquee>
			    <ul>
			        <li><img src="img/arrow.gif" alt="gif1" /> ISO 9001-2015 certified </li>
			        <li><img src="img/arrow.gif" alt="gif2" />  June Session admission is going on ! Hurry Up </li>
			        <li><img src="img/arrow.gif" alt="gif3" />  No.1 Fire Safety Institute in India, Based on google ranking </li>
			        
			        
			    </ul>
			     </marquee>
			
        </div>	
    </div>
	<!-- Header Start -->
	<header>
		<!-- Main Menu Start -->
		<div class="hd-style1">
			
			<div class="hd-sec">
				<div class="container">
					
						<div class="col-md-7  col-xs-12">
							<div class="hd-lft">
								<marquee>Admission Open For All The Courses Approved From GOVERNMENT OF INDIA</marquee>
							</div>	
						</div>	
						<div class="col-md-5   col-xs-12">	
							<div class="hd-rgt">
								<a href="result.php">Result</a>
                                <a href="admission.php">Admission</a>
								<!--<a href="#"  data-toggle="modal" data-target="#model-box"> Enquiry </a>-->
							
							</div>				
						</div>					
					
				</div>
			</div>
			<?php 
   $query = mysqli_query($conn,"select * from settings");
   while($row = mysqli_fetch_array($query)){
   ?>
			 <div class="middle">
			<div class="container">
                <div class="row">
                    <div class="col-md-6 hidden-xs hidden-md">
						<div class="logo">
							<a href="home.php"><img src="admin/logo/<?php echo htmlentities($row['logo']); ?>" alt="logo"/></a>
						</div>
					</div>
					<div class="col-md-2">
					    <img src="img/header-logo-1.png" class="hidden-xs" alt="logo1"/>
					</div>
                    <div class="col-md-4">
                        <div class="col-xs-12 mid">
                            <div class="col-xs-4">
                                <img src="img/tele.gif" alt="tele" class="img-responsive"/>
                            </div>
                            <div class="col-xs-8">
                                <div class="enq">
                                    <h3>ADMISSION ENQUIRY</h3>
                                    <ul>
                                        <li><a href=""><?php echo htmlspecialchars_decode($row['phone']); ?></a></li>
                                        <!--<li><a href="">+91 8454957196</a></li>-->
                                    </ul>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            </div>
           <?php } ?> 
			 <!--Header Top End -->
			<div class="mnmenu-sec">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 nav-menu">
							<div class="col-xs-12 hidden-lg">
								<div class="logo">
									<a href="index.php"><img src="img/logo.png" alt="main-logo"/></a>
								</div>
							</div>
							
							<div class="col-lg-12">		
								<div class="menu">
									<nav id="main-menu" class="main-menu">
										<ul>
											<li class="active"><a href="home.php">Home</a></li>										 
											<li><a href="about.php">About</a></li>	
                                            <li><a href="director-message.php">Director Message</a></li>
                                            <li><a href="courses.php">Courses</a></li>
											<li><a href="our-quality.php">Our Qualities</a>

												<!--<ul><i class="fa fa-angle-down"></i>									-->
												<!--    <li><a href="service-1.html">Service 1</a></li>-->
												<!--	<li><a href="service-2.html">Service 2</a></li>-->
												<!--	<li><a href="service-details-1.html">Service details 1</a></li>-->
												<!--	<li><a href="service-details-2.html">Service details 2</a></li>-->
												<!--</ul>-->

											</li> 				
                                            <li><a href="scope-and-demand.php">Our Placement</a></li>
                                            
                                            <!--<li><a href="franchisor.php">Franchisor Support</a></li>-->
                                            <li><a href="gallery.php">Gallery</a></li>
																		
											
											<li><a href="contact.php">Contact Us</a></li>
										</ul>
									</nav>
																	
								</div>						
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
		<!-- Main Menu End -->
		
	<!--	<div class="modal" id="#myModal">-->
	<!--	<div class="modal-dialog modal-dialog-centered">-->
	<!--		<div class="modal-content text-center">-->
	<!--			<div class="medel-box-top">-->
	<!--				<h4>Enquiry</h4> -->
	<!--				<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <i class="fa fa-times"></i> -->
	<!--				</button>-->
	<!--			</div>-->
	<!--			<form name="form1" id="form1" method="post">-->
 <!--                   <div class="form-group">-->
	<!--				<input type="text" name="name" placeholder="Full Name">-->
 <!--                   </div>-->
 <!--                   <div class="form-group">-->
	<!--				<input type="text" name="email" placeholder="Email Address">-->
 <!--                   </div>-->
 <!--                   <div class="form-group">-->
	<!--				<input type="text" name="subject" placeholder="Subject">-->
 <!--                   </div>-->
 <!--                   <div class="form-group">-->
 <!--                   <input type="text" name="Phone" placeholder="Phone Number">-->
 <!--                   </div>-->
					
					
	<!--				<button type="submit" name="submit">Submit</button>-->
					
	<!--			</form>-->
	<!--		</div>-->
	<!--	</div>-->
	<!--</div>-->
	
	
	</header>
	<!-- Header End -->	