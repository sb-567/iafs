<?php
ini_set('display_errors', 1);
session_start();
include('config.php');
if (strlen($_SESSION['alogin'])==0)
{
    header('location:adminlogin.php');
}
else{
    if (isset($_POST['form1'])) {
      $youtube = $_POST["youtube"];
      $icon1 = $_POST["icon1"];
      $heading1 = $_POST["heading1"];
      $desc1 = $_POST["desc1"];
      $icon2 = $_POST["icon2"];
      $heading2 = $_POST["heading2"];
      $desc2 = $_POST["desc2"];
      $icon3 = $_POST["icon3"];
      $heading3 = $_POST["heading3"];
      $desc3 = $_POST["desc3"];
      $icon4 = $_POST["icon4"];
      $heading4 = $_POST["heading4"];
      $desc4 = $_POST["desc4"];
      $icon5 = $_POST["icon5"];
      $heading5 = $_POST["heading5"];
      $desc5 = $_POST["desc5"];
      $icon6 = $_POST["icon6"];
      $heading6 = $_POST["heading6"];
      $desc6 = $_POST["desc6"];
      $sql ="update vcard set youtube='$youtube',icon1='$icon1',heading1='$heading1',desc1='$desc1',icon2='$icon2',heading2='$heading2',desc2='$desc2',icon3='$icon3',heading3='$heading3',desc3='$desc3',icon4='$icon4',heading4='$heading4',desc4='$desc4',icon5='$icon5',heading5='$heading5',desc5='$desc5',icon6='$icon6',heading6='$heading6',desc6='$desc6' where id=1";
     $result=mysqli_query($conn,$sql);
      if($result>0){
        echo "<script> alert('sucessfully updated'); window.location='v-card.php';</script>";
      }
      else{
        echo "<script> alert('error'); window.location='v-card.php';</script>";
      }
    }
    if (isset($_POST['form2'])) {
      $vcardimg = $_FILES["vcardimg"]["name"];
          move_uploaded_file($_FILES["vcardimg"]["tmp_name"], "vcard/".$_FILES["vcardimg"]["name"]);
      // $id = intval($_GET['id']);
      $sql = mysqli_query($conn,"update vcard set vcardimg = '$vcardimg' where id=1");
      $_SESSION['msg'] = "Logo updated ||";
      echo "<script> alert('sucessfully updated'); window.location='services.php';</script>";
    }
    if (isset($_POST['form3'])){
      $dicon1 = $_POST["dicon1"];
      $dheading1 = $_POST["dheading1"];
      $ddesc1 = $_POST["ddesc1"];
      $dicon2 =$_POST["dicon2"];
      $dheading2 = $_POST["dheading2"];
      $ddesc2 = $_POST["ddesc2"];
       $dicon3 =$_POST["dicon3"];
      $dheading3 = $_POST["dheading3"];
      $ddesc3 = $_POST["ddesc3"];
      $dicon4 =$_POST["dicon4"];
      $dheading4 = $_POST["dheading4"];
      $ddesc4 = $_POST["ddesc4"];
       $dicon5 =$_POST["dicon5"];
      $dheading5 = $_POST["dheading5"];
      $ddesc5 = $_POST["ddesc5"];
      $dicon6 =$_POST["dicon6"];
      $dheading6 = $_POST["dheading6"];
      $ddesc6 = $_POST["ddesc6"];
      $dicon7 =$_POST["dicon7"];
      $dheading7 = $_POST["dheading7"];
      $ddesc7 = $_POST["ddesc7"];
      $dicon8 =$_POST["dicon8"];
      $dheading8 = $_POST["dheading8"];
      $ddesc8 = $_POST["ddesc8"];
      $dicon9 =$_POST["dicon9"];
      $dheading9 = $_POST["dheading9"];
      $ddesc9 = $_POST["ddesc9"];
      $sql="update vcard set 
      dicon1='$dicon1',dheading1='$dheading1',ddesc1='$ddesc1',
      dicon2='$dicon2',dheading2='$dheading2',ddesc1='$ddesc2',
      dicon3='$dicon3',dheading3='$dheading3',ddesc3='$ddesc3',
      dicon4='$dicon4',dheading4='$dheading4',ddesc4='$ddesc4',
      dicon5='$dicon5',dheading5='$dheading5',ddesc5='$ddesc5',
      dicon6='$dicon6',dheading6='$dheading6',ddesc6='$ddesc6',
      dicon7='$dicon7',dheading7='$dheading7',ddesc7='$ddesc7',
      dicon8='$dicon8',dheading8='$dheading8',ddesc8='$ddesc8',
      dicon9='$dicon9',dheading9='$dheading9',ddesc9='$ddesc9' where id=1";
      $result=mysqli_query($conn,$sql);
      if($result>0){
        echo "<script> alert('sucessfully updated'); window.location='services.php';</script>";
      }
      else{
        echo "<script> alert('error'); window.location='services.php';</script>";
      }
      
    }

    if (isset($_POST['form4'])) {
      $youtube1 = $_POST["youtube1"];
      $icon11 = $_POST["icon11"];
      $heading11 = $_POST["heading11"];
      $desc11 = $_POST["desc11"];
      $icon22 = $_POST["icon22"];
      $heading22 = $_POST["heading22"];
      $desc22 = $_POST["desc22"];
      $icon33 = $_POST["icon33"];
      $heading33 = $_POST["heading33"];
      $desc33 = $_POST["desc33"];
      $icon44 = $_POST["icon44"];
      $heading44 = $_POST["heading44"];
      $desc44 = $_POST["desc44"];
      $icon55 = $_POST["icon55"];
      $heading55 = $_POST["heading55"];
      $desc55 = $_POST["desc55"];
      $icon66 = $_POST["icon66"];
      $heading66 = $_POST["heading66"];
      $desc66 = $_POST["desc66"];
      $sql = mysqli_query($conn,"update digital set youtube1='$youtube1',
        icon11='$icon11',heading11='$heading11',desc11='$desc11',
        icon22='$icon22',heading22='$heading22',desc22='$desc22',
        icon33='$icon33',heading33='$heading33',desc33='$desc33',
        icon44='$icon44',heading44='$heading44',desc44='$desc44',
        icon55='$icon55',heading55='$heading55',desc55='$desc55',
        icon66='$icon66',heading66='$heading66',desc66='$desc66' where id=1");
      $_SESSION['msg'] = "Category updated ||";
      echo "<script> alert('sucessfully updated'); window.location='services.php';</script>";
    }

    if (isset($_POST['form5'])) {
      $social1 = $_POST["social1"];
      $sheading1 = $_POST["sheading1"];
      $sdesc1 = $_POST["sdesc1"];
      $social2 = $_POST["social2"];
      $sheading2 = $_POST["sheading2"];
      $sdesc2 = $_POST["sdesc2"];
      $social3 = $_POST["social3"];
      $sheading3 = $_POST["sheading3"];
      $sdesc3 = $_POST["sdesc3"];
      $social4 = $_POST["social4"];
      $sheading4 = $_POST["sheading4"];
      $sdesc4 = $_POST["sdesc4"];
      $social5 = $_POST["social5"];
      $sheading5 = $_POST["sheading5"];
      $sdesc5 = $_POST["sdesc5"];
      $social6 = $_POST["social6"];
      $sheading6 = $_POST["sheading6"];
      $sdesc6 = $_POST["sdesc6"];
      $sql ="update vcard set social1='$social1',sheading1='$sheading1',sdesc1='$sdesc1',social2='$social2',sheading2='$sheading2',sdesc2='$sdesc2',social3='$social3',sheading3='$sheading3',sdesc3='$sdesc3',social4='$social4',sheading4='$sheading4',sdesc4='$sdesc4',social5='$social5',sheading5='$sheading5',sdesc5='$sdesc5',social6='$social6',sheading6='$sheading6',sdesc6='$sdesc6' where id=1";
     $result=mysqli_query($conn,$sql);
      if($result>0){
        echo "<script> alert('sucessfully updated'); window.location='services.php';</script>";
      }
      else{
        echo "<script> alert('error'); window.location='services.php';</script>";
      }
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
            <li class="active"><a href="#tab_1" data-toggle="tab">V-Card</a></li>
            <li><a href="#tab_2" data-toggle="tab">Digital Brochure</a></li>
            <li><a href="#tab_3" data-toggle="tab">SMM</a></li>
            <li><a href="#tab_3" data-toggle="tab">SEM</a></li>
            <li><a href="#tab_3" data-toggle="tab">Web Designing & Development</a></li>
            <li><a href="#tab_7" data-toggle="tab">Graphics Design</a></li>
            
          </ul>
          <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
              <form class="form-horizontal" action="" method="post"  enctype="multipart/form-data">
                <?php $query = mysqli_query($conn,"select * from vcard");
                while($row = mysqli_fetch_array($query))
                {
                 ?>
                    <div class="box box-info">
                <div class="box-body">
                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Youtube Iframe </label>
                    <div class="col-sm-6">
                      <textarea class="form-control" name="youtube" style="height:140px;"><?php echo htmlentities($row['youtube']); ?></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="" class="col-sm-6 control-label">Why Should I have a Vcard?</label>
                  </div>

                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Icon 1 </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="icon1" value="<?php echo htmlentities($row['icon1']); ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Heading 1 </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="heading1" value="<?php echo htmlentities($row['heading1']); ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Description 1</label>
                    <div class="col-sm-6">
                      <textarea class="form-control" name="desc1" style="height:140px;"><?php echo htmlentities($row['desc1']); ?></textarea>
                    </div>
                  </div>

                    <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Icon 2 </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="icon2" value="<?php echo htmlentities($row['icon2']); ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Heading 2 </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="heading2" value="<?php echo htmlentities($row['heading2']); ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Description 2</label>
                    <div class="col-sm-6">
                      <textarea class="form-control" name="desc2" style="height:140px;"><?php echo htmlentities($row['desc2']); ?></textarea>
                    </div>
                  </div>

                    <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Icon 3 </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="icon3" value="<?php echo htmlentities($row['icon3']); ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Heading 3 </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="heading3" value="<?php echo htmlentities($row['heading3']); ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Description 3</label>
                    <div class="col-sm-6">
                      <textarea class="form-control" name="desc3" style="height:140px;"><?php echo htmlentities($row['desc3']); ?></textarea>
                    </div>
                  </div>

                    <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Icon 4 </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="icon4" value="<?php echo htmlentities($row['icon4']); ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Heading 4 </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="heading4" value="<?php echo htmlentities($row['heading4']); ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Description 4</label>
                    <div class="col-sm-6">
                      <textarea class="form-control" name="desc4" style="height:140px;"><?php echo htmlentities($row['desc4']); ?></textarea>
                    </div>
                  </div>

                    <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Icon 5 </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="icon5" value="<?php echo htmlentities($row['icon5']); ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Heading 5 </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="heading5" value="<?php echo htmlentities($row['heading5']); ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Description 5</label>
                    <div class="col-sm-6">
                      <textarea class="form-control" name="desc5" style="height:140px;"><?php echo htmlentities($row['desc5']); ?></textarea>
                    </div>
                  </div>

                    <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Icon 6 </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="icon6" value="<?php echo htmlentities($row['icon6']); ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Heading 6 </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="heading6" value="<?php echo htmlentities($row['heading6']); ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Description 6</label>
                    <div class="col-sm-6">
                      <textarea class="form-control" name="desc6" style="height:140px;"><?php echo htmlentities($row['desc6']); ?></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label"></label>
                    <div class="col-sm-6">
                      <button type="submit" class="btn btn-success pull-left" name="form1">Update</button>
                    </div>
                  </div>


                  <div class="form-group">
                          <label for="" class="col-sm-2 control-label">Existing Photo</label>
                          <div class="col-sm-6" style="padding-top:6px;">
                              <img src="vcard/<?php echo htmlentities($row['vcardimg']); ?>" class="existing-photo" style="height:200px;">
                          </div>
                      </div>
                  <div class="form-group">
                          <label for="" class="col-sm-2 control-label">New Photo</label>
                          <div class="col-sm-6" style="padding-top:6px;">
                              <input type="file" name="vcardimg">
                          </div>
                      </div>
                      <div class="form-group">
                    <label for="" class="col-sm-2 control-label"></label>
                    <div class="col-sm-6">
                      <button type="submit" class="btn btn-success pull-left" name="form2">Update Vcard</button>
                    </div>
                  </div>




                 
                  </div>
                </div>
              
              <?php } ?>
              </form>

              <form class="form-horizontal" action="" method="post">
                <?php $query = mysqli_query($conn,"select * from vcard");
                     while($row = mysqli_fetch_array($query))
                      {
                 ?>
              <div class="box box-info">
                <div class="box-body">
                      <div class="form-group">
                        <label for="" class="col-sm-7 control-label">FOR WHOM THIS DIGITAL BUSINESS VCARD IS BENEFICIAL..?</label>
                      </div>

                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Icon 1 </label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="dicon1" value="<?php echo htmlentities($row['dicon1']); ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Heading 1 </label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="dheading1" value="<?php echo htmlentities($row['dheading1']); ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Description 1</label>
                        <div class="col-sm-6">
                          <textarea class="form-control" name="ddesc1" style="height:140px;"><?php echo htmlentities($row['ddesc1']); ?></textarea>
                        </div>
                      </div>

                        <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Icon 2 </label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="dicon2" value="<?php echo htmlentities($row['dicon2']); ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Heading 2 </label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="dheading2" value="<?php echo htmlentities($row['dheading2']); ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Description 2</label>
                        <div class="col-sm-6">
                          <textarea class="form-control" name="ddesc2" style="height:140px;"><?php echo htmlentities($row['ddesc2']); ?></textarea>
                        </div>
                      </div>

                        <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Icon 3 </label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="dicon3" value="<?php echo htmlentities($row['dicon3']); ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Heading 3 </label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="dheading3" value="<?php echo htmlentities($row['dheading3']); ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Description 3</label>
                        <div class="col-sm-6">
                          <textarea class="form-control" name="ddesc3" style="height:140px;"><?php echo htmlentities($row['ddesc3']); ?></textarea>
                        </div>
                      </div>

                        <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Icon 4 </label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="dicon4" value="<?php echo htmlentities($row['dicon4']); ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Heading 4 </label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="dheading4" value="<?php echo htmlentities($row['dheading4']); ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Description 4</label>
                        <div class="col-sm-6">
                          <textarea class="form-control" name="ddesc4" style="height:140px;"><?php echo htmlentities($row['ddesc4']); ?></textarea>
                        </div>
                      </div>

                        <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Icon 5 </label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="dicon5" value="<?php echo htmlentities($row['dicon5']); ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Heading 5 </label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="dheading5" value="<?php echo htmlentities($row['dheading5']); ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Description 5</label>
                        <div class="col-sm-6">
                          <textarea class="form-control" name="ddesc5" style="height:140px;"><?php echo htmlentities($row['ddesc5']); ?></textarea>
                        </div>
                      </div>

                        <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Icon 6 </label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="dicon6" value="<?php echo htmlentities($row['dicon6']); ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Heading 6 </label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="dheading6" value="<?php echo htmlentities($row['dheading6']); ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Description 6</label>
                        <div class="col-sm-6">
                          <textarea class="form-control" name="ddesc6" style="height:140px;"><?php echo htmlentities($row['ddesc6']); ?></textarea>
                        </div>
                      </div>


                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Icon 7 </label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="dicon7" value="<?php echo htmlentities($row['dicon7']); ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Heading 7 </label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="dheading7" value="<?php echo htmlentities($row['dheading7']); ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Description 7</label>
                        <div class="col-sm-6">
                          <textarea class="form-control" name="ddesc7" style="height:140px;"><?php echo htmlentities($row['ddesc7']); ?></textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Icon 8 </label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="dicon8" value="<?php echo htmlentities($row['dicon8']); ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Heading 8 </label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="dheading8" value="<?php echo htmlentities($row['dheading8']); ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Description 8</label>
                        <div class="col-sm-6">
                          <textarea class="form-control" name="ddesc8" style="height:140px;"><?php echo htmlentities($row['ddesc8']); ?></textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Icon  9</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="dicon9" value="<?php echo htmlentities($row['dicon9']); ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Heading  9</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="dheading9" value="<?php echo htmlentities($row['dheading9']); ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Description 9</label>
                        <div class="col-sm-6">
                          <textarea class="form-control" name="ddesc9" style="height:140px;"><?php echo htmlentities($row['ddesc9']); ?></textarea>
                        </div>
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

          <div class="tab-pane" id="tab_2">

              <form class="form-horizontal" action="" method="post">
                        <?php 
                        $query = mysqli_query($conn,"select * from digital");
                        while($row = mysqli_fetch_array($query))
                        {
                         ?>
              <div class="box box-info">
                <div class="box-body">
                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Youtube Iframe </label>
                        <div class="col-sm-6">
                          <textarea class="form-control" name="youtube1" style="height:140px;"><?php echo htmlentities($row['youtube1']); ?></textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="" class="col-sm-6 control-label">Why Should I have a Vcard?</label>
                      </div>

                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Icon 1 </label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="icon11" value="<?php echo htmlentities($row['icon11']); ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Heading 1 </label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="heading11" value="<?php echo htmlentities($row['heading11']); ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Description 1</label>
                        <div class="col-sm-6">
                          <textarea class="form-control" name="desc11" style="height:140px;"><?php echo htmlentities($row['desc11']); ?></textarea>
                        </div>
                      </div>

                        <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Icon 2 </label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="icon22" value="<?php echo htmlentities($row['icon22']); ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Heading 2 </label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="heading22" value="<?php echo htmlentities($row['heading22']); ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Description 2</label>
                        <div class="col-sm-6">
                          <textarea class="form-control" name="desc22" style="height:140px;"><?php echo htmlentities($row['desc22']); ?></textarea>
                        </div>
                      </div>

                        <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Icon 3 </label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="icon33" value="<?php echo htmlentities($row['icon33']); ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Heading 3 </label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="heading33" value="<?php echo htmlentities($row['heading33']); ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Description 3</label>
                        <div class="col-sm-6">
                          <textarea class="form-control" name="desc33" style="height:140px;"><?php echo htmlentities($row['desc33']); ?></textarea>
                        </div>
                      </div>

                        <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Icon 4 </label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="icon44" value="<?php echo htmlentities($row['icon44']); ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Heading 4 </label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="heading44" value="<?php echo htmlentities($row['heading44']); ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Description 4</label>
                        <div class="col-sm-6">
                          <textarea class="form-control" name="desc44" style="height:140px;"><?php echo htmlentities($row['desc44']); ?></textarea>
                        </div>
                      </div>

                        <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Icon 5 </label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="icon55" value="<?php echo htmlentities($row['icon55']); ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Heading 5 </label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="heading55" value="<?php echo htmlentities($row['heading55']); ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Description 5</label>
                        <div class="col-sm-6">
                          <textarea class="form-control" name="desc55" style="height:140px;"><?php echo htmlentities($row['desc55']); ?></textarea>
                        </div>
                      </div>

                        <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Icon 6 </label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="icon66" value="<?php echo htmlentities($row['icon66']); ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Heading 6 </label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="heading66" value="<?php echo htmlentities($row['heading66']); ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Description 6</label>
                        <div class="col-sm-6">
                          <textarea class="form-control" name="desc66" style="height:140px;"><?php echo htmlentities($row['desc66']); ?></textarea>
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
            <div class="tab-pane" id="tab_3">

              <form class="form-horizontal" action="" method="post">
                <?php $query = mysqli_query($conn,"select * from smm");
                while($row = mysqli_fetch_array($query))
                {
                 ?>
                    <div class="box box-info">
                <div class="box-body">
                  

                 <!--  <div class="form-group">
                    <label for="" class="col-sm-6 control-label">Why Should I have a Vcard?</label>
                  </div> -->

                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Icon 1 </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="social1" value="<?php echo htmlentities($row['social1']); ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Heading 1 </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="sheading1" value="<?php echo htmlentities($row['sheading1']); ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Description 1</label>
                    <div class="col-sm-6">
                      <textarea class="form-control" name="sdesc1" style="height:140px;"><?php echo htmlentities($row['sdesc1']); ?></textarea>
                    </div>
                  </div>

                    <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Icon 2 </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="social2" value="<?php echo htmlentities($row['social2']); ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Heading 2 </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="sheading2" value="<?php echo htmlentities($row['sheading2']); ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Description 2</label>
                    <div class="col-sm-6">
                      <textarea class="form-control" name="sdesc2" style="height:140px;"><?php echo htmlentities($row['sdesc2']); ?></textarea>
                    </div>
                  </div>

                    <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Icon 3 </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="social3" value="<?php echo htmlentities($row['social3']); ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Heading 3 </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="sheading3" value="<?php echo htmlentities($row['sheading3']); ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Description 3</label>
                    <div class="col-sm-6">
                      <textarea class="form-control" name="sdesc3" style="height:140px;"><?php echo htmlentities($row['sdesc3']); ?></textarea>
                    </div>
                  </div>

                    <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Icon 4 </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="social4" value="<?php echo htmlentities($row['social4']); ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Heading 4 </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="sheading4" value="<?php echo htmlentities($row['sheading4']); ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Description 4</label>
                    <div class="col-sm-6">
                      <textarea class="form-control" name="sdesc4" style="height:140px;"><?php echo htmlentities($row['sdesc4']); ?></textarea>
                    </div>
                  </div>

                    <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Icon 5 </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="social5" value="<?php echo htmlentities($row['social5']); ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Heading 5 </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="sheading5" value="<?php echo htmlentities($row['sheading5']); ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Description 5</label>
                    <div class="col-sm-6">
                      <textarea class="form-control" name="sdesc5" style="height:140px;"><?php echo htmlentities($row['sdesc5']); ?></textarea>
                    </div>
                  </div>

                    <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Icon 6 </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="social6" value="<?php echo htmlentities($row['social6']); ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Heading 6 </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="sheading6" value="<?php echo htmlentities($row['sheading6']); ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Description 6</label>
                    <div class="col-sm-6">
                      <textarea class="form-control" name="sdesc6" style="height:140px;"><?php echo htmlentities($row['sdesc6']); ?></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label"></label>
                    <div class="col-sm-6">
                      <button type="submit" class="btn btn-success pull-left" name="form5">Update</button>
                    </div>
                  </div>






                 
                  </div>
                </div>
              
              <?php } ?>
              </form>


                  </div>



                  <div class="tab-pane" id="tab_7">

                    <form class="form-horizontal" action="" method="post">
              
                  
                  
              <div class="box-group" id="accordion">
                
                <!-- Service Section -->
                <div class="panel box box-primary">
                  <div class="box-header">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                        Service
                      </a>
                    </h4>
                  </div>
                  <div id="collapse1" class="panel-collapse collapse">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Title </label>
                        <div class="col-sm-9">
                          <input type="text" name="home_title_service" class="form-control" value="Cosmic Web Solution Prime Services ">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">SubTitle </label>
                        <div class="col-sm-9">
                          <input type="text" name="home_subtitle_service" class="form-control" value="Check Out All Our IT Services">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Show on Home? </label>
                        <div class="col-sm-9" style="padding-top:7px;">
                          <input type="checkbox" name="home_status_service" value="1" checked>
                        </div>
                      </div>                      
                    </div>
                  </div>
                </div>
                <!-- // Service Section -->



                <!-- Team Member Section -->
                <div class="panel box box-primary">
                  <div class="box-header">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                        Team Member
                      </a>
                    </h4>
                  </div>
                  <div id="collapse3" class="panel-collapse collapse">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Title </label>
                        <div class="col-sm-9">
                          <input type="text" name="home_title_team_member" class="form-control" value="Team Members">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">SubTitle </label>
                        <div class="col-sm-9">
                          <input type="text" name="home_subtitle_team_member" class="form-control" value="Meet with All Our Qualified Team Members">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Show on Home? </label>
                        <div class="col-sm-9" style="padding-top:7px;">
                          <input type="checkbox" name="home_status_team_member" value="1" checked>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- // Team Member Section -->




                <!-- Testimonial Section -->
                <div class="panel box box-primary">
                  <div class="box-header">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                        Testimonial
                      </a>
                    </h4>
                  </div>
                  <div id="collapse5" class="panel-collapse collapse">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Title </label>
                        <div class="col-sm-9">
                          <input type="text" name="home_title_testimonial" class="form-control" value="Testimonial">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">SubTitle </label>
                        <div class="col-sm-9">
                          <input type="text" name="home_subtitle_testimonial" class="form-control" value="Our Happy Clients Tell About Us">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Show on Home? </label>
                        <div class="col-sm-9" style="padding-top:7px;">
                          <input type="checkbox" name="home_status_testimonial" value="1" checked>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- // Testimonial Section -->



                <!-- Latest News Section -->
                <div class="panel box box-primary">
                  <div class="box-header">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
                        Latest News
                      </a>
                    </h4>
                  </div>
                  <div id="collapse6" class="panel-collapse collapse">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Title </label>
                        <div class="col-sm-9">
                          <input type="text" name="home_title_news" class="form-control" value="Latest News">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">SubTitle </label>
                        <div class="col-sm-9">
                          <input type="text" name="home_subtitle_news" class="form-control" value="See All Our Updated and Latest News">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Show on Home? </label>
                        <div class="col-sm-9" style="padding-top:7px;">
                          <input type="checkbox" name="home_status_news" value="1" checked>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- // Latest News Section -->



                <!-- Partner Section -->
                <div class="panel box box-primary">
                  <div class="box-header">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
                        Partner
                      </a>
                    </h4>
                  </div>
                  <div id="collapse7" class="panel-collapse collapse">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Title </label>
                        <div class="col-sm-9">
                          <input type="text" name="home_title_partner" class="form-control" value="Our Partners">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">SubTitle </label>
                        <div class="col-sm-9">
                          <input type="text" name="home_subtitle_partner" class="form-control" value="All Our Company Partners are Listed Below">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Show on Home? </label>
                        <div class="col-sm-9" style="padding-top:7px;">
                          <input type="checkbox" name="home_status_partner" value="1" checked>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- // Partner Section -->

                
              </div>


              <div class="form-group">
                <div class="col-sm-6">
                  <button type="submit" class="btn btn-success pull-left" name="form7">Update</button>
                </div>
              </div>
              

              </form>


                  </div>



                  <div class="tab-pane" id="tab_8">

                    <form class="form-horizontal" action="" method="post">
              <div class="box box-info">
                <div class="box-body">
                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Mode Rewrite </label>
                    <div class="col-sm-4">
                      <select name="mod_rewrite" class="form-control" style="width:auto;">
                        <option value="Off" selected>Off</option>
                        <option value="On" >On</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label"></label>
                    <div class="col-sm-6">
                      <button type="submit" class="btn btn-success pull-left" name="form8">Update</button>
                    </div>
                  </div>
                </div>
              </div>
              </form>


                  </div>






                </div>
        </div>

        

      </form>
    </div>
  </div>

 		
 	</div>
    



 







  <?php include("footer.php"); ?>
















