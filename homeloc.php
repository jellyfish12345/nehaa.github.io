<?php

session_start();
 
/*if (isset($_SESSION['message'])) {
  echo $_SESSION['message'];
  unset($_SESSION['message']);
}*/////

//$db = mysqli_connect("localhost:8889","root","root","authentication");
   $email = $_SESSION['email'];
  //$v= $email;
 // echo "$v";
  
  $msg = "Sorry you logged in from different place. Please enter the location you registered with.";
        $msg = wordwrap($msg,70);
        mail($_SESSION['email'],"My subject",$msg);
   
  // $sql = mysqli_query($db,"SELECT email from users where email = '$email' ");
   
   //$row = mysqli_fetch_array($sql,MYSQLI_ASSOC);
  // $_SESSION['email']=$row['email'];
      /* $msg = "Sorry you logged in from different place. Please enter the location you registered with.";
        $msg = wordwrap($msg,70);
        mail("neha.bassi@sjsu.edu","My subject",$msg);*/
   
  // $_SESSION['email'] = $row['$email'];
   /*if (isset($_SESSION['email'])) {
        $_SESSION['email']=$row['email'];
       $msg = "Sorry you logged in from different place. Please enter the location you registered with.";
        $msg = wordwrap($msg,70);
        mail($_SESSION['email'],"My subject",$msg);
        }*/
// use wordwrap() if lines are longer than 70 characters


// send email
//mail("neha.bassi@sjsu.edu","My subject",$msg);

//echo "$_SESSION['email']";


?>




<!DOCTYPE html>
<html>
<head>
     <title> Register, login and logout user php mysql</title>
     <link rel ="stylesheet" type="text/css" href="style.css">
</head>

<body background="2.jpg">
<!--<IMG STYLE="position:absolute; TOP:35px; LEFT:1100px; WIDTH:100px; HEIGHT:100px" SRC="sjsu logo.png">-->
<iframe src="compass2.jpg"  width="1380" height="400" ></iframe>

<h1>Home</h1>
<!--<div><h4>Welcome To SJSU Page <?php //echo $_SESSION['register']; ?></h4></div>-->
<div style ='font:14px/21px Arial;color:#000000'><p >"You are logged in from different location incorrect." <?php if (isset($_SESSION['message'])) {
  echo "<div style ='font:14px/21px Arial;color:#ff0000'>".$_SESSION['message']."</div>";
  unset($_SESSION['message']);
} ?></p></div>
 <div style="position: absolute; top:420px; right: 0; width: 100px; text-align:right;">
<a href="logout.php"><h2 align=right >Logout</h2></a></div>

<footer class="footer" style="background:#d2a679;height:150px;" >
<div>
  <p>Posted by: Neha</p>
  <p>Contact information: <a href="mailto:neha1@local.com">
  neha1@local.com</a>.</p>
  </div>
</footer>
<style>
.footer {
    color: #333;
    font-size: 20px;
    text-align: center;
    vertical-align: bottom;
    margin-top: 120px;
}

</style>
</body>
</html>