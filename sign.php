<!DOCTYPE html>
<?php
$msg="";
include("include/settings1.php");
//include("../include/check_session.php");
if(isset($_POST['btnRegister']))
{
    if(($_POST["firstname"]!=null)&&($_POST["lastname"]!=null)&&($_POST["email"]!=null)&&($_POST["pass"]!=null)&&($_POST["number"]!=null)&&($_POST["gender"]!=null))
    {

        $sql=$mysqli->prepare("insert into signup(firstname,lastname,email,pass,number,gender)values(?,?,?,?,?,?)");
        $sql->bind_param("ssssis",$_POST["firstname"],$_POST["lastname"],$_POST["email"],$_POST["pass"],$_POST["number"],$_POST["gender"]);
        $sql->execute();
        $sql->close();
        $msg="information inserted successfully";
          header("location:".baseurl()."login.php");
    }
    else{

        $msg="fields should not be empty";
    }
}
    

?>



<!doctype html>
<html>
  <head>
    <title>Sign-up Page</title>
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
  <script src="bootstrap.min.js"></script>
	   <link rel="stylesheet" href="sign.css">


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
                    <a class="nav-link btn btn-danger" href="login.php">Login</a></li></ul>

        </div>
      
    </nav>

</section>




  

          <div class="login">
    <form action="" method="POST">
       <center><b><h3>Sign-up</h3></b></center>
 <!------------------------------------------------------ First Name---------------------------------------------------------------->
 <div class="col-sm-12">
<div class="form-group">
<b>First Name</b></div>
<input type="text" name="firstname" placeholder="Name"  class="form-control" required/>
</div>
    

 <!------------------------------------------------------ Last Name---------------------------------------------------------------->
<div class="col-sm-12">
<div class="form-group">
<b>Last Name</b></div>
<input type="text" name="lastname" placeholder="Name"  class="form-control" required/>
</div>
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
<input type="password" name="pass" placeholder="Password"   class="form-control"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
</div><strong></strong>
<!------------------------------------------------------Mobile number-------------------------------------------------------------------->
<div class="col-sm-12">
<div class="form-group">
<b>Mobile Number<b></div>
<input type="text" name="number" placeholder="Mobile Number(for order  status update)" pattern="(?=.*[0-9]).{11}"  class="form-control" title="Must contain  10 digits" required/>
</div>
<!------------------------------------------------------Gender-------------------------------------------------------------------->
<div class="col-sm-12">



  <div class="form-group">
<b>Choose your Gender<b></div>
            <input type="radio" name="gender" value="male" required/> male
                      <input type="radio" name="gender" value="female"> female
 

</div>





<!-------------------------------------------------------------------------------------------------------------------------->
<div class="row">
<div class="col-sm-6">
<div class="form-group"></div>
<input type="submit"  name="btnRegister" value="Register"  class="btn btn-info form-control"/>
</div>
<div class="col-sm-6">
<div class="form-group"></div>
<input type="reset" value="Reset"  class="btn btn-warning form-control"/>
</div>
</div>
<!------------------------------------------------------------------------------------------------------------------------------>
<br>
<div>
 <center> <a href="login.php"><b>Already have an account?</b></a></center>
</div>


</div>
</div>
</form>

        </div>
      </div>
      
    </div>
  </div>
  
</div>

</body>
</html>
  
  </body>
</html>