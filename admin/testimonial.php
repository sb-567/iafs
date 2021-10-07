<?php
  session_start();
  include("config.php");
  if(strlen($_SESSION['alogin'])==0)
  {
    header('location:adminlogin.php');
  }
  else{
    if(isset($_POST['submit']))
    {

      $name = $_POST['name'];
      $image = $_FILES['image'];
      $description = $_POST['description'];

      $size=$_FILES['image']['size'];
        $temp=$_FILES['image']['tmp_name'];
        $type=$_FILES['image']['type'];
        $image=$_FILES['image']['name'];

        // unlink("image/$old_image");
        move_uploaded_file($temp, "product/test/".$_FILES["image"]["name"]);

      $sql = mysqli_query($conn,"insert into testimonial(name,image,description) values('$name','$image','$description')");
      echo "<script type='text/javascript'>alert('Successfully added');</script>";
    }
     if(isset($_GET['del'])) {
      $id=$_GET['id'];
      mysqli_query($conn,"delete from testimonial where id='".$_GET['id']."'");
      $_SESSION['delmsg'] = "deleted ||";
      echo "<script type='text/javascript'>alert('Product Successfully Deleted');</script>";
    }
    
  }
?>

  <?php include("admin.php"); ?>



  <section class="content">
     <div class="">
        <h1>Testimonial</h1>
    </div>
    <div class="box box-info">
      <div class="box-body">
        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                

          <div class="form-group">
            <label for="" class="col-sm-2 control-label">New Photo</label>
              <div class="col-sm-6" style="padding-top:6px;">
                  <input type="file" name="image">
                          
              </div>
          </div>    

          <div class="form-group">
              <label for="" class="col-sm-2 control-label">Name </label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name">
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
                  <button type="submit" class="btn btn-success pull-left" name="submit">Submit</button>
               </div>
          </div>                                      
                      

        </form>     
      </div>     
    </div>

  </section>        


  <section class="content">
     
  <div class="row">
    <div class="col-md-12">
      <div class="box box-info">
        <div class="box-body table-responsive">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th width="50">SL</th>
                <th width="80">Name</th>
                <th width="80">Designation</th>
                <th width="170">Description</th>
                <th width="100">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $query = mysqli_query($conn,"select * from testimonial");
                $cnt = 1;
                while($row = mysqli_fetch_array($query))
                {
                 ?>
                <tr>
                  <td><?php echo htmlentities($cnt); ?></td>
                  <td><?php echo htmlentities($row['name']); ?></td>
                  <td><img src="product/test/<?php echo htmlentities($row['image']); ?>" class="existing-photo" style="height:120px;"></td>
                  <td><?php echo htmlentities($row['description']); ?></td>
                  <td>                    
                     <a href="testimonial.php?id=<?php echo $row['id'] ?>&del=delete" onClick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-xs">Delete</a>
                  </td>
                </tr>
              <?php $cnt = $cnt+1; 
                }?>          
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
















