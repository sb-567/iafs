<?php
  session_start();
  include("config.php");
  if(strlen($_SESSION['alogin'])==0)
  {
    header('location:adminlogin.php');
  }
  else{
    if(isset($_POST['form1']))
    {

      $heading = $_POST['heading'];
      trim($heading);
      $description = $_POST['description'];
      $productimage1 = $_FILES["headimg"]["name"];
      $dir = "home/$heading";
      mkdir($dir);
      move_uploaded_file($_FILES["headimg"]["tmp_name"], "home/$heading/".$_FILES["headimg"]["name"]);
      $sql = mysqli_query($conn,"insert into home (heading,description,headimg) values('$heading','$description','$productimage1')");
      echo "<script type='text/javascript'>alert('Product Successfully added');</script>";
    }
    
  }
?>

  <?php include("admin.php"); ?>



<!--   <section class="content">

    
  
      <div class="box box-info">
                <div class="box-body">
                  <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                          <label for="" class="col-sm-2 control-label">Images</label>
                          <div class="col-sm-6" style="padding-top:6px;">
                              <input type="file" name="headimg">
                          </div>
                      </div>

                      <div class="form-group">
                    <label for="" class="col-sm-2 control-label">heading </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="heading">
                    </div>
                  </div>

                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-6">
                          <textarea class="form-control" name="description" style="height:140px;"></textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label"></label>
                        <div class="col-sm-6">
                          <button type="submit" class="btn btn-success pull-left" name="form1">Update</button>
                        </div>
                      </div>

                  </form>
                </div>
      </div>

  </section>     -->    


  <section class="content">
      <div class="">
        <h1>pages</h1>
    </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-info">
        <div class="box-body table-responsive">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th width="20">SL</th>
                <th width="100">Heading</th>              
                <th width="100">Status</th>              
                <th width="50">Action</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                  <td>1</td>
                  <td>Home</td>
                  <td>Active</td>
                  <td>                    
                   <a href="home-page.php" class="btn btn-warning btn-xs">Edit</a>
                  
                  </td>
                </tr>
              
                <tr>
                  <td>2</td>
                  <td>About us</td>
                  <td>Active</td>
                  <td>                    
                   <a href="aboutus.php" class="btn btn-warning btn-xs">Edit</a>
                  
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Director Message</td>
                  <td>Active</td>
                  <td>                    
                   <a href="director.php" class="btn btn-warning btn-xs">Edit</a>
                  
                  </td>
                </tr>

                <tr>
                  <td>4</td>
                  <td>Course</td>
                  <td>Active</td>
                  <td>                    
                   <a href="course.php" class="btn btn-warning btn-xs">Edit</a>
                  
                  </td>
                </tr>

                <tr>
                  <td>5</td>
                  <td>Quality</td>
                  <td>Active</td>
                  <td>                    
                   <a href="quality.php" class="btn btn-warning btn-xs">Edit</a>
                  
                  </td>
                </tr>

                <tr>
                  <td>6</td>
                  <td>Placement</td>
                  <td>Active</td>
                  <td>                    
                   <a href="placement.php" class="btn btn-warning btn-xs">Edit</a>
                  
                  </td>
                </tr>

                <tr>
                  <td>6</td>
                  <td>Gallery</td>
                  <td>Active</td>
                  <td>                    
                   <a href="gallery.php" class="btn btn-warning btn-xs">Edit</a>
                  
                  </td>
                </tr>          
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


</section>
    





<!-- <script>
  function show(){
    document.getElementById('category').style.display = "block";
  }
</script> -->

<?php include('footer.php'); ?>
















