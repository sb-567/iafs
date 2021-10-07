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
      $head = $_POST['head'];
      $msg = $_POST['msg'];

      $sql = mysqli_query($conn,"update director set head = '$head' ,msg = '$msg' where id=1"); 
      echo "<script>alert('successfully updated');</script>"; 
      
      }
    }
?>


  <?php include("admin.php"); ?>

   <section class="content">
  <div class="">
    <h1>Director Message</h1>
  </div>

   <div class="box box-info">
      <div class="box-body">
  <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    <?php $query=mysqli_query($conn, "select * from director"); while($row=mysqli_fetch_array($query)) { ?>
   
           <div class="form-group">
              <label for="" class="col-sm-2 control-label">Heading</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="head" value="<?php echo htmlentities($row['head']); ?>">
                </div>
          </div>

        <div class="form-group">
          <label for="" class="col-sm-2 control-label">Paragraph</label>
          <div class="col-sm-9">
            <textarea class="form-control" name="msg" id="editor1">
              <?php echo htmlentities($row[ 'msg']); ?>
            </textarea>
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