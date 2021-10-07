<?php include('header.php') ?>
<div class="pagehding-sec">
		<div class="pagehding-overlay"></div>		
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="page-heading">
						<h1>About Us</h1>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="">About Us</a></li>
						</ul>						
					</div>					
				</div>				
			</div>
		</div>
	</div>
	<!-- Page Heading Section End -->
	<?php 
   $query = mysqli_query($conn,"select * from about");
   while($row = mysqli_fetch_array($query)){
   ?>	
	<div class="about-sec pt-50 ">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="about-desc">
						<div class="sec-title">
							<h1><?php echo htmlspecialchars_decode($row['head']); ?></h1>
                            <?php echo htmlspecialchars_decode($row['aboutpara']); ?>
						</div>	
					</div>	
				</div>	
				<div class="col-md-4">
					<div class="about-us-img">
						<img src="admin/product/about/<?php echo htmlentities($row['image']); ?>" alt=""/>
					</div>
				</div>               
			</div>
		</div>		
	</div>	
	
		<div class="about-sec pt-100 pb-100">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="about-desc">
						<div class="sec-title">
							<h1><span><?php echo htmlspecialchars_decode($row['head1']); ?></span></h1>
							<?php echo htmlspecialchars_decode($row['aboutpara1']); ?>
						</div>	
					</div>	
				</div>	
				<div class="col-md-4">
					<div class="about-us-img">
						<img src="admin/product/about/<?php echo htmlentities($row['image1']); ?>" alt="about"/>
					</div>
				</div>	
			</div>
		</div>		
	</div>
<?php } ?>

<?php include('footer.php') ?>