<?php
ini_set('display_errors', 1);
session_start();
include('config.php');
if (strlen($_SESSION['alogin'])==0)
{
    header('location:adminlogin.php');
}
else{
     if (isset($_POST['form1'])) {
      // $id = intval($_GET['id']);
      $descp = $_POST['descp'];
      $image = $_FILES['image']['name'];
      $image1 = $_FILES['image1']['name'];
      $old_image = $_POST["old_image"];

      if(isset($_FILES['image']['name']) && ($_FILES['image']['name'] !="") && ($_FILES['image1']['name']) && ($_FILES['image1']['name'] !=""))
      {

        $size=$_FILES['image']['size'];
        $temp=$_FILES['image']['tmp_name'];
        $type=$_FILES['image']['type'];
        $image=$_FILES['image']['name'];

        $size=$_FILES['image1']['size'];
        $temp1=$_FILES['image1']['tmp_name'];
        $type=$_FILES['image1']['type'];
        $image1=$_FILES['image1']['name'];
      
      move_uploaded_file($temp, "product/course/".$_FILES["image"]["name"]);
      move_uploaded_file($temp1, "product/course/".$_FILES["image1"]["name"]);
      $sql = mysqli_query($conn,"update course set descp = '$descp' ,image = '$image' ,image1 = '$image1' where id=1"); 
      echo "<script>alert('successfully updated With images');</script>"; 
      
      }
      else{
        
        $sql = mysqli_query($conn,"update course set descp = '$descp' where id=1");
        echo "<script>alert('successfully updated');</script>";
      }
    }
}
?>


  <?php include("admin.php"); ?>

   <section class="content">
  <div class="">
    <h1>Course</h1>
  </div>

   <div class="box box-info">
      <div class="box-body">
  <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    <?php $query=mysqli_query($conn, "select * from course"); while($row=mysqli_fetch_array($query)) { ?>
   
        <div class="form-group">
          <label for="" class="col-sm-2 control-label">Paragraph</label>
          <div class="col-sm-9">
            <textarea class="form-control" name="descp" id="editor1">
              <?php echo htmlentities($row[ 'descp']); ?>
            </textarea>
          </div>
        </div>
        <div class="form-group">
          <label for="" class="col-sm-2 control-label">Existing Photo</label>
          <div class="col-sm-6" style="padding-top:6px;">
            <img src="product/course/<?php echo htmlentities($row['image']); ?>" class="existing-photo" style="height:80px;">
          </div>
        </div>
        <div class="form-group">
          <label for="" class="col-sm-2 control-label">New Photo</label>
          <div class="col-sm-6" style="padding-top:6px;">
            <input type="file" name="image">
            <input type="hidden" name="old_image" value="<?php echo $row['image'] ?>">
          </div>
        </div>
        <div class="form-group">
          <label for="" class="col-sm-2 control-label">Existing Photo</label>
          <div class="col-sm-6" style="padding-top:6px;">
            <img src="product/course/<?php echo htmlentities($row['image1']); ?>" class="existing-photo" style="height:80px;">
          </div>
        </div>
        <div class="form-group">
          <label for="" class="col-sm-2 control-label">New Photo</label>
          <div class="col-sm-6" style="padding-top:6px;">
            <input type="file" name="image1">
            <input type="hidden" name="old_image" value="<?php echo $row['image1'] ?>">
          </div>
        </div>
        <div class="form-group">
          <label for="" class="col-sm-2 control-label"></label>
          <div class="col-sm-6">
            <button type="submit" class="btn btn-success pull-left" name="form1">Update</button>
          </div>
        </div>
      
    <?php } ?>
  </form>
</section>

  </div>
    </div>
 

  <?php include("footer.php"); ?>