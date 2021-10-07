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
      $logo = $_FILES["logo"]["name"];

      $size=$_FILES['logo']['size'];
        $temp=$_FILES['logo']['tmp_name'];
        $type=$_FILES['logo']['type'];
        $logo=$_FILES['logo']['name'];

        unlink("clients/$old_image");
        move_uploaded_file($temp, "clients/".$_FILES["logo"]["name"]);

    
      $id = intval($_GET['id']);
      $sql = mysqli_query($conn,"update clients set logo = '$logo' where id='$id'");
      $_SESSION['msg'] = "Logo updated ||";
      echo "<script> alert('sucessfully updated'); window.location='clients.php';</script>";
    }
   
     
    
  }
?>

  <?php include("admin.php"); ?>



  <section class="content">
     <div class="">
        <h1>Edit Clients</h1>
    </div>
    <div class="box box-info">
      <div class="box-body">
        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
           <?php 
                $id = intval($_GET['id']);
                $query = mysqli_query($conn,"select * from clients  where id = '$id'");
                
                while($row = mysqli_fetch_array($query))
                {
                 ?>
              <div class="form-group">
                          <label for="" class="col-sm-2 control-label">Existing Photo</label>
                          <div class="col-sm-6" style="padding-top:6px;">
                              <img src="clients/<?php echo htmlentities($row['logo']); ?>" class="existing-photo" style="height:40px;">
                          </div>
                      </div>
                  <div class="form-group">
                          <label for="" class="col-sm-2 control-label">New Photo</label>
                          <div class="col-sm-6" style="padding-top:6px;">
                              <input type="file" name="logo">
                              <input type="hidden" name="old_image" value="<?php echo $row['logo'] ?>">
                          
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
















