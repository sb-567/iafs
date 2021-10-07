<?php
ini_set('display_errors', 1);
session_start();
include('config.php');
if (strlen($_SESSION['alogin'])==0)
{
    header('location:adminlogin.php');
}
else{
  if (isset($_POST['submit'])) {
      $name = $_POST['name'];
      $designation = $_POST['designation'];
      $description = $_POST['description'];
      $id = intval($_GET['id']);
      $sql = mysqli_query($conn,"update testimonial set name='$name',designation='$designation',description='$description' where id='$id'");
      $_SESSION['msg'] = "Category updated ||";
      echo "<script>alert('successfully updated ');</script>";
    }
}
?>


  <?php include("admin.php"); ?>

  <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                       <?php 
              $id = intval($_GET['id']);
              $query = mysqli_query($conn,"select * from testimonial where id = '$id'");
              while($row = mysqli_fetch_array($query))
              { ?> 
                    <div class="box box-info">
                <div class="box-body">
                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Name </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="name" value="<?php echo htmlentities($row['name']); ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Designation </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="designation" value="<?php echo htmlentities($row['designation']); ?>">
                    </div>
                  </div>

                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-6">
                          <textarea class="form-control" name="description" style="height:140px;"><?php echo htmlentities($row['description']); ?></textarea>
                        </div>
                      </div>
                  
                      <div class="form-group">
                    <label for="" class="col-sm-2 control-label"></label>
                    <div class="col-sm-6">
                      <button type="submit" class="btn btn-success pull-left" name="submit">Update</button>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>
              </form>



  <?php include("footer.php"); ?>