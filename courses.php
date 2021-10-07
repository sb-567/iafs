<?php include('header.php') ?>
<!-- Page Heading Section Start -->	
	<div class="pagehding-sec">
		<div class="pagehding-overlay"></div>		
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="page-heading">
						<h1>COURSES</h1>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="">COURSES</a></li>
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
   $query = mysqli_query($conn,"select * from course");
   while($row = mysqli_fetch_array($query)){
   ?>				
		<div class="container">						
			<div class="row">
			    <div class="col-md-12 padtop20 brownbold">

      <div class="restable">

<div class="whitebg">
            <div class="row books agileinfo-gallery-row">


<?php echo htmlspecialchars_decode($row['descp']); ?>

</div>
          </div>
     

     <div class="clearfix">&nbsp;</div>



     </div>


     




     </div>
     
     
     <div class="about-sec pt-50 pb-50">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="about-desc">
												<div class="sec-title">
							<h1 style="color:#ed3237">Best Safety Institute Realistic Placement Report</h1>

<p>Indian Academy Of Fire & Safety Nashik, best safety institute offers 100% placement assistance to its students helping them secure a great safety professional career start in their professional life. The placement records of the safety institute speak volumes about it. The major highlights being the recruitment drives at IAFS Fire And Safety College at both national and international level. The name that the institute has etched out for its well-trained safety professional workforce employed around the different corners of the globe has been the reason for its widespread success safety officer course in lucknow, safety engineering course in lucknow, safety officer course in India, safety engineering course in lucknow, fire safety course in lucknow, safety management course in India.

Safety officer course |safety officer course in lucknow, safety engineering course in lucknow</p>


						</div>	
											</div>	
				</div>	
				
                
                
                
                
               
			</div>
		</div>		
	</div>	

     
     
     <div class="coursest" >
         <div class="col-md-6">
         <img src="admin/product/course/<?php echo htmlentities($row['image']); ?>" class="img-responsive">
     </div>
     <div class="col-md-6">
         <img src="admin/product/course/<?php echo htmlentities($row['image1']); ?>" class="img-responsive">
     </div>
     </div>
			</div>
		</div>
    <?php } ?>	
	</div>
	
	<div class="about-sec pb-50" >
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="about-desc" style="padding-bottom:-10rem">
												<div class="sec-title">
							<h1 style="color:#ed3237">Regular Courses</h1>

<p><i class="fa fa-hand-o-right" aria-hidden="true"></i>
Directorate of Technical Education Recognized Approved By MSBTE Courses Commence from every Academic Session i.e. July of every year.</p>

<p><i class="fa fa-hand-o-right" aria-hidden="true"></i>
Other two courses One Year Diploma in Fire Safety Engineering (DFSE) and Six Months Certificate course in Fire Safety Engineering commence every year in January and July.</p>

<p><i class="fa fa-hand-o-right" aria-hidden="true"></i>
Following Certificate, Diploma, Post Graduate, Govt. Recognized Courses are run by the Maharashtra State Board in the field of Fire Safety Engineering and Industrial Safety Management.</p>
						</div>	
											</div>	
				</div>	
				
                
                
                
                
               
			</div>
		</div>		
	</div>
	
	
	<!-- Service Details Section End -->
	<!-- Service Start -->	
		

<?php include('footer.php') ?>