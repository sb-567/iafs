<?php include('header.php') ?>
<!-- Page Heading Section Start -->	
	<div class="pagehding-sec">
		<div class="pagehding-overlay"></div>		
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="page-heading">
						<h1>Our Placement</h1>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="">Our Placement</a></li>
						</ul>						
					</div>					
				</div>				
			</div>
		</div>
	</div>
	<!-- Page Heading Section End -->
		
	<!-- Service Details Section Start -->	
	<div class="about-us-sec pt-50 pb-50">
	<?php 
   $query = mysqli_query($conn,"select * from placement");
   while($row = mysqli_fetch_array($query)){
   ?>				
		<div class="container">						
			<div class="row">			
				<div class="col-md-4 col-sm-6">
					<div class="abt-img">
						<img src="img/service_details_1.jpg" alt=""/>
					</div>
				</div>				
				<div class="col-md-4 col-sm-6">
					<div class="abt-lft top">
						<h2><?php echo htmlspecialchars_decode($row['head']); ?></h2>
						<?php echo htmlspecialchars_decode($row['descp']); ?>						
					</div>
				</div>
                <div class="col-md-4">
                    <div class="abt-lft adj">
					<?php echo htmlspecialchars_decode($row['descp1']); ?>
                    </div>
                </div>
                
                <div class="col-md-6">
					<div class="abt-lft top">
						<h2><?php echo htmlspecialchars_decode($row['head1']); ?></h2>
						<?php echo htmlspecialchars_decode($row['descp2']); ?>						
					</div>
				</div>
                <div class="col-md-6">
					<div class="abt-lft adj">
					<?php echo htmlspecialchars_decode($row['descp3']); ?>						
					</div>
				</div>
                
                
               
                
                
                
			</div>	
		</div>
		<?php } ?>	
	</div>			
	<!-- Service Details Section End -->
	<!-- Service Start -->	
		<div class="all-patner-sec">
		<div class="container">
			<div class="row">	
			        	<h1> Our Students are working with following MNC Companies</h1>
			        	<?php 
   $query = mysqli_query($conn,"select * from company");
   while($row = mysqli_fetch_array($query)){
   ?>	
				<div class="all-patner">
					<div class="single-patner">
						<img src="admin/product/home/company/<?php echo htmlentities($row['image']); ?>" alt=""/>
					</div>					
				</div>
				<?php } ?>
			</div>
		</div>
	</div>

<?php include('footer.php') ?>