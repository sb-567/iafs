<?php
  session_start();
  include("config.php");
  if(strlen($_SESSION['alogin'])==0)
  {
    header('location:adminlogin.php');
  }
  else{
   if (isset($_POST['form1'])) {
      $map = $_POST["map"];
      $sql = mysqli_query($conn,"update contact set map='$map' where id=1");
      $_SESSION['msg'] = "Category updated ||";
      echo "<script> alert('sucessfully updated'); window.location='contact.php';</script>";
    }
     if (isset($_POST['form2'])) {
      $meta_title = $_POST["meta_title"];
      $meta_keyword = $_POST["meta_keyword"];
      $meta_description = $_POST["meta_description"];
   
      
      $sql = mysqli_query($conn,"update contact set meta_title='$meta_title',meta_keyword='$meta_keyword',
        meta_description='$meta_description' where id=1");
      $_SESSION['msg'] = "Category updated ||";
      echo "<script> alert('sucessfully updated'); window.location='contact.php';</script>";
    }
    
  }
?>

  <?php include("admin.php"); ?>



  <section class="content">
     <div class="">
        <h1>Contact</h1>
    </div>
    <div class="box box-info">
      <div class="box-body">
        <form class="form-horizontal" action="" method="post">
                <?php $query = mysqli_query($conn,"select * from contact");
                
                while($row = mysqli_fetch_array($query))
                {
                 ?>
             
                  
                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Contact Map </label>
                    <div class="col-sm-6">
                  
                      <textarea class="form-control" name="map" style="height:140px;"><?php echo nl2br($row['map']); ?></textarea>
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


              <h3 class="seo-info">SEO Information</h3>

  <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    <?php $query=mysqli_query($conn, "select * from contact"); while($row=mysqli_fetch_array($query)) { ?>

      <div class="form-group">
              <label for="" class="col-sm-2 control-label">Meta Title </label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="meta_title" value="<?php echo $row['meta_title'] ?>">
              </div>
            </div>

      <div class="form-group">
          <label for="" class="col-sm-2 control-label">Meta Keywords </label>
          <div class="col-sm-9">
            <textarea class="form-control" name="meta_keyword" style="height:100px;" spellcheck="false">
              <?php echo htmlentities($row[ 'meta_keyword']); ?>
            </textarea>
          </div>
        </div>

        <div class="form-group">
          <label for="" class="col-sm-2 control-label">Meta Description </label>
          <div class="col-sm-9">
            <textarea class="form-control" name="meta_description" style="height:100px;" spellcheck="false">
              <?php echo htmlentities($row[ 'meta_description']); ?>
            </textarea>
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

  </section>        


  
    





<!-- <script>
  function show(){
    document.getElementById('category').style.display = "block";
  }
</script> -->

<?php include('footer.php'); ?>
















