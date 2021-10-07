<?php
session_start();
include( 'config.php');
if (strlen($_SESSION['alogin'])==0)
{
    header('location:adminlogin.php');
}
else{
    if (isset($_POST['form1'])) {
      $old_image = $_POST["old_image"];
      $head = $_POST["head"];
      $descp = $_POST["descp"];
      $img = $_FILES["img"]["name"];

if(isset($_FILES['img']['name']) && ($_FILES['img']['name'] !=""))
      {

        $size=$_FILES['img']['size'];
        $temp=$_FILES['img']['tmp_name'];
        $type=$_FILES['img']['type'];
        $img=$_FILES['img']['name'];

        unlink("enquiry/$img");
      
        move_uploaded_file($temp, "enquiry/".$_FILES["img"]["name"]);
      $sql = mysqli_query($conn,"update enquiry set img = '$img' where id = 1"); 
      echo "<script>alert('successfully updated With images');</script>"; 
      
      }
      else{

      $sql = mysqli_query($conn,"update enquiry set head = '$head',descp = '$descp' where id=1");
      $_SESSION['msg'] = "Logo updated ||";
      echo "<script> alert('sucessfully updated'); window.location='edit-enquiry.php';</script>";
    }
  }
}
  ?>



  <?php 

  include("admin.php");

   ?>
  <div class="content">
    <div class="text-center">
        <h1>Enquiry</h1>
    </div>
    <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">

          <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">


                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                        <?php $query = mysqli_query($conn,"select * from enquiry");
                            while($row = mysqli_fetch_array($query))
                            {
                             ?>
                    <div class="box box-info">
                <div class="box-body">
                  <div class="form-group">
                          <label for="" class="col-sm-2 control-label">Existing Photo</label>
                          <div class="col-sm-6" style="padding-top:6px;">
                              <img src="enquiry/<?php echo htmlentities($row['img']); ?>" class="existing-photo" style="height:80px;">
                          </div>
                      </div>
                  <div class="form-group">
                          <label for="" class="col-sm-2 control-label">New Photo</label>
                          <div class="col-sm-6" style="padding-top:6px;">
                              <input type="file" name="img">
                              <input type="hidden" name="old_image" value="<?php echo $row['img'] ?>">
                              <div class="red"><span>"Kindly Upload Logo in 750px X 375px"</span></div>

                          </div>
                      </div>
                      
                              <div class="form-group">
            <label for="" class="col-sm-2 control-label">Heading</label>
            <div class="col-sm-6">
             
              <textarea class="form-control" name="head" id="editor2"><?php echo $row['head'] ?></textarea>
            </div>
          </div>
            
                              <div class="form-group">
            <label for="" class="col-sm-2 control-label">Description</label>
            <div class="col-sm-6">
             
              <textarea class="form-control" name="descp" id="editor1"><?php echo $row['descp'] ?></textarea>
            </div>
          </div>
                      <div class="form-group">
                    <label for="" class="col-sm-2 control-label"></label>
                    <div class="col-sm-6">
                      <button type="submit" class="btn btn-success pull-left" name="form1">Update</button>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>
              </form>
          </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
  <?php include("footer.php"); ?>

