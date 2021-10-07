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
      $catid = $_POST['catid'];
      $pname = $_POST['pname'];
      
      $pimage = $_FILES['pimage']['name'];
      $description = $_POST['description'];

      // $old_image = $_POST["old_image"];

      if(isset($_FILES['pimage']['name']) && ($_FILES['pimage']['name'] !=""))
      {

        $size=$_FILES['pimage']['size'];
        $temp=$_FILES['pimage']['tmp_name'];
        $type=$_FILES['pimage']['type'];
        $image=$_FILES['pimage']['name'];

        // unlink("about/old_image");
      
      move_uploaded_file($temp, "product/products/".$_FILES["pimage"]["name"]);
      $sql = mysqli_query($conn,"insert into product(pimage,catid,pname,description) values('$pimage','$catid','$pname','$description')");
      echo "<script>alert('successfully added');</script>"; 
      
      }

    }


    if(isset($_GET['del'])) {
      $id=$_GET['id'];
      mysqli_query($conn,"delete from product where id='".$_GET['id']."'");
      $_SESSION['delmsg'] = "deleted ||";
      echo "<script type='text/javascript'>alert('Successfully Deleted');</script>";
    }
}
?>


  <?php include("admin.php"); ?>


  <section class="content-header">
  <div class="content-header-left">
    <h1>Add Products</h1>
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
                    
        $query = mysqli_query($conn,"select * from category");
        while($row = mysqli_fetch_array($query)){
        
       ?>
                    <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['catname']); ?></option>
                    <?php } ?>
                </select>
              </div>
                
            </div>

          <div class="form-group">
              <label for="" class="col-sm-2 control-label">Name <span>*</span></label>
              <div class="col-sm-6">
                <input type="text" autocomplete="off" class="form-control" name="pname" value="" required>
              </div>
            </div>
           
           
           
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Product Photo <span>*</span></label>
              <div class="col-sm-9" style="padding-top:5px">
                <input type="file" name="pimage" required>(Only jpg, jpeg, gif and png are allowed)
                <div class="red"><span>"Kindly Upload Image in 370px X 370px"</span></div>
              </div>
            </div>

            <div class="form-group">
          <label for="" class="col-sm-2 control-label">Description</label>
          <div class="col-sm-9">
            <textarea class="form-control" name="description" id="editor2"></textarea>
          </div>
        </div>

        <div class="form-group">
          <label for="" class="col-sm-2 control-label"></label>
          <div class="col-sm-6">
            <button type="submit" class="btn btn-success pull-left" name="form1">Insert</button>
          </div>
        </div>
      
  </form>

   

 

  
  </div>
    </div>
      

</section>

  


   
 

  <?php include("footer.php"); ?>