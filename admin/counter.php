<?php
  session_start();
  include("config.php");
  if(strlen($_SESSION['alogin'])==0)
  {
    header('location:adminlogin.php');
  }
  else{
    if (isset($_POST['form_home_counter_text'])) {
      $counter_1_title = $_POST["counter_1_title"];
      $counter_1_value = $_POST["counter_1_value"];
      $counter_1_icon = $_POST["counter_1_icon"];
      $counter_2_title = $_POST["counter_2_title"];
      $counter_2_value = $_POST["counter_2_value"];
      $counter_2_icon = $_POST["counter_2_icon"];
      $counter_3_title = $_POST["counter_3_title"];
      $counter_3_value = $_POST["counter_3_value"];
      $counter_3_icon = $_POST["counter_3_icon"];
      $counter_4_title = $_POST["counter_4_title"];
      $counter_4_value = $_POST["counter_4_value"];
      $counter_4_icon = $_POST["counter_4_icon"];
   
      
      $sql = mysqli_query($conn,"update counter set 
        counter_1_title='$counter_1_title',counter_1_value='$counter_1_value',
        counter_1_icon='$counter_1_icon',
        counter_2_title='$counter_2_title',counter_2_value='$counter_2_value',
        counter_2_icon='$counter_2_icon',
        counter_3_title='$counter_3_title',counter_3_value='$counter_3_value',
        counter_3_icon='$counter_3_icon',
        counter_4_title='$counter_4_title',counter_4_value='$counter_4_value',
        counter_4_icon='$counter_4_icon' where id=1");
      $_SESSION['msg'] = "Category updated ||";
      echo "<script> alert('sucessfully updated'); window.location='counter.php';</script>";
    }
    
  }
?>

  <?php include("admin.php"); ?>



 <section class="content">
  <div class="">
    <h1>Counter Information Section</h1>
  </div>
  <div class="box box-info">
    <div class="box-body">
      <form action="" class="form-horizontal" method="post" accept-charset="utf-8">
        <?php $query=mysqli_query($conn, "select * from counter"); while($row=mysqli_fetch_array($query)) { ?>
        <div class="form-group">
          <label for="" class="col-sm-2 control-label">Item 1 - Title</label>
          <div class="col-sm-2">
            <input type="text" name="counter_1_title" class="form-control" value="<?php echo $row['counter_1_title'] ?>">
          </div>
          <label for="" class="col-sm-2 control-label">Item 1 - Value</label>
          <div class="col-sm-2">
            <input type="text" name="counter_1_value" class="form-control" value="<?php echo $row['counter_1_value'] ?>">
          </div>
          <label for="" class="col-sm-2 control-label">Item 1 - Icon</label>
          <div class="col-sm-2">
            <input type="text" name="counter_1_icon" class="form-control" value="<?php echo $row['counter_1_icon'] ?>">
          </div>
        </div>
        <div class="form-group">
          <label for="" class="col-sm-2 control-label">Item 2 - Title</label>
          <div class="col-sm-2">
            <input type="text" name="counter_2_title" class="form-control" value="<?php echo $row['counter_2_title'] ?>">
          </div>
          <label for="" class="col-sm-2 control-label">Item 2 - Value</label>
          <div class="col-sm-2">
            <input type="text" name="counter_2_value" class="form-control" value="<?php echo $row['counter_2_value'] ?>">
          </div>
          <label for="" class="col-sm-2 control-label">Item 2 - Icon</label>
          <div class="col-sm-2">
            <input type="text" name="counter_2_icon" class="form-control" value="<?php echo $row['counter_2_icon'] ?>">
          </div>
        </div>
        <div class="form-group">
          <label for="" class="col-sm-2 control-label">Item 3 - Title</label>
          <div class="col-sm-2">
            <input type="text" name="counter_3_title" class="form-control" value="<?php echo $row['counter_3_title'] ?>">
          </div>
          <label for="" class="col-sm-2 control-label">Item 3 - Value</label>
          <div class="col-sm-2">
            <input type="text" name="counter_3_value" class="form-control" value="<?php echo $row['counter_3_value'] ?>">
          </div>
          <label for="" class="col-sm-2 control-label">Item 3 - Icon</label>
          <div class="col-sm-2">
            <input type="text" name="counter_3_icon" class="form-control" value="<?php echo $row['counter_3_icon'] ?>">
          </div>
        </div>
        <div class="form-group">
          <label for="" class="col-sm-2 control-label">Item 4 - Title</label>
          <div class="col-sm-2">
            <input type="text" name="counter_4_title" class="form-control" value="<?php echo $row['counter_4_title'] ?>">
          </div>
          <label for="" class="col-sm-2 control-label">Item 4 - Value</label>
          <div class="col-sm-2">
            <input type="text" name="counter_4_value" class="form-control" value="<?php echo $row['counter_4_value'] ?>">
          </div>
          <label for="" class="col-sm-2 control-label">Item 4 - Icon</label>
          <div class="col-sm-2">
            <input type="text" name="counter_4_icon" class="form-control" value="<?php echo $row['counter_4_icon'] ?>">
          </div>
        </div>
        <div class="form-group">
          <label for="" class="col-sm-2 control-label"></label>
          <div class="col-sm-6">
            <button type="submit" class="btn btn-success pull-left" name="form_home_counter_text">Update</button>
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
















