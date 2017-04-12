<?php

session_start();
/*if (isset($_SESSION['message'])) {
  echo $_SESSION['message'];
  unset($_SESSION['message']);
}*/

   /*$db = mysqli_connect("localhost:8889","root","root","authentication");
  // $fullname = $_SESSION['login_user'];
   
   $sql = mysqli_query($db,"SELECT register from users where register = '$register' ");
   
   $row = mysqli_fetch_array($sql,MYSQLI_ASSOC);
   
   $_SESSION['register'] = $row['$register'];
   if (isset($_SESSION['register'])) {
    echo $row['$register'];
  unset($_SESSION['register']);
}*/
   
  // if(!isset($_SESSION['login_user'])){
  //    header("location:login.php");
 //  }

?>




<!DOCTYPE html>
<html>
<head>
     <title> Access Your App</title>
     <link rel ="stylesheet" type="text/css" href="style.css">
</head>

<body background="2.jpg">
<!--<IMG STYLE="position:absolute; TOP:35px; LEFT:1100px; WIDTH:100px; HEIGHT:100px" SRC="sjsu logo.png">-->
<iframe src="compass2.jpg"  width="1380" height="400" ></iframe>
<!--<iframe src="//giphy.com/embed/ZNQTBe70EBsD6" width="1380" height="400"   allowFullScreen></iframe><p><a href="https://giphy.com/gifs/think-location-ZNQTBe70EBsD6"></a></p>
-->

<h1>HomePage</h1>
<div style ='font:14px/21px Arial;color:#000000'><p >You are logged in. <?php if (isset($_SESSION['message'])) {
  echo "<div style ='font:14px/21px Arial;color:#ff0000'>".$_SESSION['message']."</div>";
  unset($_SESSION['message']);
} ?></p></div>
<!--<div><h4>Welcome To SJSU Page <?php //echo ($_SESSION['message']); ?></h4></div>-->
<center><img src="OnStar.jpg"  style="width:304px;height:400px;" ></center>
 <div style="position: absolute; top:420px; right: 0; width: 100px; text-align:right;">
<a href="logout.php"><h2 align=right  >Logout</h2></a></div>
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