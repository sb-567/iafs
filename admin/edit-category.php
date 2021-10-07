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
      $id=$_GET['id'];
      $catname = $_POST['catname'];
      $title = $_POST['title'];
      $description = $_POST['description'];


    if(isset($_FILES['img']['name']) && ($_FILES['img']['name'] !="") && ($_FILES['banner']['name']) && ($_FILES['banner']['name'] !=""))
      {

        $size=$_FILES['img']['size'];
        $temp=$_FILES['img']['tmp_name'];
        $type=$_FILES['img']['type'];
        $img=$_FILES['img']['name'];


        $size=$_FILES['banner']['size'];
        $temp1=$_FILES['banner']['tmp_name'];
        $type=$_FILES['banner']['type'];
        $banner=$_FILES['banner']['name'];

      
      move_uploaded_file($temp, "product/home/".$_FILES["img"]["name"]);
      move_uploaded_file($temp1, "product/banner/".$_FILES["banner"]["name"]);
      $sql = mysqli_query($conn,"update category set img='$img',banner='$banner',catname='$catname',title='$title',description='$description' where id = '$id'"); 
      echo "<script>alert('successfully updated With images');window.location='category.php';</script>"; 
      
      }

      else{
        $sql =mysqli_query($conn,"update category set catname='$catname',title='$title',description='$description' where id='$id'");
        echo "<script>alert('successfully updated');window.location='category.php';</script>";

      }

        
  }
}
?>


  <?php include("admin.php"); ?>

   <section class="content">
  <div class="">
    <h1>Edit Category</h1>
  </div>

   <div class="box box-info">
      <div class="box-body">


   <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
          <?php 
                $id = intval($_GET['id']);
                $query = mysqli_query($conn,"select * from category  where id = '$id'");
                
                while($row = mysqli_fetch_array($query))
                {
                 ?>

          <div class="form-group">
                          <label for="" class="col-sm-2 control-label">Existing Category Photo</label>
                          <div class="col-sm-6" style="padding-top:6px;">
                              <img src="product/home/<?php echo htmlentities($row['img']); ?>" style="height: 50px;">
                          </div>
                      </div>
                  <div class="form-group">
                          <label for="" class="col-sm-2 control-label">New Photo</label>
                          <div class="col-sm-6" style="padding-top:6px;">
                              <input type="file" name="img">
                          </div>
                      </div>



          <div class="form-group">
                          <label for="" class="col-sm-2 control-label">Existing Banner Photo</label>
                          <div class="col-sm-6" style="padding-top:6px;">
                              <img src="product/banner/<?php echo htmlentities($row['banner']); ?>" style="height: 50px;">
                          </div>
                      </div>
                  <div class="form-group">
                          <label for="" class="col-sm-2 control-label">New Photo</label>
                          <div class="col-sm-6" style="padding-top:6px;">
                              <input type="file" name="banner">
                          </div>
                      </div>
        
          <div class="form-group">
              <label for="" class="col-sm-2 control-label">Name <span>*</span></label>
              <div class="col-sm-6">
                <input type="text" autocomplete="off" class="form-control" name="catname" value="<?php echo $row['catname'] ?>" required>
              </div>
            </div>

                        <div class="form-group">
              <label for="" class="col-sm-2 control-label">Category Title <span>*</span></label>
              <div class="col-sm-6">
                <input type="text" autocomplete="off" class="form-control" name="title" value="<?php echo $row['title'] ?>" required>
              </div>
            </div>


            <div class="form-group">
            <label for="" class="col-sm-2 control-label">Description</label>
            <div class="col-sm-6">
             
              <textarea class="form-control" name="description" id="editor1"><?php echo $row['description'] ?></textarea>
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

  
  </div>
    </div>
      

</section>

  


 

  <?php include("footer.php"); ?>