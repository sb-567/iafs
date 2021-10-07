<footer>	
		<!-- Footer Top Section Start -->
<?php 
    $query = mysqli_query($conn,"select * from settings");
    while($row = mysqli_fetch_array($query)){
    ?>			
		<div class="footer-sec">
			<div class="container">
				<div class="row">				
					<div class="col-md-5 col-sm-6">
						<div class="footer-wedget-one">
							<h2>About us</h2>
							<p>IAFS Indian academy of fire and safety  and Affiliated by UGC recognised AICTE approved and NCVTE government of India council  has been jointly collaborated and set up an educational organization called IAFS Indian academy of fire and safety management to educate the society from each level. making awareness about the fire and safety in society when knowledge of fire and safety was so much unknown to everyone.</p>					
														
						       <a href="about.php">Read More</a>

						</div>
						    <div class="footer-social-profile">
								<ul>
									<li><a href="<?php echo htmlspecialchars_decode($row['facebook']); ?>"><i class="fa fa-facebook"></i></a></li>
									<li><a href=""><i class="fa fa-instagram"></i></a></li>
									<li><a href=""><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
					</div>											
					
					<div class="col-md-3 col-sm-6">
						<div class="footer-widget-menu">
							<h2>Support links</h2>
							<ul>
								<li><a href="index.php">Home</a></li>										 
								<li><a href="about.php">About</a></li>	
                                <li><a href="director-message.php">Director Message</a></li>
                                <li><a href="courses.php">Courses</a></li>
								<li><a href="our-quality.php">Our Qualities</a></li> 				
                                <li><a href="scope-and-demand.php">Scope & Demand</a></li>
                                <li><a href="franchisor.php">Franchisor Support</a></li>
							    <li><a href="contact.php">Contact Us</a></li>
				            </ul>
						</div>	
					</div>		
					<div class="col-md-4 col-sm-6">
						<div class="footer-wedget-four">
							<h2>contact us </h2>
								<div class="inner-box">
									<div class="media">
										<div class="inner-item">
											<div class="media-left">
												<span class="icon"><i class="fa fa-map-marker"></i></span>
											</div>				
											<div class="media-body">
												<span class="inner-text"><?php echo htmlspecialchars_decode($row['address']); ?></span>
											</div>											
										</div>					
									</div>								
									<div class="media">
										<div class="inner-item">
											<div class="media-left">
												<span class="icon"><i class="fa fa-envelope-o"></i></span>
											</div>				
											<div class="media-body">
												<span class="inner-text"><?php echo htmlspecialchars_decode($row['email']); ?></span>
											</div>											
										</div>					
									</div>								
									<div class="media">
										<div class="inner-item">
											<div class="media-left">
												<span class="icon"><i class="fa fa-phone"></i></span>
											</div>				
											<div class="media-body">
												<span class="inner-text"><?php echo htmlspecialchars_decode($row['phone']); ?></span>
<!--+91 8454957196-->
											</div>											
										</div>					
									</div>
									
                                    <br>
                                  
								</div>							
						</div>
					</div>								
				</div>
			</div>
		</div>
		<!-- Footer Top Section End -->
		<!-- Footer Bottom Section Start -->
		<div class="footer-bottom-sec">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="copy-right">
							<p> Copyrights © 2019 IAFS. All Rights Reserved.</p>
						</div>
					</div>					
				</div>
			</div>
		</div>
	<?php } ?>
		<!-- Footer Bottom Section End -->
	</footer>
	
	<div class="flt"><a href="https://api.whatsapp.com/send?phone=8169153020&text=%20Hi Sir / Madam I am looking for admission in Maharashtra State Board Or Central Government Of India" target="_blank"><i class="fa fa-whatsapp"></i></a> </div>

	<!-- Footer Section End -->
	<!-- Scripts Js Start -->
	<script  src="js/jquery-2.2.4.min.js"></script>
	<script  src="js/bootstrap.min.js"></script>
	<script  src="js/custom.js"></script>
	<script  src="js/owl.carousel.min.js"></script>
<!-- 	<script  src="js/owl.animate.js"></script>-->	
	<script  src="js/imagesloaded.pkgd.min.js"></script>
	<script  src="js/isotope.pkgd.min.js"></script>
	<script  src="js/jquery.scrollUp.min.js"></script>
	<script  src="js/modernizr.min.js"></script>
	<script  src="js/jquery.magnific-popup.min.js"></script>
	<script  src="js/wow.min.js"></script>
	<script  src="js/waypoints.min.js"></script>
	<script  src="js/jquery.meanmenu.min.js"></script>
	<!--<script  src="js/jquery.sticky.js"></script>-->
 
	<!-- Scripts Js End -->	
</body>
</html>