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
      $head1 = $_POST['head1'];
      $descp = addslashes($_POST['descp']);
      $descp1 = addslashes($_POST['descp1']);
      $descp2 = addslashes($_POST['descp2']);
      $descp3 = addslashes($_POST['descp3']);

      $sql = mysqli_query($conn,"update placement set head = '$head' ,head1 = '$head1' ,descp = '$descp',descp1 = '$descp1',descp2 = '$descp2' ,descp3 = '$descp3' where id=1"); 
      echo "<script>alert('successfully updated With images');</script>"; 
      
      }

    }
?>


  <?php include("admin.php"); ?>

   <section class="content">
  <div class="">
    <h1>Placement</h1>
  </div>

   <div class="box box-info">
      <div class="box-body">
  <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    <?php $query=mysqli_query($conn, "select * from placement"); while($row=mysqli_fetch_array($query)) { ?>

           <div class="form-group">
              <label for="" class="col-sm-2 control-label">Heading</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="head" value="<?php echo htmlentities($row['head']); ?>">
                </div>
          </div>

        <div class="form-group">
          <label for="" class="col-sm-2 control-label">Paragraph</label>
          <div class="col-sm-9">
            <textarea class="form-control" name="descp" id="editor1">
              <?php echo htmlentities($row[ 'descp']); ?>
            </textarea>
          </div>
        </div>        

        <div class="form-group">
          <label for="" class="col-sm-2 control-label">Paragraph</label>
          <div class="col-sm-9">
            <textarea class="form-control" name="descp1" id="editor2">
              <?php echo htmlentities($row[ 'descp1']); ?>
            </textarea>
          </div>
        </div>


          <div class="form-group">
              <label for="" class="col-sm-2 control-label">Heading</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="head1" value="<?php echo htmlentities($row['head1']); ?>">
                </div>
          </div>

        <div class="form-group">
          <label for="" class="col-sm-2 control-label">Paragraph</label>
          <div class="col-sm-9">
            <textarea class="form-control" name="descp2" id="editor3">
              <?php echo htmlentities($row[ 'descp2']); ?>
            </textarea>
          </div>
        </div>        

        <div class="form-group">
          <label for="" class="col-sm-2 control-label">Paragraph</label>
          <div class="col-sm-9">
            <textarea class="form-control" name="descp3" id="editor4">
              <?php echo htmlentities($row[ 'descp3']); ?>
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