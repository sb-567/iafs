<?php
ini_set('display_errors', 1);
include( 'config.php');
      
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

    ?>