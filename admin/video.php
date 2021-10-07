<?php
  session_start();
  include("config.php");
  if(strlen($_SESSION['alogin'])==0)
  {
    header('location:adminlogin.php');
  }
  else{
    if(isset($_POST['submit']))
    {
      $ylinks = $_POST['ylinks'];
      $sql = mysqli_query($conn,"insert into youtube(ylinks) values('$ylinks')");
      echo "<script type='text/javascript'>alert('Successfully added');</script>";
    }
     if(isset($_GET['del'])) {
      $id=$_GET['id'];
      mysqli_query($conn,"delete from youtube where id='".$_GET['id']."'");
      $_SESSION['delmsg'] = "deleted ||";
      echo "<script type='text/javascript'>alert('Product Successfully Deleted');</script>";
    }
    
  }
?>

  <?php include("admin.php"); ?>



  <section class="content">
     <div class="">
        <h1>Videos</h1>
    </div>
    <div class="box box-info">
      <div class="box-body">
        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                    

        <div class="form-group">
            <div class="col-sm-6">
            <p><strong>Note:-</strong> Example:  https://www.youtube.com/watch?v=<strong>kn85LqftOsw</strong>    </p>
            <p>Insert Only kn85LqftOsw   </p>
            </div>
        </div>

          <div class="form-group">
              <label for="" class="col-sm-2 control-label">Youtube Links</label>
                  <div class="col-sm-6">
                      <textarea class="form-control" name="ylinks" style="height:140px;"></textarea>
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
                <th width="170">Youtube Links</th>
                <th width="100">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $query = mysqli_query($conn,"select * from youtube");
                $cnt = 1;
                while($row = mysqli_fetch_array($query))
                {
                 ?>
                <tr>
                  <td><?php echo htmlentities($cnt); ?></td>
                  <td><?php echo htmlentities($row['ylinks']); ?></td>
                  <td>                    
                   <a href="edit-video.php?id=<?php echo $row['id'] ?>" class="btn btn-warning btn-xs">Edit</a>
                     <a href="video.php?id=<?php echo $row['id'] ?>&del=delete" onClick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-xs">Delete</a>
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
















