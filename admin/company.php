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
      $image = $_FILES["image"]["name"];

      $size=$_FILES['image']['size'];
        $temp=$_FILES['image']['tmp_name'];
        $type=$_FILES['image']['type'];
        $image=$_FILES['image']['name'];

        // unlink("image/$old_image");
        move_uploaded_file($temp, "product/home/company/".$_FILES["image"]["name"]);

    
      // $id = intval($_GET['id']);
      $sql = mysqli_query($conn,"insert into company(image) values('$image')");
      $_SESSION['msg'] = "image updated ||";
      echo "<script> alert('sucessfully Insert'); window.location='company.php';</script>";
    }
   
     if(isset($_GET['del'])) {
      $id=$_GET['id'];
      mysqli_query($conn,"delete from company where id='".$_GET['id']."'");
      $_SESSION['delmsg'] = "deleted ||";
      echo "<script type='text/javascript'>alert('Product Successfully Deleted');</script>";
    }
    
  }
?>

  <?php include("admin.php"); ?>



  <section class="content">
     <div class="">
        <h1>Companies</h1>
    </div>
    <div class="box box-info">
      <div class="box-body">
        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
      
                  <div class="form-group">
                          <label for="" class="col-sm-2 control-label">New Photo</label>
                          <div class="col-sm-6" style="padding-top:6px;">
                              <input type="file" name="image">
                            <div class="red"><span>"Kindly Upload Image in 210px X 210px"</span></div>
                          
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
                <th width="80">Latest Work image</th>
              
                
                <th width="50">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $query = mysqli_query($conn,"select * from company");
                $cnt = 1;
                while($row = mysqli_fetch_array($query))
                {
                 ?>
                <tr>
                  <td><?php echo htmlentities($cnt); ?></td>
                  <td><img src="product/home/company/<?php echo htmlentities($row['image']); ?>" class="existing-photo" style="height:120px;"></td>
               
                  <td>                    
                     <a href="company.php?id=<?php echo $row['id'] ?>&del=delete" onClick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-xs">Delete</a>
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
















