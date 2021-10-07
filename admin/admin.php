<?php 
  // session_start();
  include("config.php");
 ?>

 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>IAFS INDIA</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/ionicons.min.css">
  <link rel="stylesheet" href="css/datepicker3.css">
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="css/select2.min.css">
  <link rel="stylesheet" href="css/dataTables.bootstrap.css">
  <link rel="stylesheet" href="css/jquery.fancybox.css">
  <link rel="stylesheet" href="css/AdminLTE.min.css">
  <link rel="stylesheet" href="css/_all-skins.min.css">
  <link rel="stylesheet" href="css/on-off-switch.css"/>
  <link rel="stylesheet" href="style.css">
</head>
<body>


  

<body class="hold-transition fixed skin-blue sidebar-mini">

  <div class="wrapper">

    <header class="main-header">
  <?php 
            $query = mysqli_query($conn,"select * from admin where id = '".$_SESSION['id']."'");
            while($row = mysqli_fetch_array($query)) {?>
      <a href="index.php" class="logo">

        <span class="logo-lg"> <?php 
            echo htmlentities($row['name']);
            }
           ?></span>
      </a>

      <nav class="navbar navbar-static-top">
        
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <span style="float:left;line-height:50px;color:#fff;padding-left:15px;font-size:18px;">Admin Panel</span>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              Mr. Admin
              </a>
              <ul class="dropdown-menu">
                <li class="user-footer">
                  <div>
                    <a href="adminprofile.php" class="btn btn-default btn-flat">Edit Profile</a>
                  </div>
                  <div>
                    <a href="logout.php" class="btn btn-default btn-flat">Log out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>

      </nav>
    </header>

      <aside class="main-sidebar">
        <section class="sidebar">

      	
   <ul class="sidebar-menu">
      <li>
        <a href="index.php">
          <i class="fa fa-tachometer" ></i> <span>Dashboard</span></a></li>
      <!-- <li><a href="home-page.php"><i class="fa fa-home"></i> <span>Home Page</span></a></li> -->

          <li class="treeview ">
            <a href="#">
              <i class="fa fa-podcast"></i>
              <span>Elements</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="slider.php"><i class="fa fa-circle-o"></i> Slider</a></li>
              <li><a href="testimonial.php"><i class="fa fa-circle-o"></i> Testimonial</a></li>
            </ul>
          </li>

        <li><a href="pages.php"><i class="fa fa-file-text"></i> <span>Pages</span></a></li>
        <!-- <li><a href="testimonial.php"><i class="fa fa-comments-o"></i> <span>Testimonial</span></a></li> -->
        
         <li><a href="company.php"><i class="fa fa-comments-o"></i> <span>Companies</span></a></li>
         <li><a href="gallery.php"><i class="fa fa-comments-o"></i> <span>Gallery</span></a></li>
         <li><a href="certificate.php"><i class="fa fa-comments-o"></i> <span>Certificate</span></a></li>
        <li><a href="setting.php"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
        
      </ul>  
      <!-- <p style ="margin-top:250px;padding:10px;color:white;">Developed By Cosmic Web solution</p> -->
 
  


     </section>
     </aside>    
<div class="content-wrapper">