<?php
  session_start();
  include("config.php");
  if(strlen($_SESSION['alogin'])==0)
  {
    header('location:adminlogin.php');
  }
  else{
     if (isset($_POST['submit'])) {
      // $old_image = $_POST["old_image"];
      $logo = $_FILES["logo"]["name"];

      $size=$_FILES['logo']['size'];
        $temp=$_FILES['logo']['tmp_name'];
        $type=$_FILES['logo']['type'];
        $logo=$_FILES['logo']['name'];

        // unlink("logo/$old_image");
        move_uploaded_file($temp, "clients/".$_FILES["logo"]["name"]);

    
      // $id = intval($_GET['id']);
      $sql = mysqli_query($conn,"insert into clients(logo) values('$logo')");
      $_SESSION['msg'] = "Logo updated ||";
      echo "<script> alert('sucessfully Insert'); window.location='clients.php';</script>";
    }
   
     if(isset($_GET['del'])) {
      $id=$_GET['id'];
      mysqli_query($conn,"delete from clients where id='".$_GET['id']."'");
      $_SESSION['delmsg'] = "deleted ||";
      echo "<script type='text/javascript'>alert('Product Successfully Deleted');</script>";
    }
    
  }
?>

  <?php include("admin.php"); ?>



  <section class="content">
     <div class="">
        <h1>Clients</h1>
    </div>
    <div class="box box-info">
      <div class="box-body">
        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
      
                  <div class="form-group">
                          <label for="" class="col-sm-2 control-label">New Photo</label>
                          <div class="col-sm-6" style="padding-top:6px;">
                              <input type="file" name="logo">
                          
                          </div>
                      </div>

                

          <div class="form-group">
              <label for="" class="col-sm-2 control-label"></label>
               <div class="col-sm-6">
                  <button type="submit" class="btn btn-success pull-left" name="submit">Submit</button>
               </div>
          </div>                                      
                      

        </form>     
      </div>     
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
                <th width="50">SL</th>
                <th width="80">Client Logo</th>
              
                
                <th width="50">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $query = mysqli_query($conn,"select * from clients");
                $cnt = 1;
                while($row = mysqli_fetch_array($query))
                {
                 ?>
                <tr>
                  <td><?php echo htmlentities($cnt); ?></td>
                  <td><img src="clients/<?php echo htmlentities($row['logo']); ?>" class="existing-photo"></td>
               
                  <td>                    
                   <a href="edit-clients.php?id=<?php echo $row['id'] ?>" class="btn btn-warning btn-xs">Edit</a>
                     <a href="clients.php?id=<?php echo $row['id'] ?>&del=delete" onClick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-xs">Delete</a>
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
    





<!-- <script>
  function show(){
    document.getElementById('category').style.display = "block";
  }
</script> -->

<?php include('footer.php'); ?>
















