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
      $id = intval($_GET['id']);
      $heading = addslashes($_POST['heading']);
      $description = addslashes($_POST['description']);
      $headimg = $_FILES['headimg']['name'];

      if(isset($_FILES['headimg']['name']) && ($_FILES['headimg']['name'] !=""))
      {

        $size=$_FILES['headimg']['size'];
        $temp=$_FILES['headimg']['tmp_name'];
        $type=$_FILES['headimg']['type'];
        $heading_name=$_FILES['headimg']['name'];

        unlink("home/$headimg");
      
      move_uploaded_file($temp, "home/".$_FILES["headimg"]["name"]);
      $sql = mysqli_query($conn,"update home set headimg = '$headimg' where id = '$id'"); 
      echo "<script>alert('successfully updated With images');</script>"; 
      
      }
      else{
        
        $sql = mysqli_query($conn,"update home set heading = '$heading',description='$description' where id = '$id'");
        echo "<script>alert('successfully updated');</script>";
      }
    }
}
?>


  <?php include("admin.php"); ?>

  <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                       <?php 
              $id = intval($_GET['id']);
              $query = mysqli_query($conn,"select * from home where id = '$id'");
              while($row = mysqli_fetch_array($query))
              { ?> 
                    <div class="box box-info">
                <div class="box-body">

                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">heading </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="heading" value="<?php echo nl2br($row['heading']); ?>">
                    </div>
                  </div>

                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-6">
                         
                          <textarea class="form-control" name="description" id="editor1"><?php echo nl2br($row['description']); ?></textarea>
                        </div>
                      </div>

                       <div class="form-group">
                          <label for="" class="col-sm-2 control-label">Existing Photo</label>
                          <div class="col-sm-6" style="padding-top:6px;">
                              <img src="home/<?php echo htmlentities($row['headimg']); ?>" style="height: 50px;">
                          </div>
                      </div>
                  <div class="form-group">
                          <label for="" class="col-sm-2 control-label">New Photo</label>
                          <div class="col-sm-6" style="padding-top:6px;">
                              <input type="file" name="headimg">
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