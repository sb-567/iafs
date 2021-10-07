<?php include('header.php'); ?>
<div class="pagehding-sec">
		<div class="pagehding-overlay"></div>		
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="page-heading">
						<h1>Gallery</h1>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="">Gallery</a></li>
						</ul>						
					</div>					
				</div>				
			</div>
		</div>
	</div>
	<!-- Page Heading Section End -->	


<div class="project-sec pt-100 pb-70">
<div class="container">
<div class="row">
 <?php 
   $query = mysqli_query($conn,"select * from team");
   while($row = mysqli_fetch_array($query)){
   ?>
<div class="col-xs-6 col-sm-4 col-md-4">
<div class="item wow zoomIn" data-wow-duration="1000ms" data-wow-delay="300ms">
<div class="project-thumb">
<img src="admin/product/home/team/<?php echo htmlentities($row['image']); ?>" alt="" />
</div>
<div class="project-hoverlay">
<div class="project-text">
<a href="admin/product/home/team/<?php echo htmlentities($row['image']); ?>"><i class="fa fa-expand"></i></a>

</div>
</div>
</div>
</div>
<?php } ?>
</div>
</div>
</div>
<?php include('footer.php') ?>