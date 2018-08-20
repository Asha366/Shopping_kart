<!DOCTYPE html>
<?php
$msg="";
include("../include/settings1.php");
include "classes/class.phpmailer.php";
//include("../include/check_session.php");
if(isset($_POST['btnUpdate']))
{
    if(($_POST["firstname"]!=null)&&($_POST["lastname"]!=null)&&($_POST["email"]!=null)&&($_POST["message"]!=null))
    {

        $sql=$mysqli->prepare("insert into contactus(firstname,lastname,email,message)values(?,?,?,?)");
        $sql->bind_param("ssss",$_POST["firstname"],$_POST["lastname"],$_POST["email"],$_POST["message"]);
        $sql->execute();
        $sql->close();
        $msg="records inserted successfully";
    }
    else{

        $msg="fields should not be empty";
    }
//for mail

    $mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
$mail->Host = "smtp.gmail.com";
$mail->Port = 587; // or 587
$mail->IsHTML(true);
$mail->Username = "ashathakur366@gmail.com";
$mail->Password = "";
//$mail->SetFrom("abc@gmail.com");
$mail->Subject = "Contact Us query";
$mail->Body = "<b>User's contact us query: ".$_POST["message"]."</b>";


$mail->AddAddress($_POST["email"]);  
    //mail address of sender

//$mail->AddAddress("ashathakur366@gmail.com"); 
if(!$mail->Send())
{
    echo "Mailer Error: " . $mail->ErrorInfo;
}
}
    

?>



<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact Form HTML/CSS Template - reusable form</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">


<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.7.9, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="">


 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans:400,700&subset=latin,vietnamese,latin-ext">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&subset=latin,cyrillic">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/puritym/css/style.css">
  <link rel="stylesheet" href="assets/dropdown-menu/style.light.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">



    
        <script src="form.js"></script>
        <link rel="stylesheet" href="contactus.css">

        
    </head>
    <body background="https://images.pexels.com/photos/346752/pexels-photo-346752.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">


  <!-----------------------------------navbar--------------------------------------------------------------------------->
  <section id="dropdown-menu-2btn-1" data-rv-view="585">

    <nav class="navbar navbar-dropdown navbar-fixed-top">

        <div class="container">

            <div class="navbar-brand">
                <a href="https://mobirise.com" class="navbar-logo"><img src="assets/images/logo.png" alt="Mobirise"></a>
                <a class="text-black" href="../index.html">ASR MAGASIN </a>
            </div>

            <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                <div class="hamburger-icon"></div>
            </button>

            <ul class="nav-dropdown collapse pull-xs-right navbar-toggleable-sm nav navbar-nav" id="exCollapsingNavbar"><li class="nav-item dropdown open"></li>
                <!---------------------------------------------contactus----------------------->
                
                <!---------------------------------login----------------------->
                <li class="nav-item nav-btn"><a class="nav-link btn btn-black btn-black-outline" href="../login.php">Login</a></li><li class="nav-item nav-btn">
                   <!---------------------------------signup----------------------->
                    <a class="nav-link btn btn-danger" href="../sign.php">Signup</a></li></ul>

        </div>
      
    </nav>

</section>
   




        <div class="container">
            <div id="form-main">
                <div id="form-div">
                    <form class="montform" method="POST">
                        <p class="name">
                            <input name="firstname" type="text" class="feedback-input" placeholder="First Name" id="name" />
                        </p>
                         <p class="name">
                            <input name="lastname" type="text" class="feedback-input" placeholder="Last Name" id="name" />
                        </p>
                        <p class="email">
                            <input name="email" type="email" required class="feedback-input" id="email" placeholder="Email" />
                        </p>
                        <p class="text">
                            <textarea name="message" class="feedback-input" id="comment" placeholder="Message"></textarea>
                        </p>
                        <div class="submit">
                            <button type="submit" class="button-blue" name="btnUpdate">SUBMIT</button>
                            <div class="ease"></div>
                        </div>
                    </form>
                    <div id="error_message" style="width:100%; height:100%; display:none; ">
                        <h4>
                            Error
                        </h4>
                        Sorry there was an error sending your form. 
                    </div>
                    <div id="success_message" style="width:100%; height:100%; display:none; "> <h2>Success! Your Message was Sent Successfully.</h2> </div>
                </div>
            </div>
        </div>
    </body>
</html>