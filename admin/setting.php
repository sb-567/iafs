<?php
session_start();
include( 'config.php');
if (strlen($_SESSION['alogin'])==0)
{
    header('location:adminlogin.php');
}
else{
    date_default_timezone_set('Asia/Kolkata');
    $currentTime = date('d-m-y h:i:s A',time());
    if (isset($_POST['form1'])) {
      $old_image = $_POST["old_image"];
      $logo = $_FILES["logo"]["name"];

      $size=$_FILES['logo']['size'];
        $temp=$_FILES['logo']['tmp_name'];
        $type=$_FILES['logo']['type'];
        $logo=$_FILES['logo']['name'];

        unlink("logo/$old_image");
        move_uploaded_file($temp, "logo/".$_FILES["logo"]["name"]);
          // move_uploaded_file($_FILES["logo"]["tmp_name"], "logo/".$_FILES["logo"]["name"]);
      // $id = intval($_GET['id']);
      $sql = mysqli_query($conn,"update settings set logo = '$logo' where id=1");
      $_SESSION['msg'] = "Logo updated ||";
      echo "<script> alert('sucessfully updated'); window.location='setting.php';</script>";
    }

    if (isset($_POST['form2'])) {
      $old_image = $_POST["old_image"];
      $favicon = $_FILES["favicon"]["name"];

      $size=$_FILES['favicon']['size'];
        $temp=$_FILES['favicon']['tmp_name'];
        $type=$_FILES['favicon']['type'];
        $favicon=$_FILES['favicon']['name'];

        unlink("favicon/$old_image");
        move_uploaded_file($temp, "favicon/".$_FILES["favicon"]["name"]);

    
      // $id = intval($_GET['id']);
      $sql = mysqli_query($conn,"update settings set favicon = '$favicon' where id=1");
      $_SESSION['msg'] = "Logo updated ||";
      echo "<script> alert('sucessfully updated'); window.location='setting.php';</script>";
    }

    if (isset($_POST['form3'])) {
      $address = $_POST["address"];
      $email = $_POST["email"];
      $phone = $_POST["phone"];
      $map = $_POST["map"];
      
      $sql = mysqli_query($conn,"update settings set address='$address',email='$email',phone='$phone' ,map = '$map' where id=1");
      $_SESSION['msg'] = "Category updated ||";
      echo "<script> alert('sucessfully updated'); window.location='setting.php';</script>";
    }


    if (isset($_POST['form4'])) {
      $facebook = $_POST["facebook"];
      $whatsapp = $_POST["whatsapp"];
      
      $sql = mysqli_query($conn,"update settings set facebook='$facebook',whatsapp='$whatsapp' where id=1");
      $_SESSION['msg'] = "Category updated ||";
      echo "<script> alert('sucessfully updated'); window.location='setting.php';</script>";
    }

  }

  ?>



  <?php 

  include("admin.php");

   ?>
 	<div class="content">
 		<div class="text-center">
 		    <h1>Setting</h1>
 		</div>
 		<div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_1" data-toggle="tab">Logo</a></li>
            <li><a href="#tab_2" data-toggle="tab">Favicon</a></li>
            <li><a href="#tab_3" data-toggle="tab">Contact</a></li>
            <li><a href="#tab_4" data-toggle="tab">Social Link</a></li>
          </ul>
          <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">


                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                        <?php $query = mysqli_query($conn,"select * from settings");
                            while($row = mysqli_fetch_array($query))
                            {
                             ?>
                    <div class="box box-info">
                <div class="box-body">
                  <div class="form-group">
                          <label for="" class="col-sm-2 control-label">Existing Photo</label>
                          <div class="col-sm-6" style="padding-top:6px;">
                              <img src="logo/<?php echo htmlentities($row['logo']); ?>" class="existing-photo" style="height:80px;">
                          </div>
                      </div>
                  <div class="form-group">
                          <label for="" class="col-sm-2 control-label">New Photo</label>
                          <div class="col-sm-6" style="padding-top:6px;">
                              <input type="file" name="logo">
                              <input type="hidden" name="old_image" value="<?php echo $row['logo'] ?>">
                              <div class="red"><span>"Kindly Upload Logo in 150px X 100px"</span></div>

                          </div>
                      </div>
                      <div class="form-group">
                    <label for="" class="col-sm-2 control-label"></label>
                    <div class="col-sm-6">
                      <button type="submit" class="btn btn-success pull-left" name="form1">Update Logo</button>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>
              </form>

              


                  </div>
                  <div class="tab-pane" id="tab_2">

                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                       <?php $query = mysqli_query($conn,"select * from settings");
                
                while($row = mysqli_fetch_array($query))
                {
                 ?>
              <div class="box box-info">
                <div class="box-body">
                  <div class="form-group">
                          <label for="" class="col-sm-2 control-label">Existing Photo</label>
                          <div class="col-sm-6" style="padding-top:6px;">
                              <img src="favicon/<?php echo htmlentities($row['favicon']); ?>" class="existing-photo" style="height:40px;">
                          </div>
                      </div>
                  <div class="form-group">
                          <label for="" class="col-sm-2 control-label">New Photo</label>
                          <div class="col-sm-6" style="padding-top:6px;">
                              <input type="file" name="favicon">
                              <input type="hidden" name="old_image" value="<?php echo $row['favicon'] ?>">
                          </div>
                      </div>
                      <div class="form-group">
                    <label for="" class="col-sm-2 control-label"></label>
                    <div class="col-sm-6">
                      <button type="submit" class="btn btn-success pull-left" name="form2">Update Favicon</button>
                    </div>
                  </div>
                </div>
              </div>

            <?php } ?>
              </form>


                  </div>
            <div class="tab-pane" id="tab_3">
              <form class="form-horizontal" action="" method="post">
                <?php $query = mysqli_query($conn,"select * from settings");
                
                while($row = mysqli_fetch_array($query))
                {
                 ?>
              <div class="box box-info">
                <div class="box-body">
                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Address</label>
                    <div class="col-sm-6">
                      <textarea class="form-control" name="address" id="editor4"><?php echo htmlspecialchars_decode($row['address']); ?></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-6">
                      <textarea type="text" id="editor6" class="form-control" name="email"><?php echo htmlentities($row['email']); ?></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Contact Number</label>
                    <div class="col-sm-6">
                      <textarea type="text" class="form-control" id="editor7" name="phone"><?php echo htmlentities($row['phone']); ?></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Map Url</label>
                    <div class="col-sm-6">
                      <textarea class="form-control" rows="8" name="map" id="editor4"><?php echo htmlspecialchars_decode($row['map']); ?></textarea>
                    </div>
                    <div class="red"><span>"Kindly Resize the map width to 100%"</span></div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label"></label>
                    <div class="col-sm-6">
                      <button type="submit" class="btn btn-success pull-left" name="form3">Update</button>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>
              </form>
            </div>



                        <div class="tab-pane" id="tab_4">
              <form class="form-horizontal" action="" method="post">
                <?php $query = mysqli_query($conn,"select * from settings");
                
                while($row = mysqli_fetch_array($query))
                {
                 ?>
              <div class="box box-info">
                <div class="box-body">
                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Facebook</label>
                    <div class="col-sm-6">
                      <textarea class="form-control" name="facebook"><?php echo htmlspecialchars_decode($row['facebook']); ?></textarea>
                    </div>
                  </div>

              <div class="form-group">
                    <label for="" class="col-sm-2 control-label">whatsapp</label>
                    <div class="col-sm-6">
                      <textarea class="form-control" name="whatsapp" id="editor6"><?php echo nl2br($row['whatsapp']); ?></textarea>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label"></label>
                    <div class="col-sm-6">
                      <button type="submit" class="btn btn-success pull-left" name="form4">Update</button>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>
              </form>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
  <?php include("footer.php"); ?>
















