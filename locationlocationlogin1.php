<?php 

session_start();
//include("t5copy16feb.php");

//echo $code;


$db = mysqli_connect("localhost:8889","root","root","authentication");
if (!$db) {
    die("Database connection failed: " . mysqli_connect_error());
   }
//echo "Connected successfully";


if (isset($_POST['login_btn'])) {
	
     
     
     $register = mysqli_real_escape_string($db,$_POST['register']);
     $password = mysqli_real_escape_string($db,$_POST['password']);
     $place = $_POST['place'];
     $place1 = $_POST['place1'];
    // $location = mysqli_real_escape_string($db,$_POST['location']);
     //echo gettype($place);
     $password = md5($password);
   // $sql= "SELECT id FROM users WHERE register ='$register' AND password='$password' AND location='$location'";
    $sql = "SELECT place, place1,email FROM users WHERE register ='$register' AND password='$password'";
   // $sql1 = "SELECT fullname FROM users WHERE register ='$register' AND password='$password'"
   
       $result = mysqli_query($db,$sql);
       $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
       //echo gettype($row['place']);
     //  $result1 = mysqli_query($db,$sql1);
      // $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
      // echo var_dump(($row['place']));
     // echo var_dump((mysqli_num_rows($result)));
     
       // function distance($place, $place1, $row['place'], $row['place1'], "M") {
         //echo var_dump($place);
         // echo var_dump($row['place']);
        $enterlat =floatval($place);
        $enterlongg=floatval($place1);
        $reglat=floatval($row['place']);
         $reglong=floatval($row['place1']);

 		 $theta = $enterlongg - $reglong;
 		 $dist = sin(deg2rad($enterlat)) * sin(deg2rad($reglat)) +  cos(deg2rad($enterlat)) * cos(deg2rad($reglat)) * cos(deg2rad($theta));
 		 $dist = acos($dist);
 		 $dist = rad2deg($dist);
		  $miles = $dist * 60 * 1.1515;
 	//	 echo $miles;
 	//	 $unit = strtoupper($unit);

 /* if ($unit == "K") {
    return ($miles * 1.609344);
  } else if ($unit == "N") {
      return ($miles * 0.8684);
    } else {
        return $miles;
      }
}*/
      
      
          
         // if (($row['place'] == $place) && ($row['place1'] == $place1)) {
       //   echo "hey";
       //   }
      
        // printf ("%s (%s)\n", $row['place']);
        // echo $row['place'];
     //  echo "<br>$l";
		
   /*   if (mysqli_num_rows($result) == 1 ) {
     
         header("location: home.php");
          $_SESSION['message']= "You are now logged in ";
    	  $_SESSION['register']=$register;
    	  $_SESSION['location']=$location;
         //$_SESSION['fullname'] = $username;
          
      }elseif ($l !== $location){
       
               
             $_SESSION["message"]="$lYou are logged in from different location incorrect";
            }*/
            
      // if ((mysqli_num_rows($result) == 1 ) && ($row['place'] == $place) && ($row['place1'] == $place1)) {
//----------------------------------------------------------------------------------------------------              
          if (mysqli_num_rows($result) == 1 )  {
          
          if (($row['place'] == $place) && ($row['place1'] == $place1)) {
             $_SESSION['message']= "You are now logged in ";
    	     header("location: home.php");
             } elseif (($row['place'] != $place) || ($row['place1'] != $place1)){
                if (($miles <= 100)) {
              $_SESSION['message'] = "You are logged in from different location and is  $miles miles from your registered location ";
              header("location: home.php");
              // echo "You are $miles miles from your registered location";
             } else {
               $_SESSION['message'] = "You are too far from your location and cannot access your car as you are at distance of $miles miles from your registered location";
               $_SESSION['email']=$row['email'];
               header("location: homeloc.php");
              }
            } elseif  (mysqli_num_rows($result) != 1 ) {
              $_SESSION['message']= "No such account exists ";
              
              }
              }
//------------------------------------------------------------------------------------------------------              
             
          /*   $_SESSION['message']= "You are now logged in ";
    	     $_SESSION['register']=$register;
    	     header("location: authentication/home.php");
    	   //  printf ("%s (%s)\n", $row['location']);
    	    
             // }elseif ($l !== $location){
             
               } elseif ((($row['place'] !== $place) || ($row['place1'] !== $place1)) && (mysqli_num_rows($result) == 1 ) ) {
              
                $_SESSION['message']="You are logged in from different location incorrect";
                header("location: authentication/homeloc.php");
                 //$_SESSION['email']=$row['email'];
               // mail($admin_email, "$subject", $comment, "From:" . $email);
                     }*/
        /* if ((mysqli_num_rows($result) == 1 ) && ($row['place'] == $place)) {
             
               header("location: home.php");
             $_SESSION['message']= "You are now logged in ";
    	     $_SESSION['register']=$register;
            }elseif ((mysqli_num_rows($result) == 1 ) && ($row['place'] !== $place)) {
             
              
          //if (mysqli_num_rows($query) == 1 )  {
                $_SESSION["message"]="You are logged in from different location incorrect";
    	    
             // }elseif ($l !== $location){
             
         
               }*/
            
            }

  //   mysqli_close($db);

?>  
  
    
<!DOCTYPE html>
<html>
<head>
     <title> Register, login and logout user php mysql</title>
     <link rel ="stylesheet" type="text/css" href="style.css">
</head>

<body background="2.jpg">

<IMG STYLE="position:absolute; TOP:35px; LEFT:1100px; WIDTH:100px; HEIGHT:100px" SRC="sjsu logo.png">
<iframe src="compass2.jpg"  width="1380" height="400" ></iframe>

     <h1> Login </h1>


<form method="post" action="locationlocationlogin1.php">
   <table>
      <tr>
          <td> Register:</td>
          <td><input type="text" name="register" class="textInput"></td>
       </tr>   
       
       
       
       <tr>
          <td> Password:</td>
          <td><input type="password" name="password" class="textInput"></td>
       </tr>   
       
     <tr>
          <td> Latitude:</td>
          <td><input type="text" id="place" name="place" value="" class="textInput"></td>
       </tr>   
       
       <tr>
          <td> Longitude:</td>
          <td><input type="text" id="place1" name="place1" value="" class="textInput"></td>
       </tr> 
       
       <tr>
          
          <td><input type="submit" name="login_btn" value="Login"></td>
       </tr>   
       <a href="locationlocationfinalregister1.php"> <strong>  Click here to register? </strong> </a>';
       </table>
</form>
<!--<form method="get" >
 <tr>
          <td> Place:</td>
          <td><input type="text" id="place" name="place"  class="textInput"></td>
       </tr>   
       
       <tr>
          <td> Place1:</td>
          <td><input type="text" id="place1" name="place1"  class="textInput"></td>
       </tr>
</form>-->
<script>
var x=localStorage.getItem("getlat");
//alert(x);
var y =localStorage.getItem("getlong");
document.getElementById("place").value=x; // output=xyz@gmail.com
document.getElementById("place1").value=y;
</script>
<!--<IMG STYLE="position:absolute; TOP:35px; LEFT:1100px; WIDTH:100px; HEIGHT:100px" SRC="sjsu logo.png">-->
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