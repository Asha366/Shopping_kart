<?php
include("include/settings1.php");//including the file which we have made
$msg="";
if(isset($_POST["btnLogin"]))//"btnLogin" is login button's name and post function fetches the info return 1 and isset checks that login button is set
{
  if(trim($_POST["email"])!=null&&trim($_POST["pass"]!=null))
{




$sql=$mysqli->prepare("select * from signup where email = ?");
$sql->bind_param("s",$_POST["email"]);
$sql->execute();
$sql->bind_result($user_id,$firstname,$lastname,$email,$pass,$number,$gender);
if($sql->fetch()>0 && $_POST["pass"]==$pass)
{
  $_SESSION["userId"]=$user_id;
  $_SESSION["userEmail"]=$email;

   header("location:".baseurl()."index1.html");


}
else{
  
   echo "<script>alert('invalid email or password')</script>";
 // echo <script> alert("invalid email and password");</script>


}
}
else{
  $msg="Enter email and password";
}
}
?>
<!----------------------------------->
<!doctype html>
<html>
  <head>
    <title>log in Page</title>
   
   <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.7.9, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Home</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans:400,700&subset=latin,vietnamese,latin-ext">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&subset=latin,cyrillic">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/puritym/css/style.css">
  <link rel="stylesheet" href="assets/dropdown-menu/style.light.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

    <!-- Bootstrap CSS -->


    <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script></script>
     <link rel="stylesheet" href="main.css">
  
  </head>
  
  
  
<body>
<section id="dropdown-menu-2btn-1" data-rv-view="585">

    <nav class="navbar navbar-dropdown navbar-fixed-top">

        <div class="container">

            <div class="navbar-brand">
                <a href="https://mobirise.com" class="navbar-logo"><img src="assets/images/logo.png" alt="Mobirise"></a>
                <a class="text-black" href="index.html">ASR MAGASIN </a>
            </div>

            <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                <div class="hamburger-icon"></div>
            </button>

            <ul class="nav-dropdown collapse pull-xs-right navbar-toggleable-sm nav navbar-nav" id="exCollapsingNavbar"><li class="nav-item dropdown open">


                
                </li>
                <!---------------------------------------------contactus----------------------->
                <li class="nav-item"><a class="nav-link link" href="contactus/formpage.php">Contact Us</a></li>

                 <li class="nav-item"><a class="nav-link link" href="feedback/feedback.php">Feedback</a></li>
                <!---------------------------------login----------------------->
                <li class="nav-item nav-btn">
                   <!---------------------------------signup----------------------->
                    <a class="nav-link btn btn-danger" href="sign.php">Signup</a></li></ul>

        </div>
      
    </nav>

</section>



  <div class="login">

    <form action="" method="POST">
       <center><b><h3>Login</h3></b></center>
  
  <!------------------------------------------------------Email-------------------------------------------------------------------->
<div class="col-sm-12">
<div class="form-group">
<b>Email</b></div>
<input type="email" name="email" placeholder="Email"  class="form-control" required/>
</div>
<!------------------------------------------------------Password-------------------------------------------------------------------->
<div class="col-sm-12">
<div class="form-group">
<b>Password</b></div>
<input type="password" name="pass" placeholder="Password"  class="form-control"  required/>
</div><strong></strong>

         &nbsp;&nbsp; &nbsp;<a href="forgot/mail.php" name="forgetpswrd" ><b>Forgot Password</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <span> <a href="sign.php" name="forgetpswrd" ><b>Create new Account</b></a></span>





<!-------------------------------------------------------------------------------------------------------------------------->
<div class="row">
<div class="col-sm-6">
<div class="form-group"></div>
<input type="submit"  name="btnLogin" value="Login"  class="btn btn-info form-control"/>
</div>
<div class="col-sm-6">
<div class="form-group"></div>
<input type="reset" value="Reset"  class="btn btn-warning form-control"/>
</div>
</div>
</div>
</div>

</form>

  
  </body>
</html>