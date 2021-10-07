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
      $pdf = $_FILES['pdf']['name'];
      $old_pdf = $_POST["old_pdf"];

      if(isset($_FILES['pdf']['name']) && ($_FILES['pdf']['name'] !=""))
      {

        $size=$_FILES['pdf']['size'];
        $temp=$_FILES['pdf']['tmp_name'];
        $type=$_FILES['pdf']['type'];
        $pdf=$_FILES['pdf']['name'];

        unlink("pdf/old_pdf");
      
      move_uploaded_file($temp, "pdf/".$_FILES["pdf"]["name"]);
      $sql = mysqli_query($conn,"update maklite set pdf='$pdf' where id=1"); 
      echo "<script>alert('successfully updated');</script>"; 
      
      }
      // else{
        
      //   $sql = mysqli_query($conn,"update about set aboutpara = '$aboutpara' where id=1");
      //   echo "<script>alert('successfully updated');</script>";
      // }
    }

    

   
}
?>


  <?php include("admin.php"); ?>

   <section class="content">
  <div class="">
    <h1>MakLite Casting page</h1>
  </div>

   <div class="box box-info">
      <div class="box-body">
  
 <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    <?php $query=mysqli_query($conn, "select * from maklite"); while($row=mysqli_fetch_array($query)) { ?>
   
        <div class="form-group">
          <label for="" class="col-sm-2 control-label">Existing pdf</label>
          <div class="col-sm-6" style="padding-top:6px;">
            <a href="pdf/<?php echo htmlentities($row['pdf']); ?>" target="_blank" class="existing-photo" style="height:80px;"><?php echo htmlentities($row['pdf']); ?></a>
          </div>
        </div>
        <div class="form-group">
          <label for="" class="col-sm-2 control-label">New Pdf</label>
          <div class="col-sm-6" style="padding-top:6px;">
            <input type="file" name="pdf">
            <input type="hidden" name="old_pdf" value="<?php echo $row['pdf'] ?>">
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