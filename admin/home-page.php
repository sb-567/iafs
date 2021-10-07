<?php
  session_start();
  include("config.php");
  if(strlen($_SESSION['alogin'])==0)
  {
    header('location:adminlogin.php');
  }
  else{
   if (isset($_POST['form1'])) {
      $head1 = $_POST["head1"];
      $description1 = $_POST["description1"];
      $head2 = $_POST["head2"];
      $description2 = $_POST["description2"];
      $head3 = $_POST["head3"];
      $description3 = $_POST["description3"];
      $head6 = $_POST["head6"];
      $description6 = $_POST["description6"];
    
      $sql ="update home set head1='$head1',description1='$description1',head2='$head2',description2='$description2',head3='$head3',description3='$description3',head6='$head6',description6 ='$description6' where id=1";
     $result=mysqli_query($conn,$sql);
      if($result>0){
        echo "<script> alert('sucessfully updated'); window.location='home-page.php';</script>";
      }
      else{
        echo "<script> alert('error'); window.location='home-page.php';</script>";
      }
    }

    if (isset($_POST['form2'])) {
      $high = $_POST["high"];
      $live = $_POST["live"];

      $sql = mysqli_query($conn,"update home set high = '$high' ,live = '$live' where id=1"); 
      echo "<script>alert('successfully updated ');</script>"; 
      
      }
      
  }
?>

  <?php include("admin.php"); ?>
   
  <section class="content">
  <div class="">
    <h1>Home page</h1>
  </div>
  <div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#tab_1" data-toggle="tab">Offer</a>
      </li>
      <li><a href="#tab_2" data-toggle="tab">Services</a>
      </li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane active" id="tab_1">
        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
          <?php $query=mysqli_query($conn, "select * from home"); while($row=mysqli_fetch_array($query)) { ?>
          <div class="form-group">
            <label for="" class="col-sm-6 control-label">Features</label>
          </div>
          <div class="form-group">
            <label for="" class="col-sm-2 control-label">Heading 1</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="head1" value="<?php echo htmlentities($row['head1']); ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="" class="col-sm-2 control-label">Description 1</label>
            <div class="col-sm-6">
              <textarea type="text" rows="3" class="form-control" name="description1" value=""><?php echo htmlentities($row['description1']); ?></textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="" class="col-sm-2 control-label">Heaging 2</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="head2" value="<?php echo htmlentities($row['head2']); ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="" class="col-sm-2 control-label">Description 2</label>
            <div class="col-sm-6">
              <textarea type="text" rows="3" class="form-control" name="description2" value=""><?php echo htmlentities($row['description2']); ?></textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="" class="col-sm-2 control-label">Heading 3</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="head3" value="<?php echo htmlentities($row['head3']); ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="" class="col-sm-2 control-label">Description 3</label>
            <div class="col-sm-6">
              <textarea type="text" rows="3" class="form-control" name="description3" value=""><?php echo htmlentities($row['description3']); ?></textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="" class="col-sm-2 control-label">Heading 4</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="head6" value="<?php echo htmlentities($row['head6']); ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="" class="col-sm-2 control-label">Description 4</label>
            <div class="col-sm-6">
              <textarea type="text" rows="3" class="form-control" name="description6" value=""><?php echo htmlentities($row['description6']); ?></textarea>
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





      <div class="tab-pane" id="tab_2">
        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
          <?php $query=mysqli_query($conn, "select * from home"); while($row=mysqli_fetch_array($query)) { ?>

          <div class="form-group">
            <label for="" class="col-sm-2 control-label">Description 1</label>
            <div class="col-sm-6">
              <textarea type="text" class="form-control" id="editor1" name="high"><?php echo htmlentities($row['high']); ?></textarea>
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-2 control-label">Description 1</label>
            <div class="col-sm-6">
              <textarea rows="7" class="form-control" id="editor2" name="live"><?php echo htmlspecialchars_decode($row['live']); ?></textarea>
            </div>
          </div>
          
          <div class="form-group">
            <label for="" class="col-sm-2 control-label"></label>
            <div class="col-sm-6">
              <button type="submit" class="btn btn-success pull-left" name="form2">Update</button>
            </div>
          </div>
          <?php } ?>
        </form>
      </div>

    </div>
  </div>
</section>
    





<!-- <script>
  function show(){
    document.getElementById('category').style.display = "block";
  }
</script> -->

<?php include('footer.php'); ?>
















