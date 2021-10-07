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
      $catname = $_POST['catname'];
      $title = $_POST['title'];
      $description = $_POST['description'];

      $size=$_FILES['img']['size'];
      $temp=$_FILES['img']['tmp_name'];
      $type=$_FILES['img']['type'];
      $img=$_FILES['img']['name'];

      $size=$_FILES['banner']['size'];
      $temp1=$_FILES['banner']['tmp_name'];
      $type=$_FILES['banner']['type'];
      $banner=$_FILES['banner']['name'];

        // unlink("image/$old_image");
        move_uploaded_file($temp, "product/home/".$_FILES["img"]["name"]);
        move_uploaded_file($temp1, "product/banner/".$_FILES["banner"]["name"]);
        
        $sql = mysqli_query($conn,"insert into category(catname,title,description,img,banner) values('$catname','$title','$description','$img','$banner')");
        echo "<script>alert('successfully updated');</script>";
      }



  }
if(isset($_GET['del'])) {
$id=$_GET['id'];
$sql2= mysqli_query($conn,"delete from category where id='".$_GET['id']."'");
$_SESSION['delmsg'] = "deleted ||";
echo "<script>alert('Successfully Deleted');
      window.location='category.php';</script>";
}
?>


  <?php include("admin.php"); ?>

   <section class="content">
  <div class="">
    <h1>Add Category</h1>
  </div>

   <div class="box box-info">
      <div class="box-body">


   <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">

           <div class="form-group">
              <label for="" class="col-sm-2 control-label">New Photo</label>
              <div class="col-sm-6" style="padding-top:6px;">
                  <input type="file" name="img">
              <div class="red"><span>"Kindly Upload Image in 210px X 210px"</span></div>
              </div>
          </div>


           <div class="form-group">
              <label for="" class="col-sm-2 control-label">Category Banner</label>
              <div class="col-sm-6" style="padding-top:6px;">
                  <input type="file" name="banner">
              <div class="red"><span>"Kindly Upload Image in 950px X 400px"</span></div>
              </div>
          </div>
        
          <div class="form-group">
              <label for="" class="col-sm-2 control-label">Category Name <span>*</span></label>
              <div class="col-sm-6">
                <input type="text" autocomplete="off" class="form-control" name="catname" value="" required>
              </div>
            </div>

            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Category Title <span>*</span></label>
              <div class="col-sm-6">
                <input type="text" autocomplete="off" class="form-control" name="title" value="" required>
              </div>
            </div>

                  <div class="form-group">
            <label for="" class="col-sm-2 control-label">Description</label>
            <div class="col-sm-6">
             
              <textarea class="form-control" name="description" id="editor1"></textarea>
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
                <th width="80">Category Name</th>
                <th width="80">Image</th>
                <th width="50">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $query = mysqli_query($conn,"select * from category");
                $cnt = 1;
                while($row = mysqli_fetch_array($query))
                {
                 ?>
                <tr>
                  <td><?php echo htmlentities($cnt); ?></td>
                  <td><?php echo htmlentities($row['catname']); ?></td>
                  <td><img src="product/home/<?php echo htmlentities($row['img']); ?>"></td>
                  <td>                    
                   <a href="edit-category.php?id=<?php echo $row['id'] ?>" class="btn btn-warning btn-xs">Edit</a>
                     <a href="category.php?id=<?php echo $row['id'] ?>&del=delete" onClick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-xs">Delete</a>
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
 

  <?php include("footer.php"); ?>