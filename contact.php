<?php include('header.php');

require'action.php';
 
?>
<div class="pagehding-sec">
		<div class="pagehding-overlay"></div>		
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="page-heading">
						<h1>Contact Us</h1>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="">Contact Us</a></li>
						</ul>						
					</div>					
				</div>				
			</div>
		</div>
	</div>
	<!-- Page Heading Section End -->	

<?php 
   $query = mysqli_query($conn,"select * from settings");
   while($row = mysqli_fetch_array($query)){
   ?>
    <div class="map">
        <?php echo htmlspecialchars_decode($row['map']); ?>
    </div>
	<!-- Contact Page Section Start -->
	<div class="contact-page-sec pt-50 pb-50">
		<div class="container">
			<div class="row">				
				<div class="col-md-8">
					<div class="contact-field">
						<h2>Write Your Message</h2>
						<form method="post" action="action.php">
						<div class="col-md-12 col-sm-6 col-xs-12 message-input">
							<div class="single-input-field">
								<input placeholder="Name" name="name" type="text" required>
							</div>
						</div>						
												
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="single-input-field">
								<input placeholder="Phone" name="phone" type="text" required>
							</div>
						</div>						
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="single-input-field">
								<input placeholder="Your E-mail" name="email" type="email" required>
							</div>
						</div>					
						<div class="col-md-12 message-input">
							<div class="single-input-field">
								<textarea placeholder="Message" name="msg" required></textarea>
							</div>
						</div>																				
						<div class="single-input-fieldsbtn">
							<input value="send now" name="submit" type="submit">
						</div>	
					    </form>
					</div>				
				</div>
				<div class="col-md-4">
					<div class="contact-info">
						<div class="contact-info-item">
							<div class="contact-info-text">
								<h2><i class="fa fa-phone"></i> phone</h2>
								<span><?php echo htmlspecialchars_decode($row['phone']); ?>  </span> 
								<!--<span>+91 8454957309</span>-->
							</div>
						</div>						
					</div>						
					<div class="contact-info">
						<div class="contact-info-item">
							<div class="contact-info-text">
								<h2><i class="fa fa-envelope"></i> e-mail</h2>
								
								<span><?php echo htmlspecialchars_decode($row['email']); ?></span>
							</div>
						</div>						
					</div>					
					<div class="contact-info">
						<div class="contact-info-item">
							<div class="contact-info-text">
								<h2><i class="fa fa-map-marker"></i> address</h2>
								<span><?php echo htmlspecialchars_decode($row['address']); ?></span> 
								
							</div>
						</div>						
					</div>
				</div>				
			</div>
		</div>
	</div>
<?php } ?> 
	<!-- Contact Page Section End -->	

<?php include('footer.php') ?>