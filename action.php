<?php
ob_start();
if(isset($_POST['submit'])){
    require'phpmailer/PHPMailerAutoload.php';
    $name= $_POST['name'];
    $phone= $_POST['phone'];
    $email= $_POST['email'];
    $subject= $_POST['subject'];
    $address= $_POST['address'];
    $msg= $_POST['msg'];
    
    $mail= new PHPMailer;  
    $mail->Host='smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';
    $mail->username='info@iafsindia.com'; 
    $mail->password="";
    $mail->setfrom($_POST['email'],$_POST['name']);
    $mail->addAddress('info@iafsindia.com');
    $mail->addReplyTo($_POST['email'],$_POST['name']);
    $mail->isHTML(true);
    $mail->Body='<h3>Name :' .$_POST['name'].'<br> Phone No :' .$_POST['phone'].' <br> Email :' .$_POST['email'].'<br> Subject :' .$_POST['subject'].'<br> Address :' .$_POST['address'].'<br> Message :' .$_POST['msg'].'<h3>';
    
    if(!$mail->send()){
        // $result = "something went worng. please try again";
        header("Location: index.php");
    }
    else{
        // $result="thanks\t" .$_POST['name']. "for connecting us.";
        echo'<script type="text/javascript"> alert("sucessfully sent")</script>';
        header("Location: home.php");
    }
  
}


?>