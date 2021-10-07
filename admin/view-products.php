<?php
ini_set('display_errors', 1);
session_start();
include('config.php');
if (strlen($_SESSION['alogin'])==0)
{
    header('location:adminlogin.php');
}
else{
     


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
    <h1>Products</h1>
  </div>
  <div class="content-header-right">
    <a href="product.php" class="btn btn-primary btn-sm">Add product</a>
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
                <th width="20">SL</th>
                <th width="20">Category</th>
                <th width="20">Product Name</th>
                <th width="20">product Image</th>
                <th width="20">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $query = mysqli_query($conn,"select * from product");
                $cnt = 1;
                while($row = mysqli_fetch_array($query))
                {
                 ?>
                <tr>

                <?php
                $catid = $row['catid'];
                $query1 = mysqli_query($conn,"select * from category where id='$catid'");
                while($rows = mysqli_fetch_array($query1))
                {

                  $catname=$rows['catname'];
                }
                ?>
                  <td><?php echo htmlentities($cnt); ?></td>
                  <td><?php echo  $catname; ?></td>
                  <td><?php echo htmlentities($row['pname']); ?></td>
                  <td><img src="product/products/<?php echo htmlentities($row['pimage']); ?>" class="existing-photo" style="height: 200px;"></td>
               
                  <td>                    
                   <a href="edit-product.php?id=<?php echo $row['id'] ?>" class="btn btn-warning btn-xs">Edit</a>
                     <a href="view-products.php?id=<?php echo $row['id'] ?>&del=delete" onClick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-xs">Delete</a>
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