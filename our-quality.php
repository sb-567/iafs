<?php include('header.php') ?>
<!-- Page Heading Section Start -->	
	<div class="pagehding-sec">
		<div class="pagehding-overlay"></div>		
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="page-heading">
						<h1>Our Qualities</h1>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="">Our Qualities</a></li>
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
   $query = mysqli_query($conn,"select * from quality");
   while($row = mysqli_fetch_array($query)){
   ?>				
		<div class="container quality">						
			<div class="row">			
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="abt-img">
						<img src="img/g4.jpg" alt=""/>
					</div>
				</div>				
				<div class="col-md-8 col-sm-6 col-xs-12">
					<div class="abt-lft">
						<h2><?php echo htmlspecialchars_decode($row['head']); ?></h2>
						<?php echo htmlspecialchars_decode($row['descp']); ?>						
					</div>
				</div>
                <div class="col-md-12 col-sm-6 col-xs-12">
                    <div class="abt-lft">
					<?php echo htmlspecialchars_decode($row['descp1']); ?>
                    </div>
                </div>
                
                <div class="col-md-12 col-sm-6 col-xs-12">
					<div class="abt-lft top">
						<h2><?php echo htmlspecialchars_decode($row['head1']); ?></h2>
						<?php echo htmlspecialchars_decode($row['descp2']); ?>						
					</div>
				</div>
                
                <div class="col-md-12 col-sm-6 col-xs-12">
					<div class="abt-lft top">
						<h2><?php echo htmlspecialchars_decode($row['head2']); ?></h2>
						<?php echo htmlspecialchars_decode($row['descp3']); ?>						
					</div>
				</div>
                
                <div class="col-md-12 col-sm-6 col-xs-12">
					<div class="abt-lft top">
						<h2><?php echo htmlspecialchars_decode($row['head3']); ?></h2>
						<?php echo htmlspecialchars_decode($row['descp4']); ?>						
					</div>
				</div>
                
                
			</div>	
		</div>
		<?php } ?>	
	</div>			
	<!-- Service Details Section End -->
	<!-- Service Start -->	
		

<?php include('footer.php') ?>