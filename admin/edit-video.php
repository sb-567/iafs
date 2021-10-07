<?php
  session_start();
  include("config.php");
  if(strlen($_SESSION['alogin'])==0)
  {
    header('location:adminlogin.php');
  }
  else{
     

     if (isset($_POST['submit'])) {
      $ylinks = $_POST["ylinks"];
      

      

    
      $id = intval($_GET['id']);
      $sql = mysqli_query($conn,"update youtube set ylinks = '$ylinks' where id='$id'");
      $_SESSION['msg'] = "image updated ||";
      echo "<script> alert('sucessfully updated'); window.location='video.php';</script>";
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
                $query = mysqli_query($conn,"select * from youtube  where id = '$id'");
                
                while($row = mysqli_fetch_array($query))
                {
                 ?>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Youtube Links</label>
                  <div class="col-sm-6">
                      <textarea class="form-control" name="ylinks" style="height:140px;"><?php echo $row['ylinks'] ?></textarea>
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
















