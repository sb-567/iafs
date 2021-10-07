<?php
  session_start();
  include("config.php");
  if(strlen($_SESSION['alogin'])==0)
  {
    header('location:adminlogin.php');
  }
  else{
     

     if (isset($_POST['submit'])) {
      $old_image = $_POST["old_image"];
      $image = $_FILES["image"]["name"];
      $caption = $_POST["caption"];

      $size=$_FILES['image']['size'];
        $temp=$_FILES['image']['tmp_name'];
        $type=$_FILES['image']['type'];
        $image=$_FILES['image']['name'];

        unlink("slider/$old_image");
        move_uploaded_file($temp, "slider/".$_FILES["image"]["name"]);

    
      $id = intval($_GET['id']);
      $sql = mysqli_query($conn,"update slider set image = '$image' caption = '$caption' where id='$id'");
      $_SESSION['msg'] = "image updated ||";
      echo "<script> alert('sucessfully updated'); window.location='slider.php';</script>";
    }
   
     
    
  }
?>

  <?php include("admin.php"); ?>



  <section class="content">
     <div class="">
        <h1>Edit slider</h1>
    </div>
    <div class="box box-info">
      <div class="box-body">
        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
           <?php 
                $id = intval($_GET['id']);
                $query = mysqli_query($conn,"select * from slider  where id = '$id'");
                
                while($row = mysqli_fetch_array($query))
                {
                 ?>
              <div class="form-group">
                          <label for="" class="col-sm-2 control-label">Existing Photo</label>
                          <div class="col-sm-6" style="padding-top:6px;">
                              <img src="slider/<?php echo htmlentities($row['image']); ?>" class="existing-photo" style="height:40px;">
                          </div>
                      </div>
                  <div class="form-group">
                          <label for="" class="col-sm-2 control-label">New Photo</label>
                          <div class="col-sm-6" style="padding-top:6px;">
                              <input type="file" name="image">
                              <input type="hidden" name="old_image" value="<?php echo $row['image'] ?>">
                          
                          </div>
                      </div>

                          <label for="" class="col-sm-2 control-label">Slider Caption</label>
          <div class="col-sm-9">
            <textarea class="form-control" name="caption" id="editor1">
              <?php echo htmlentities($row[ 'caption']); ?>
            </textarea>
          </div>
        </div>

                

          <div class="form-group">
              <label for="" class="col-sm-2 control-label"></label>
               <div class="col-sm-6">
                  <button type="submit" class="btn btn-success pull-left" name="submit">Submit</button>
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
















