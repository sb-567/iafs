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
      $id = intval($_GET['id']);
      $catid = $_POST['catid'];
      $pname = $_POST['pname'];
      $pimage = $_FILES['pimage']['name'];
      $description = $_POST['description'];


      if(isset($_FILES['pimage']['name']) && ($_FILES['pimage']['name'] !=""))
      {

        $size=$_FILES['pimage']['size'];
        $temp=$_FILES['pimage']['tmp_name'];
        $type=$_FILES['pimage']['type'];
        $image=$_FILES['pimage']['name'];

      move_uploaded_file($temp, "product/products/".$_FILES["pimage"]["name"]);
      $sql = mysqli_query($conn,"update product set pimage='$pimage',catid='$catid', pname='$pname',description='$description' where id ='$id'");
      echo "<script>alert('successfully added');</script>"; 
      
      }
      else{
        $id = intval($_GET['id']);
        $sql = mysqli_query($conn,"update product set 
          catid='$catid', 
          pname='$pname',  
          description='$description' where id ='$id' ");
        echo "<script>alert('successfully updated');</script>";
      }
    }


    
}
?>


  <?php include("admin.php"); ?>


  <section class="content-header">
  <div class="content-header-left">
    <h1>Edit Products</h1>
  </div>
  <div class="content-header-right">
    <a href="view-products.php" class="btn btn-primary btn-sm">view products</a>
  </div>
</section>
   <section class="content">


   <div class="box box-info">
      <div class="box-body">


   <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
   
     <div class="form-group">
              <label for="" class="col-sm-2 control-label">Select Category <span>*</span></label>
              <div class="col-sm-6">
                <select name="catid" class="form-control">
                    <option>Select category</option>
                  <?php 
                    $id = intval($_GET['id']);
        $query = mysqli_query($conn,"select * from category");
        while($row = mysqli_fetch_array($query)){
        
       ?>
                    <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['catname']); ?></option>
                    <?php } ?>
                </select>
              </div>
                
            </div>


   <?php 
              $id = intval($_GET['id']);
              $query = mysqli_query($conn,"select * from product where id = '$id'");
              while($row = mysqli_fetch_array($query))
              { ?> 


         
          <div class="form-group">
              <label for="" class="col-sm-2 control-label">Name</label>
              <div class="col-sm-6">
                <input type="text" autocomplete="off" class="form-control" name="pname" value="<?php echo htmlentities($row['pname']); ?>">
              </div>
            </div>
           
           
           
           <div class="form-group">
          <label for="" class="col-sm-2 control-label">Existing Photo</label>
          <div class="col-sm-6" style="padding-top:6px;">
            <img src="product/products/<?php echo htmlentities($row['pimage']); ?>" class="existing-photo" style="height:80px;">
          </div>
        </div>
        <div class="form-group">
          <label for="" class="col-sm-2 control-label">New Photo <span>*</span></label>
          <div class="col-sm-6" style="padding-top:6px;">
            <input type="file" name="pimage">(Only jpg, jpeg, gif and png are allowed)
            <input type="hidden" name="old_image" value="<?php echo $row['pimage'] ?>">
          </div>
        </div>

            <div class="form-group">
          <label for="" class="col-sm-2 control-label">Description</label>
          <div class="col-sm-9">
            <textarea class="form-control" name="description" id="editor2"><?php echo htmlspecialchars_decode($row['description']); ?></textarea>
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