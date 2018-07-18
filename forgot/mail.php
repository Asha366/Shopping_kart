<?php
include("../include/settings1.php");
include "classes/class.phpmailer.php";

if(isset($_POST["btnUpdate"]))//"btnLogin" is login button's name and post function fetches the info return 1 and isset checks that login button is set
{
  if(trim($_POST["email"])!=null)
{
  $sql=$mysqli->prepare("select pass from signup where email=?");
$sql->bind_param("s",$_POST["email"]);
$sql->execute();
$sql->bind_result($password);
if($sql->fetch()>0)
{




$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
$mail->Host = "smtp.gmail.com";
$mail->Port = 587; // or 587
$mail->IsHTML(true);
$mail->Username = ("ashathakur366@gmail.com");
$mail->Password = ("asha123@");
//$mail->SetFrom("abc@gmail.com");
$mail->Subject = "Reset password";
$mail->Body = "your password is:".$password."</b>"; 


$mail->AddAddress($_POST["email"]);   //mail address of sender
}
if(!$mail->Send())
{
  echo "Mailer Error: " . $mail->ErrorInfo;
}
}
}
if(isset($_POST["login"]))
{
  header("location:".baseurl()."login.php");

}



?>
<!----------------------------------->
<!doctype html>
<html>
  <head>
    <title>forgot password</title>
   

    <!-- Bootstrap CSS -->


    <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script></script>
     <link rel="stylesheet" href="main.css">
  
  </head>
  
  
  
<body background="https://images.pexels.com/photos/697059/pexels-photo-697059.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
  <div class="login">

    <form action="" method="POST">
       <center><b><h3>Forgot your password?<br>Enter your email</h3></b></center>
       <center>we will send your password on your email</center>
  
  <!------------------------------------------------------Email-------------------------------------------------------------------->
<div class="col-sm-12">
<div class="form-group">
<b>Email</b></div>
<input type="email" name="email" placeholder="Email"  class="form-control">
</div>
<!------------------------------------------------------Password-------------------------------------------------------------------->




<!-------------------------------------------------------------------------------------------------------------------------->
<div class="row">
<div class="col-sm-6">
<div class="form-group"></div>
<input type="submit"  name="btnUpdate" value="Submit"  class="btn btn-info form-control" href="reset.php"/>
</div>
<div class="col-sm-6">
<div class="form-group"></div>
<input type="reset" value="Reset"  class="btn btn-warning form-control"/>
</div>
<center><b>recieved email?</b></center>
<div class="col-sm-12">
<div class="form-group"></div>
<input type="submit" value="LOGIN NOW" name="login" class="btn btn-info form-control" />
</div>

</div>

</div>

</div>

</form>

  
  </body>
</html>