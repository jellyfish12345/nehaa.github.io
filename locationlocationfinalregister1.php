<?php

session_start();



//$db = mysqli_connect("localhost:8889","root","root","authentication");
$db = mysqli_connect("localhost:8889","root","root","authentication");
if (!$db) {
    die("Database connection failed: " . mysqli_connect_error());
}


if (isset($_POST['register_btn'])) {
	
     
     $username = mysqli_real_escape_string($db,$_POST['fullname']);
     $email = mysqli_real_escape_string($db,$_POST['email']);
     $password = mysqli_real_escape_string($db,$_POST['password']);
     $password2 = mysqli_real_escape_string($db,$_POST['password2']);
     $place = mysqli_real_escape_string($db,$_POST['place']);
     $place1 = mysqli_real_escape_string($db,$_POST['place1']);
     $register = mysqli_real_escape_string($db,$_POST['register']);
     $date = mysqli_real_escape_string($db,$_POST['date']);
     $timestamp = mysqli_real_escape_string($db,$_POST['time']);
     
     
    /* if ($password == $password2) {
     //create user
     $password =md5($password);// hash password before
     $sql = "INSERT INTO users (fullname , email , password, place , place1, register , date ,time) VALUES ('$username','$email','$password','$place', '$place1','$register','" .date("Y-m-d"). "','".date("h:i")."')";
  	 header("location: authentication/home.php");//redirected to homepage
     if (mysqli_query($db, $sql)) {
     echo "New record created successfully";
     $_SESSION['message']= "You are now logged in ";
     $_SESSION['fullname']=$username;
     $_SESSION['register']=$register;
     header("location: authentication/home.php");
     } else {
     
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
    
     }
     } else {
       //failed
       
       $_SESSION['message']="The two passwords do not match ";
	 }*/
	 if ($password == $password2) {
     //create user
     $password =md5($password);// 
	 
	 $sql = "SELECT email FROM users WHERE email='$email'";
	 
	$result = mysqli_query($db,$sql);
	
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 
	if(mysqli_num_rows($result) == 1) {
	 echo "Sorry...This email already exist..";
	} elseif  (mysqli_num_rows($result) != 1) {
	     $query =  "INSERT INTO users (fullname , email , password, place , place1, register , date ,time) VALUES ('$username','$email','$password','$place', '$place1','$register','" .date("Y-m-d"). "','".date("h:i")."')";
         $result1 = mysqli_query($db,$query);
         if($result1) {
            header("location: locationlocationlogin1.php");
            echo "succesfull";
        }
	   // $_SESSION['message']= "You are now logged in "
      // header("location: authentication/home.php");/// some different page 
    }
   
	
	}

     mysqli_close($db);
     
     
     }
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
<h1> Register </h1>

<form method="post" action="locationlocationfinalregister1.php">

  
   <table>
      <tr>
          <td> Username:</td>
          <td><input type="text" name="fullname" class="textInput"></td>
       </tr>   
       
       <tr>
          <td> Email:</td>
          <td><input type="email" name="email" class="textInput"></td>
       </tr>   
       
       <tr>
          <td> Password:</td>
          <td><input type="password" name="password" class="textInput"></td>
       </tr>   
       
       <tr>
          <td> Confirm Password:</td>
          <td><input type="password" name="password2" class="textInput"></td>
       </tr>   
       
   
       
       <tr>
          <td> Latitude:</td>
          <td><input type="text" name="place" class="textInput"></td>
       </tr>   
       
       <tr>
          <td> Longitude:</td>
          <td><input type="text" name="place1" class="textInput"></td>
       </tr>   
       
       
     
       
       <tr>
          <td> Register #:</td>
          <td><input type="text" name="register" class="textInput"></td>
       </tr>   
       
       <tr>
          <td> Date:</td>
          <td><input type="date" name="date" ></td>
       </tr>   
       
          
       <tr>
          <td> Time:</td>
          <td><input type="time" name="time" ></td>
       </tr>   
       
       
       
       
       
       <tr>
          
          <td><input type="submit" name="register_btn" value="Register"></td>
       </tr>  
       </table> 


</form>
<footer class="footer" style="background:#d2a679;height:150px;width:1000" >
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