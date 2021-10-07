<?php include('header.php') ?>
<div class="pagehding-sec">
		<div class="pagehding-overlay"></div>		
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="page-heading">
						<h1>Director Message</h1>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="">Director Message</a></li>
						</ul>						
					</div>					
				</div>				
			</div>
		</div>
	</div>
	<!-- Page Heading Section End -->	
	<div class="about-sec pt-50 pb-50">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="about-desc">
						<?php 
   						$query = mysqli_query($conn,"select * from director");
   						while($row = mysqli_fetch_array($query)){
   						?>
						<div class="sec-title">
							<h1><?php echo htmlspecialchars_decode($row['head']); ?></h1>
							<?php echo htmlspecialchars_decode($row['msg']); ?>
						</div>	
						<?php } ?>
					</div>	
				</div>	
				
                
                
                
                
               
			</div>
		</div>		
	</div>	

<?php include('footer.php') ?>