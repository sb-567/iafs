<?php include('header.php');


?>


<!-- Slider Section Start -->

 	
		

		<div class="slidebanner owl-carousel owl-theme">
			<?php 
    $query = mysqli_query($conn,"select * from slider");
    while($row = mysqli_fetch_array($query)){
    ?>		
    		<div class="item">
    			<img src="admin/slider/<?php echo htmlentities($row['image']); ?>" class="img-responsive" >
    		</div>
    <?php } ?>	
		</div>
		
	<!-- Slider Section End -->	
	<!-- About Start -->
	<div class="about-sec pb-100">
		<div class="container">
			<div class="row">
						<?php 
                   $query = mysqli_query($conn,"select * from about");
                   while($row = mysqli_fetch_array($query)){
                   ?>
				<div class="col-md-8">
					<div class="about-desc">
						<div class="sec-title">
							<h1><span><?php echo htmlentities($row['head1']); ?></span></h1>

                            <?php echo htmlspecialchars_decode($row['aboutpara1']); ?>
						</div>	
					</div>	
				</div>	
				<div class="col-md-4">
					<div class="about-us-img">
						<img src="admin/product/about/<?php echo htmlentities($row['image1']); ?>" alt="about"/>
					</div>
				</div>	
                			<?php } ?>
                <div class="col-md-12 sec-title">
                     <a href="about.php">Read More</a>
                </div>
			</div>
		</div>		
	</div>
	
<div class="container pb-50">
	<div class="coursest" >
         <div class="col-md-6">
         <img src="img/iafs1.jpg" class="img-responsive">
     </div>
     <div class="col-md-6">
         <img src="img/iafs2.jpg" class="img-responsive">
     </div>
     </div>
			</div>
		</div>
    
	</div>
</div>
	
	
	<!-- About End -->	
    <!-- Service Start -->	
	<div class="service2-sec pt-50 pb-30">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="sec-title">
						<h2>What We Offer Here</h2>
						
					</div>
				</div>
			</div>
			<div class="row">			
				<div class="service2-item">
			<?php 
    $query = mysqli_query($conn,"select * from home");
    while($row = mysqli_fetch_array($query)){
    ?>			
					<div class="col-md-3 col-sm-6">
						<div class="service2-inner">
							<div class="media">
								<div class="media-left">
									<div class="service2-icon">
										<img src="img/icon/quality.png" alt="quality"/>
									</div>					
								</div>					
								<div class="media-body">				
									<div class="service2-details">						
										<h2><a href="our-quality.php"><?php echo htmlentities($row['head1']); ?></a></h2>
										<ul>
                                            <?php echo htmlentities($row['description1']); ?>
                                        </ul>
										<a href="our-quality.php">Continue Reading...</a>
									</div>							
								</div>							
							</div>							
						</div>							
					</div>
                    
                    
                    
                    <div class="col-md-3 col-sm-6">
						<div class="service2-inner">
							<div class="media">
								<div class="media-left">
									<div class="service2-icon">
										<img src="img/icon/value.png" alt="value"/>
									</div>					
								</div>					
								<div class="media-body">				
									<div class="service2-details">						
										<h2><a href="our-quality.php"><?php echo htmlentities($row['head2']); ?></a></h2>
										<ul>
                                            <li><?php echo htmlentities($row['description2']); ?></li>
                                            
                                        </ul>
										<a href="our-quality.php">Continue Reading...</a>
									</div>							
								</div>							
							</div>							
						</div>							
					</div>
                    
                    
					<div class="col-md-3 col-sm-6">
						<div class="service2-inner">
							<div class="media">
								<div class="media-left">
									<div class="service2-icon">
										<img src="img/icon/q-p.png" alt="Quality Policy"/>
									</div>					
								</div>					
								<div class="media-body">				
									<div class="service2-details">						
										<h2><a href="our-quality.php"><?php echo htmlentities($row['head3']); ?></a></h2>
										<ul>
                                            <li><?php echo htmlentities($row['description3']); ?></li>
                                            
                                        </ul>
										<a href="our-quality.php">Continue Reading...</a>
									</div>							
								</div>							
							</div>							
						</div>							
					</div>		
                    
                    
					<div class="col-md-3 col-sm-6">
						<div class="service2-inner">
							<div class="media">
								<div class="media-left">
									<div class="service2-icon">
										<img src="img/icon/scope.png" alt="scope"/>
									</div>					
								</div>					
								<div class="media-body">				
									<div class="service2-details">						
										<h2><a href="scope-and-demand.php"><?php echo htmlentities($row['head6']); ?></a></h2>
										<ul>
                                            <li><?php echo htmlentities($row['description6']); ?></li>
                                            
                                        </ul>
										<a href="scope-and-demand.php">Continue Reading...</a>
									</div>							
								</div>							
							</div>							
						</div>							
					</div>																									
			<?php } ?>
				</div>							
			</div>
		</div>		
	</div>		
	<!-- Service End -->
	
		<div class=" pt-50 pb-50">
		<div class="container">				
			        <?php 
                   $query = mysqli_query($conn,"select * from home");
                   while($row = mysqli_fetch_array($query)){
                   ?>			
			<div class="row">
			    <div class="col-md-6">
			        <div class="sec-title1">
			        	<div class="font">
							<img src="img/hightlight.gif" class="img-responsive" alt="highlight" />
							<?php echo htmlspecialchars_decode($row['high']); ?>
			        	</div>
					</div>
			    </div>
			    <div class="col-md-6">
			        <div class="sec-title1">
							<img src="img/live.gif" class="img-responsive" alt="live" />
							<marquee direction="up" scrollamount="5" height="279px">
							<?php echo htmlspecialchars_decode($row['live']); ?>
							</marquee>
						</div>
			        
			    </div>
			</div>
			<?php } ?>
	    </div>
	    </div>
	
	<div class=" pt-50 bg-lb">
		<div class="container">				
			<div class="row">
				<div class="col-md-4">
					<div class="testimonial-text">
						<span class="tst-sbtitle">What's say about our Student</span>	
						<div class="sec-title">
							<h2>Student Review</h2>
						</div>	
<!--						<p>This college is really the no.1 fire training in india.-->
<!--Every staffs and commanders are well trained and fulfilled by the knowledge of fire and safety from womb to tomb.-->
<!--The campus has fully training and study environment. </p>-->
<!--						<a href="#">See All</a>-->
						
					</div>
				</div>
				<div class="col-md-8 no-padding">
					<div class="testimonial owl-carousel owl-theme">
				<?php 
                   $query = mysqli_query($conn,"select * from testimonial");
                   while($row = mysqli_fetch_array($query)){
                   ?>
						<div class="item single-testimonial2">							
							<p><?php echo htmlspecialchars_decode($row['description']); ?></p>
							<div class="testimonial2">
								<div class="inner">
									<div class="client-info">
										<h2><?php echo htmlspecialchars_decode($row['name']); ?></h2>
																		
									</div>	
								</div>							
								<div class="inner">
									<div class="testimonial2-client-img">
										<img src="admin/product/test/<?php echo htmlentities($row['image']); ?>" />
									</div>								
								</div>	
							</div>								
						</div>															
				<?php } ?>
					</div>		
				</div>
			</div>
		</div>
	</div>
	<!-- Testimonial Section End -->
	
		<div class="all-patner-sec">
		<div class="container">
			<div class="row">
			    <div class="col-md-3"></div>	
			    <div class="col-md-6 gover">
			        <h2> Our Government Certification</h2>
			    </div>	
			    <div class="col-md-3"></div>	
			        	
				</div>
				<div class="row">

				<div class="glogo owl-carousel owl-theme">
					<?php 
                   $query = mysqli_query($conn,"select * from certificate");
                   while($row = mysqli_fetch_array($query)){
                   ?>
				    <div class="item">
				    	<img src="admin/product/certificate/<?php echo htmlentities($row['image']); ?>" alt="client23"/>
				    </div>
				    <?php } ?>
				</div>
			</div>
		</div>
	</div> 
	
	 <div class="all-patner-sec">
		<div class="container">
			<div class="row">	
			        	<h2> Our Students are working with following MNC Companies</h2>
				<div class="mnc owl-carousel owl-theme">
					<?php 
                   $query = mysqli_query($conn,"select * from company");
                   while($row = mysqli_fetch_array($query)){
                   ?>
					<div class="item">
						<img src="admin/product/home/company/<?php echo htmlentities($row['image']); ?>" alt="client01"/>
					</div>
			<?php } ?>					
				</div>
			</div>
		</div>
	</div>

<div class="about-sec pt-50 pb-50">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="about-desc">
												<div class="sec-title">
							<h1 style="color:#ed3237">MSBTE (APPROVED)</h1>

<p>Advance Diploma in Industrial Safety (ADIS)
ADIS is created to develop professionals who show not just strong analytical abilities but also great interpersonal skills. The trainees of the Advance Diploma in Industrial Safety – ADIS along with the business imbibe in them a sense of ownership towards society at large. Curriculum through this course provides insights for handling Safety, Health & Environment in industries and in turn, assists in developing a safe work culture in organisations and enterprises.</p>

<p>Furthermore, the Advance Diploma in Industrial Safety– ADIS is extremely suitable with MSBTE Standards. It has actually been our continuous endeavour to supply the best possible study product for the trainees. This course gives them the skills and helps to fulfil their health and safety responsibilities in any country. Moreover, it is suitable for those starting their career in health and safety. Did you know upon successful completion of your Advanced Diploma in Industrial Safety (MSBTE)</p>


						</div>	
											</div>	
				</div>	
				
                
                
                
                
               
			</div>
		</div>		
	</div>	


	
<?php include('footer.php'); ?>