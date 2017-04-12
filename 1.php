<?php

 $ip = file_get_contents('https://api.ipify.org');


$query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
$python = `python /Users/nehabassi/rr.py`;
				//echo "(Latitude is:, Longitude is:)" .$python;
		$python1 = `python /Users/nehabassi/ss.py`;
				//echo "(Latitude is:, Longitude is:)" .$python;
	//y=	$_GET['$v'];
	//echo  $_POST['$u'];

//$getlat =$_GET['latitude'];echo $getlat;
?>

<!DOCTYPE html>
<html>
<head>
 <meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
 <script async defer
  src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDKTN8NMIlr0UrIOVTPEzykrfY0nWPHP_4">
  </script>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="//js.maxmind.com/js/geoip.js" type="text/javascript" ></script>
<script type = "text/javascript" src = "http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js" ></script>


<!--<script src="http://maps.google.com/maps/api/js?key=AIzaSyDKTN8NMIlr0UrIOVTPEzykrfY0nWPHP_4"></script>-->


</head>
<!--<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDKTN8NMIlr0UrIOVTPEzykrfY0nWPHP_4"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDKTN8NMIlr0UrIOVTPEzykrfY0nWPHP_4"></script>-->
<!--<script src="https://code.jquery.com/jquery-1.10.2.js"></script>-->

<!--<script type ="text/javascript">-->
<body background="2.jpg">
  <IMG STYLE="position:absolute; TOP:35px; LEFT:1100px; WIDTH:100px; HEIGHT:100px" SRC="sjsu logo.png">
  <iframe src="compass2.jpg"  width="1380" height="400" ></iframe>

     <h1> Location Verification </h1>
     <?php 
     if($query && $query['status'] == 'success') {
  echo 'Hi you are visiting from '.$query['country'].', '.$query['city'].'!';
	} else {
	  echo 'Unable to get location';
	}
	 ?>
 <br>
 <br>
<form>
<!---------------------------Stored Variables-------------------------------------------------------------------------
 <table>

      		 <tr>

            <td style="color:red;background-color:black;" class="auto-style3">Input Latitude from what3words API:</td>

            <td class="auto-style4">
            <input type="text" id="name">
            </tr>
            	
            <tr>	
            <td style="color:red;background-color:black;" class="auto-style3">Input Longitude from what3words API:</td>

            <td class="auto-style4">
            
  			<input type="text" id="logger">
  			 </tr>
			
			<tr>
			 <td style="color:red;background-color:black;" class="auto-style3">Submit latitude and longitude:</td>

            <td class="auto-style4">
			<input type="button" id="submit" value="store in local">
			 
            </tr>
		    </table>

---------------------------------------------------------------------------------------------------------------------->
<table align="center" cellspacing="0" id="table2" cellpadding="0" class="twikiTable" rules="all" border="1">
		<tbody><tr class="twikiTableOdd twikiTableRowdataBgSorted0 twikiTableRowdataBg0">
			<th bgcolor="#DEB887" colspan="8" valign="top" class="twikiFirstCol"> <font color="#000000">Location Data</font> </th>
		</tr>
		<tr class="twikiTableEven twikiTableRowdataBgSorted0 twikiTableRowdataBg0">
			<td bgcolor="#ffffff" colspan="8" valign="top" class="twikiFirstCol"> <div style="white-space:nowrap; margin: 10px 0 20px 0;">  </td>
				<td bgcolor="#ffffff" colspan="10" valign="top" class="twikiFirstCol"><font color="#000000"> </font>
		</tr>
		
		<tr class="twikiTableOdd twikiTableRowdataBgSorted1 twikiTableRowdataBg1">
			
			<th bgcolor="#DEB887" valign="top" class="twikiTableCol0"> <font color="#000000">Public IP Address</font> <td bgcolor="#ffffff" valign="top" class="twikiTableCol1" ><input id="Text1" type="text" value='<?php echo  $ip; ?>'/></td> </th>
		</tr>
		
		<tr class="twikiTableEven twikiTableRowdataBgSorted1 twikiTableRowdataBg1">
			
			<th bgcolor="#DEB887" valign="top" class="twikiTableCol0"> <font color="#000000">IP 2 Location City</font> <td bgcolor="#ffffff" valign="top" class="twikiTableCol1" > <input id="Text1" type="text" value='<?php echo  $query['city']; ?>'/> </td> </th>
		</tr>
		
		<tr class="twikiTableOdd twikiTableRowdataBgSorted2 twikiTableRowdataBg2">
			
			<th bgcolor="#DEB887" valign="top" class="twikiTableCol0"> <font color="#000000">Geo API City</font> <td bgcolor="#ffffff" valign="top" class="twikiTableCol1" ><div><input id="cit" value=""></div> </td> </th>
		</tr>
		<tr class="twikiTableEven twikiTableRowdataBgSorted2 twikiTableRowdataBg2">
			
			<th bgcolor="#DEB887" valign="top" class="twikiTableCol0"> <font color="#000000"> Enter The Three Words </font> <td bgcolor="#ffffff" valign="top" class="twikiTableCol1" ><input id ="yyy" type="text"/></td> </th>
		</tr>
		<tr class="twikiTableOdd twikiTableRowdataBgSorted3 twikiTableRowdataBg3">
			
			<th bgcolor="#DEB887" valign="top" class="twikiTableCol0"> <font color="#000000"> Copy & Paste the Latitude 3 words </font> <td bgcolor="#ffffff" valign="top" class="twikiTableCol1" ><input id ="bbb" type="text"/></td> </th>
		</tr>
		<tr class="twikiTableEven twikiTableRowdataBgSorted3 twikiTableRowdataBg3">
			
			<th bgcolor="#DEB887" valign="top" class="twikiTableCol0"> <font color="#000000"> Copy & Paste the Longitude 3 words </font> <td bgcolor="#ffffff" valign="top" class="twikiTableCol1" ><input id ="ccc" type="text"/></td> </th>
		</tr>
		
		<tr class="twikiTableOdd twikiTableRowdataBgSorted4 twikiTableRowdataBg4">
			
			<th bgcolor="#DEB887" valign="top" class="twikiTableCol0"> <font color="#000000">Latitude Parameter </font> <td bgcolor="#ffffff" valign="top" class="twikiTableCol1" ><input id ="zzz" type="text" value='<?php  echo (round($python,3));?>'/></td> </th>
		</tr>
		<tr class="twikiTableEven twikiTableRowdataBgSorted4 twikiTableRowdataBg4">
			
			<th bgcolor="#DEB887" valign="top" class="twikiTableCol0"> <font color="#000000">Longitude Parameter  </font> <td bgcolor="#ffffff" valign="top" class="twikiTableCol1" ><input id ="aaa" type="text" value='<?php  echo (round($python1,3));?>'/></td> </th>
		</tr>
		</tbody></table>
		<br>
		<br>
  <table align="center" cellspacing="0" id="table1" cellpadding="0" class="twikiTable" rules="all" border="1">
		<tbody><tr class="twikiTableOdd twikiTableRowdataBgSorted0 twikiTableRowdataBg0">
			<th bgcolor="#DEB887" colspan="8" valign="top" class="twikiFirstCol"> <font color="#000000">Verify Your Location(s)</font> </th>
		</tr>
		<tr class="twikiTableEven twikiTableRowdataBgSorted0 twikiTableRowdataBg0">
			<!--<td bgcolor="#ffffff" colspan="8" valign="top" class="twikiFirstCol"> <div style="white-space:nowrap; margin: 2px 0 7px 0;">  <input type="text" name="ip"  size="91"  class="twikiInputField"> </td>-->
				<td bgcolor="#ffffff" colspan="30" valign="top" class="twikiFirstCol"><font color="#000000">Distance between IP2Location and Geolocation API in Meters </font><input  id ="distance" type="text"/></td>
				
		</tr>
		<tr class="twikiTableOdd twikiTableRowdataBgSorted1 twikiTableRowdataBg1">
		<td bgcolor="#ffffff" colspan="30" valign="top" class="twikiFirstCol"><font color="#000000">Distance between IP2Location and SSID in Meters </font><input  id ="distanceipssid" type="text"/></td>
		</tr>
		
		<tr class="twikiTableEven twikiTableRowdataBgSorted1 twikiTableRowdataBg1">
		<td bgcolor="#ffffff" colspan="30" valign="top" class="twikiFirstCol"><font color="#000000">Distance between SSID and Geolocation API in Meters </font><input  id ="distancegeoipssid" type="text"/></td>
				
		<tr>	
		
		<tr class="twikiTableOdd twikiTableRowdataBgSorted2 twikiTableRowdataBg2">
		<td bgcolor="#ffffff" colspan="30" valign="top" class="twikiFirstCol"><font color="#000000">Distance between SSID and What 3 words in Meters </font><input  id ="distance3wordsssid" type="text"/></td>
		</tr>
		
		<tr class="twikiTableEven twikiTableRowdataBgSorted2 twikiTableRowdataBg2">
			<th bgcolor="#DEB887" valign="top" class="twikiTableCol0 twikiFirstCol"> <font color="#000000">API/Database</font> </th>
			<!--<th bgcolor="#687684" valign="top" class="twikiTableCol1"> <font color="#000000">Public IP Address/3 Words</font> </th>-->
			<!--<th bgcolor="#687684" valign="top" class="twikiTableCol2"> <font color="#000000">City</font> </th>-->
			<th bgcolor="#DEB887" valign="top" class="twikiTableCol3"> <font color="#000000">Longitude</font> </th>
			<th bgcolor="#DEB887" valign="top" class="twikiTableCol4"> <font color="#000000">Latitude</font> </th>
		<!--	<th bgcolor="#687684" valign="top" class="twikiTableCol7 twikiLastCol"> <font color="#ffffff"><img src="/p/pub/TWiki06x00/TWikiDocGraphics/map.gif" width="16" height="16" alt="Map" title="Map" border="0"> Map</font> </th>-->
		</tr>
		<tr class="twikiTableOdd twikiTableRowdataBgSorted3 twikiTableRowdataBg3">
			<td bgcolor="#ffffff" valign="top" class="twikiTableCol0 twikiFirstCol"> <input id="Text1" type="text" value="IP To Location" </td>
			<!--<td bgcolor="#ffffff" valign="top" class="twikiTableCol1" ><input id="Text1" type="text" value='<?php echo  $ip; ?>'/></td>-->
			<!--<td bgcolor="#ffffff" valign="top" class="twikiTableCol2">   <input id="Text1" type="text" value='<?php echo  $query['city']; ?>'/> </td>-->
			<td bgcolor="#ffffff" valign="top" class="twikiTableCol3"><input id="iplat" type="text" value=""> </td>
			<td bgcolor="#ffffff" valign="top" class="twikiTableCol4">  <input id="iplong" type="text" value=""> </td>
			<!--<td bgcolor="#ffffff" valign="top" class="twikiTableCol7 twikiLastCol"> <a href="http://maps.google.com/maps?q=37.2362%2c-121.8289&amp;z=12&amp;source=embed">View map</a> </td>-->
		</tr>
		<tr class="twikiTableEven twikiTableRowdataBgSorted3 twikiTableRowdataBg3">
		     <td bgcolor="#ffffff" valign="top" class="twikiTableCol0 twikiFirstCol"> <input id="Text1" type="text" value="Geolocation API" </td>
			<!--<td bgcolor="#ffffff" valign="top" class="twikiTableCol1 "><div><input id="" value=""></div></td>
			<td bgcolor="#ffffff" valign="top" class="twikiTableCol2"><div><input id="cit" value=""></div> </td>-->
			<td bgcolor="#ffffff" valign="top" class="twikiTableCol3"><div><input id="lat" value=""></div> </td>
			<td bgcolor="#ffffff" valign="top" class="twikiTableCol4"><div><input id="long" value=""> </div> </td>
			<!--<td bgcolor="#edf4f9" colspan="8" valign="top" class="twikiFirstCol twikiLast"> <iframe width="700" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?q=37.2362%2c-121.8289&amp;z=12&amp;output=embed"></iframe><br> <small> <a href="http://maps.google.com/maps?q=37.2362%2c-121.8289&amp;z=12&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a>  </small> </td>-->
		</tr>
		<tr class="twikiTableOdd twikiTableRowdataBgSorted4 twikiTableRowdataBg4">
			<td bgcolor="#ffffff" valign="top" class="twikiTableCol0 twikiFirstCol"> <input id="Text1" type="text" value="What 3 Words API (input)" </td>
			<!--<td bgcolor="#ffffff" valign="top" class="twikiTableCol1" ><input id ="yyy" type="text"/></td>
			<td bgcolor="#ffffff" valign="top" class="twikiTableCol2">   <input id="Text1" type="text" value=""/> </td>-->
			<td bgcolor="#ffffff" valign="top" class="twikiTableCol3"><div><input type="text" name="3wordslat" id="3wordslat" /></div></td>
			<td bgcolor="#ffffff" valign="top" class="twikiTableCol4"> <div><input type="text" name="3wordslng" id="3wordslng" /></div> </td>
			<!--<td bgcolor="#ffffff" valign="top" class="twikiTableCol7 twikiLastCol"> <a href="http://maps.google.com/maps?q=37.2362%2c-121.8289&amp;z=12&amp;source=embed">View map</a> </td>-->
		
		</tr>
		
		
		
		</tbody></table>
<!--------------------------------------------IP ADDress--------------------------------------------------------> 
 <!--<div id="mapContainer" style="width:56.5%;height:280px;border:1px solid #4D2722; position:relative;top:1%;" ></div>-->
  <div id="mapContainer" class="center"   ></div>
  <style>
.center {
    margin: auto;
    width: 56.5%;height:280px;
    border: 3px solid #000000;
    padding: 10px;
}
</style>
<!------- Add Table here--------->
<!--------Add Table here--->

   


</form> 


<p><button id="action-button" onclick="geoFindMe()">Verify my location</button></p> <!--Doesn't Work if put above form and under map (error regarding Javascript console)-->
<div id="out"></div>
<div id="info"></div>
 
  <!-- <div id="mapContainer" style="width:64%;height:280px;border:1px solid #4D2722; position:relative;top:1%;left:440px;" ></div>-->

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?&key=AIzaSyDKTN8NMIlr0UrIOVTPEzykrfY0nWPHP_4"></script>

<!--<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDKTN8NMIlr0UrIOVTPEzykrfY0nWPHP_4"></script>-->



<script>
//var MyApp = {};
//var geoiplat;
var latlng;

var latitude  ;
var longitude ;

var city;
var name; // input value of latitude
var logger;// input value of longitude
var latitudee;
var longitudee ;
var m; //stored value latitude
var n;// stored value longitude
var y;//for getting value of latitude from textbox
var x;//for getting value of longitude from textbox

var t;//opening the login window
var r;//for opening the 'thanks for visiting' page if lat and long don't match
var iplatitude = geoip_latitude();//maxmind latitude
var iplongitude = geoip_longitude();//maxmind longitude
var output;
//latlng = new google.maps.LatLng(latitude, -longitude); 


var geoiplat;
         var geoiplong;
         var gplat;
         var gplong;
         
         
function geoFindMe() {
		 output = document.getElementById("out");

  		if (!navigator.geolocation){
    		output.innerHTML = "<p>Geolocation is not supported by your browser</p>";
    	return;
         }
  
  function success(position) {
   latitudee  = position.coords.latitude;// for geolocation 
   longitudee = position.coords.longitude;// for geolocation
   
  latitude=latitudee.toFixed(3);
  var ll =latitude;
  localStorage.setItem("getlat",ll);
 // s=localStorage.getItem("getlat");
  //alert(s);
// localStorage.setItem('ll');
 // geoiplat=  latitude;
 // MyApp.geoiplat=latitudee.toFixed(3);
  // alert("latitude"+ MyApp.geoiplat);
    longitude=longitudee.toFixed(3);
    var ln=longitude;
    localStorage.setItem("getlong",ln);
//localStorage.setItem('ln');
    
document.getElementById("lat").value=latitude;
document.getElementById("long").value=longitude;

	latlng = new google.maps.LatLng(latitude, longitude); 
	//output.innerHTML = latitude;
	//output.innerHTML = longitude;
	
 /*--------------------------------------------------------  Storing the values---------------------  
	$(function () {

    $("#submit").click(function () {
         name = $("#name").val();
         logger=$("#logger").val();
        localStorage.setItem('username',name);
        localStorage.setItem('username',logger);
      //  m= document.getElementById('name');
     // alert(name);
    });
      
    }); 
    
    m=document.getElementById("name").value;
    n= document.getElementById("logger").value;
    //alert(m);
    y=document.getElementById("lat").value;
    x=document.getElementById("long").value;
    //alert(y);
    if ((m == y ) && (n==x))   {
	//alert("helo");
	t= "http://localhost:8888/authentication/login.php";
	window.open(t);
	}
	else{
	 
	        r="http://localhost:8888/visit.html";
	  		 window.open(r);
	      }
	      
	-----------------------------------------------------------------------------------------------*/      
	      
     // m= document.getElementById("name");
   //   alert(m);
      // y =document.getElementById("lat");

         // if (m == y ){
    	//	 alert('helo');
    	//	 }
    	//	else{
	 
	       
	  	//		  output.innerHTML =' You cannot go ahead. Please ("do not slam this computer")!';
	   //     }
   
     //'<a href="authentication/login.php"> <strong>  Click here to go to next page? </strong><br> </a>');
    // return;
    //output.innerHTML ='<a href="authentication/login.php"> <strong>  Click here to go to next page? </strong><br> </a>';
    //-----------------------------------------------------------------------------------------------
    var iplatitude = geoip_latitude();
		var iplongitude = geoip_longitude();
		var ipcity = geoip_city();
		//var iplatt=iplatitude.toFixed(3)
		//var iplongg=iplongitude.toFixed(3)
		document.getElementById("iplat").value=iplatitude ;
		document.getElementById("iplong").value=iplongitude;
		//document.getElementById("ipcity").value = ipcity;
    
    //-----------------------------------------------------------------------------------------------
   			
	
new google.maps.Geocoder().geocode({'latLng' : latlng}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
        if (results[1]) {
            var country = null, countryCode = null, city = null, cityAlt = null;
            var c, lc, component;
            for (var r = 0, rl = results.length; r < rl; r += 1) {
                var result = results[r];

                if (!city && result.types[0] === 'locality') {
                    for (c = 0, lc = result.address_components.length; c < lc; c += 1) {
                        component = result.address_components[c];

                        if (component.types[0] === 'locality') {
                            city = component.long_name;
                            break;
                        }
                    }
                }
                else if (!city && !cityAlt && result.types[0] === 'administrative_area_level_1') {
                    for (c = 0, lc = result.address_components.length; c < lc; c += 1) {
                        component = result.address_components[c];

                        if (component.types[0] === 'administrative_area_level_1') {
                            cityAlt = component.long_name;
                            break;
                        }
                    }
                } else if (!country && result.types[0] === 'country') {
                    country = result.address_components[0].long_name;
                    countryCode = result.address_components[0].short_name;
                }

                if (city && country) {
                    break;
                }
            }
            document.getElementById("cit").value=city;
            
           /*    $(document).ready(function(){
      var p;
      p=document.getElementById('city').innerHTML = city;
      $('#id1').val(p);
   });
            $(document).ready(function(){
      var q;
      q=output.innerHTML('latitude');
      $('#id2').val(q);
   });
   
   $(document).ready(function(){
      var r;
      r=document.getElementById('longitude').innerHTML = longitude;
      $('#id3').val(r);
   });
            */
            
            

           // console.log("City: " + city + ", City2: " + cityAlt + ", Country: " + country + ", Country Code: " + countryCode);
           /* document.getElementById('city').innerHTML = city;
            document.getElementById('cityAlt').innerHTML = cityAlt;
            document.getElementById('country').innerHTML = country;
            document.getElementById('countryCode').innerHTML = countryCode;*/
            
 //////---------///////----------------/////////--------------//////----------    
            if ((ipcity==city)){
            //output.innerHTML="City cleared";
            }
        }
    }
});



      //output.innerHTML = latlng;
    //output.innerHTML = 'City: ' + city + '<br> City2: ' + cityAlt + ', Country: ' + country + ", Country Code: " + countryCode
	
	//output.innerHTML = 'Latitude is ' + latitude + '° <br>Longitude is ' + longitude + '°<br>Latitude is ' + latitude1 + '° <br>Longitude is ' + longitude1 + '° <br>Latlng is ' + latlng + '<a href="authentication/login.php"> <strong>  Click here to go to next page? </strong><br> </a>';
	
	
	/*if (( x3 == x1) && ( x4 == x2)){
     		//output.innerHTML = '<a href="2.html"> <strong>  Click here to go to next page? </strong> </a> <br/><br/>';
     	
     	output.innerHTML = 'Latitude is ' + latitude + '° <br>Longitude is ' + longitude + '°<br>Latitude is ' + latitude2 + '° <br>Longitude is ' + longitude2 + '<a href="authentication/login.php"> <strong>  Click here to go to next page? </strong> </a>';
     	
	
	} else{
	 
	       
	    output.innerHTML =' You cannot go ahead. Please ("do not slam this computer")!';
	        }*/
    
   
    	///output.innerHTML = '<p>Latitude is ' + latitude + '° <br>Longitude is ' + longitude + '°<br>Latitude is ' + latitude2 + '° <br>Longitude is ' + longitude2 + '°</p>';
	

    	var img = new Image();
   		 //img.src = "https://maps.googleapis.com/maps/api/staticmap?center=" + latitude + "," + longitude + "&size=300x300&zoom=11&key=AIzaSyDKTN8NMIlr0UrIOVTPEzykrfY0nWPHP_4";
            //img.src = "https://maps.googleapis.com/maps/api/staticmap?center=" + latlng + "&size=300x300&zoom=11&sensor=false";
        // img.src="http://maps.googleapis.com/maps/api/geocode/json?latlng='+lat+','+lng+&key=AIzaSyAwG9JYSFEQ4Y8vHUX93vwYkQ8FW_LGOB8";
       // img.src="http://maps.googleapis.com/maps/api/geocode/json?latlng="+lat+","+lng+"&key=AIzaSyDKTN8NMIlr0UrIOVTPEzykrfY0nWPHP_4";
    	 //output.appendChild(img);
    	 
 //--------------------------------------------------------------------------------------------------------------  
 //-------------------------------IP Latitude and Longitude from MAXMIND----------------------------------------- 	 
    	var iplatitude = geoip_latitude();
		var iplongitude = geoip_longitude();
		var ipcity = geoip_city();
		//var iplatt=iplatitude.toFixed(3)
		//var iplongg=iplongitude.toFixed(3)
		document.getElementById("iplat").value=iplatitude ;
		document.getElementById("iplong").value=iplongitude;
		//document.getElementById("ipcity").value = ipcity;
       
		//--------------------------------------------------------------------------------------------------------------
  
//alert(y);-------------What 3 words----------------------------------------------------------------------------
 $('#action-button').click(function() {
		var y =document.getElementById("yyy").value;//get three words from front page
   $.ajax({
      url: 'https://api.what3words.com/v2/forward?addr='+y+'&key=S9K0WUJS&lang=en&format=json&display=full',
      data: {
         format: 'json'
      },
      error: function() {
         $('#info').html('<p>An error has occurred</p>');
      },
      async: false,
      dataType: 'jsonp',
      success: function(data) {
         var $title = $('<p>').text(data.bounds.southwest.lng);
         var $description = $('<p>').text(data.bounds.southwest.lat);
         $('#info')
            .append($title)
            .append($description);
            
         var $u=data.bounds.southwest.lat.toFixed(3);
         //var $v=$u.toFixed(3);
      
          var $v=data.bounds.southwest.lng.toFixed(3);
         
           $("#3wordslat").val(data.bounds.southwest.lat.toFixed(3));
             $("#3wordslng").val(data.bounds.southwest.lng.toFixed(3));
             /*if ((latitude==$u) && (longitude==$v)) {
                //output.innerHTML = "latitude and longitude matches";
                re
             }*/
             
      },
      type: 'GET'
      
   }); //return s;
});
//var s = $.url('https://api.what3words.com/v2/forward?addr='+y+'&key=S9K0WUJS&lang=en&format=json&display=full');
//alert(s);

//-------------------------------------------------------------------------------------------------------------- 
    	
  };
 
 
/*function loadScript() {
  var script = document.createElement('script');
  script.type = 'text/javascript';
  script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDKTN8NMIlr0UrIOVTPEzykrfY0nWPHP_4&callback=initialize';
  document.body.appendChild(script);
}

window.onload = loadScript;*/



   
//-------------------------------------------------------------------------------------------------------------- 

//----------------------------------------------------------------------------------------------------------
  function error() {
   		 output.innerHTML = "Unable to retrieve your location";
  };

  		output.innerHTML = "<p>Locating…</p>";

  
		navigator.geolocation.getCurrentPosition(success, error);
 
	
}

//--------------------------------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------------------------------

/*
        var x = document.getElementById("demo");
        var latlng1;
         var MyApp = {};
         var t;
         var ltyy;
         
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}
var latlng1;
 function showPosition(position) {
 		 geoiplat =  position.coords.latitude ;
     //return this.gplat=geoiplat.toFixed(3);
  		gplat=geoiplat.toFixed(3);
  		
   // return this.r =gplat;
   		  geoiplong = position.coords.longitude;
   	 	gplong =  geoiplong.toFixed(3);
   	
    	
    }
var s= navigator.geolocation.watchPosition(showPosition).gplat;
alert(s);*/
//  ----------------------------------------------------------------------------------------- 

 var iplatitude = geoip_latitude(); var gpl; var gplo;
		var iplongitude = geoip_longitude();
	document.getElementById("iplat").value=iplatitude ;
		document.getElementById("iplong").value=iplongitude;

		 var info_cities;
		 var geoiplat;var geoiplong; var gplat; var gplong;
		var c; var d;
    
    
    
    //---------------------------------------------------------------------------------------------
    var x = document.getElementById("demo");
   function getPositionobject1(objectid) {
			if (navigator.geolocation) {
				  var timeoutVal = 10 * 1000 * 1000;
				  navigator.geolocation.getCurrentPosition(
					function(position) {displayPosition(position, objectid)},
					displayError,
					{ enableHighAccuracy: true, timeout: timeoutVal, maximumAge: 0 }
				  );
		}}


		function displayPosition(position, objectid) {
		 // alert(objectid + " ##  Latitude: " + position.coords.latitude + ", Longitude: " + position.coords.longitude);
		 var geoiplat =  position.coords.latitude ;
     //return this.gplat=geoiplat.toFixed(3);
  		 var gplat=geoiplat.toFixed(3);
  		// alert(gplat);
   // return this.r =gplat;
   		  var geoiplong = position.coords.longitude;
   	 	var gplong =  geoiplong.toFixed(3);
		  var geometry = (position.coords.latitude + "," + position.coords.longitude).toString();
		  sendToServer(objectid, geometry);var lat1=position.coords.latitude;
		  var lon1= position.coords.longitude; //geoip longitude
		  var lat2=iplatitude;//ip latitude
		  var lon2=iplongitude;//alert(lon2);
		  var ssidlat = document.getElementById('zzz').value;
		  var ssidlong = document.getElementById('aaa').value;
		  var wordlat = document.getElementById('bbb').value;
		  var wordlong = document.getElementById('ccc').value;
		  sendToServer1(gplat);
		          sendToServer2(gplong);
		          sendToServer3(iplatitude,iplongitude,gplat,gplong);
		          calculateDistance(lat1, lon1, lat2, lon2) //ip and geoip
		          calculateDistanceipssid(lat2, ssidlat, lon2, ssidlong)
		          calculateDistancegeoipssid(lat1,  lon1, ssidlat, ssidlong)
		         calculateDistance3wordsssid(wordlat,  wordlong, ssidlat, ssidlong)
		          
		}

		function displayError(error) {
		  var errors = {
			1: 'Permission denied',
			2: 'Position unavailable',
			3: 'Request timeout'
		  };
		  alert("Error: " + errors[error.code]);
		}

		function sendToServer(id, geom) {
		//	alert("my id is: '" + id + "' " + geom);
		}
		function sendToServer1(gplat) {
		//	alert("my id is: '" + gplat + "' " + gplong);
			//info_cities = [['GeoIP', gplat, gplong, 1], ['IP', iplatitude, iplongitude, 2] ].toString();
	    // c = gplat.toString();
	   //  alert(info_cities);
		
		 //return d=gplong;
		}
		
		function sendToServer2( gplong) {
		//	alert("my id is: '" + gplat + "' " + gplong);
		//	info_cities = [['GeoIP', gplat, gplong, 1], ['IP', iplatitude, iplongitude, 2] ];
		
		 d=gplong.toString();
		}
		//--------------IP and Geo Ip distance------------------------------------
		function calculateDistance(lat1, lon1, lat2, lon2) {
 		 var R = 6371*1000; // meters
 		 var dLat = (lat2 - lat1) * Math.PI / 180;
 		 var dLon = (lon2 - lon1) * Math.PI / 180; 
 		 var a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
          Math.cos(lat1 * Math.PI / 180) * Math.cos(lat2 * Math.PI / 180) * 
          Math.sin(dLon / 2) * Math.sin(dLon / 2); 
 		 var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a)); 
 		 var d = R * c;
 		 if (d <= 160934) {
 		 
 		 document.getElementById("demo").innerHTML='<a href="locationlocationlogin1.php"> <strong>  Click here to go to next page? </strong> </a>';
 		 
 		 }
  		//return d;
  		//alert(d);
  		document.getElementById('distance').value=d;
		}
		//-----------------------------------------------------------------------------
		//--------------------------------All---------------------------------
		//var ssidlat = document.getElementById('zzz').value;
		///var ssidlong = document.getElementById('aaa').value;
		/*function calculateDistanceipssid(lat2,  lon2, ssidlat, ssidlong) {
		//--------------------------------IP and Geoip---------------------------------
		/*var R = 6371*1000; // meters
 		 var dLat = (lat2 - lat1) * Math.PI / 180;
 		 var dLon = (lon2 - lon1) * Math.PI / 180; 
 		 var a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
          Math.cos(lat1 * Math.PI / 180) * Math.cos(lat2 * Math.PI / 180) * 
          Math.sin(dLon / 2) * Math.sin(dLon / 2); 
 		 var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a)); 
 		 var d = R * c; alert(d);*/
 		 //--------------------------------IP and SSID---------------------------------
 		 function calculateDistanceipssid(lat2, ssidlat, lon2, ssidlong) {
 		var R1 = 6371*1000; // meters
 		 var dLat1 = (ssidlat - lat2 ) * Math.PI / 180;
 		 var dLon1 = (ssidlong - lon2) * Math.PI / 180; 
 		 var a1 = Math.sin(dLat1 / 2) * Math.sin(dLat1 / 2) +
          Math.cos(lat2 * Math.PI / 180) * Math.cos(ssidlat * Math.PI / 180) * 
          Math.sin(dLon1 / 2) * Math.sin(dLon1 / 2); 
 		 var c1 = 2 * Math.atan2(Math.sqrt(a1), Math.sqrt(1 - a1)); 
 		 var d1 = R1 * c1; //ip and ssid distance
 		 
  		//return d;
  		//alert(d);
  		document.getElementById('distanceipssid').value=d1;
		}
 		  //--------------------------------IP and SSID---------------------------------
 		  
 		 //--------------------------------Geoip and SSID---------------------------------
 		 function calculateDistancegeoipssid(lat1,  lon1, ssidlat, ssidlong) {
 		 var R2 = 6371*1000; // meters
 		 var dLat2 = (ssidlat - lat1 ) * Math.PI / 180;
 		 var dLon2 = (ssidlong - lon1) * Math.PI / 180; 
 		 var a2 = Math.sin(dLat2 / 2) * Math.sin(dLat2 / 2) +
          Math.cos(lat1 * Math.PI / 180) * Math.cos(ssidlat * Math.PI / 180) * 
          Math.sin(dLon2 / 2) * Math.sin(dLon2 / 2); 
 		 var c2 = 2 * Math.atan2(Math.sqrt(a2), Math.sqrt(1 - a2)); 
 		 var d2 = R2 * c2; //geoip and ssid distance*/
 		 document.getElementById('distancegeoipssid').value=d2;
		}
 		 
 		 //--------------------------------Geoip and SSID---------------------------------
 		 
 		 //--------------------------------What3words and SSID---------------------------------
 		  function calculateDistance3wordsssid(wordlat,  wordlong, ssidlat, ssidlong) {
 		 var R3 = 6371*1000; // meters
 		 var dLat3 = (ssidlat - wordlat ) * Math.PI / 180;
 		 var dLon3 = (ssidlong - wordlong) * Math.PI / 180; 
 		 var a3 = Math.sin(dLat3 / 2) * Math.sin(dLat3 / 2) +
          Math.cos(wordlat * Math.PI / 180) * Math.cos(ssidlat * Math.PI / 180) * 
          Math.sin(dLon3 / 2) * Math.sin(dLon3 / 2); 
 		 var c3 = 2 * Math.atan2(Math.sqrt(a3), Math.sqrt(1 - a3)); 
 		 var d3 = R3 * c3; //geoip and ssid distance*/
 		  document.getElementById('distance3wordsssid').value=d3;
		}
 		 
 		 
 		 
 		 
 		  //--------------------------------What3words and SSID---------------------------------
 		  //-------------------------------------------------------------------------------------------------------------
 
   //$('#action-button').click(function() {
	/*	var y =document.getElementById("yyy").value;//get three words from front page
        $.ajax({
       url: 'https://api.what3words.com/v2/forward?addr='+y+'&key=S9K0WUJS&lang=en&format=json&display=full',
      data: {
         format: 'json'
      },
      error: function() {
         $('#info').html('<p>An error has occurred</p>');
      },
      dataType: 'jsonp',
      success: function(data) {
         var $title = $('<p>').text(data.bounds.southwest.lng);
         var $description = $('<p>').text(data.bounds.southwest.lat);
         $('#info')
            .append($title)
            .append($description);
            
         var $u=data.bounds.southwest.lat.toFixed(3);
         //var $v=$u.toFixed(3);
      
          var $v=data.bounds.southwest.lng.toFixed(3);
          //return $v;
           //  alert("helo"+$u);
            // alert($v);
       //    $("#3wordslat").val(data.bounds.southwest.lat.toFixed(3));
          //   $("#3wordslng").val(data.bounds.southwest.lng.toFixed(3));
         //    if ((latitude==$u) && (longitude==$v)) {
                //output.innerHTML = "latitude and longitude matches";
          //   }
      },
      type: 'GET'
   });*/
//});
//----------------------------------------------------------------------------------------------------------
 		  //--------------------------------What3words and SSID---------------------------------
 		 
 		 
 		 
 		 
  		//return d;
  		//alert(d);
  		
  		
		//-------------------------------------------------------------------------------
		
		//Number.prototype.toRad = function() {
		//  return this * Math.PI / 180;
	//	}
		function sendToServer3(iplatitude,iplongitude,gplat,gplong) {
		//	alert("my id is: '" + gplat + "' " + gplong);
			info_cities = [['GeoIP', gplat, gplong, 1], ['IP', iplatitude, iplongitude, 2] ];
			//alert(info_cities);
       
      // var info_cities = [['GeoIP', 37.29, -121.987, 1], ['IP', iplatitude, iplongitude, 2] ];
       /*    var R = 6371e3; // metres
		var lat1rad = iplatitude.toRadians();
		var lat2rad = gplat.toRadians();
		var delta = (gplat-iplatitude).toRadians();
		var lambda = (gplong-iplongitude).toRadians();

		var a = Math.sin(delta/2) * Math.sin(delta/2) +
        Math.cos(lat1rad) * Math.cos(lat2rad) *
        Math.sin(lambda/2) * Math.sin(lambda/2);
		var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));

		var d = R * c;
		alert(d);*/
		
 
    var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
      var labelIndex = 0;
      
	var center = [iplatitude, iplongitude,1];
    function initialize() {
     		
        // MAP ATTRIBUTES.
        var mapAttr = {
            center: new google.maps.LatLng(iplatitude, iplongitude),     // DEFAULT LOCATION ON PAGE LOAD.
            zoom: 4,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        // THE MAP TO DISPLAY.
        var map = new google.maps.Map(document.getElementById("mapContainer"), mapAttr);
        //window.open(map);
		//var img = new Image();
   		 //img.src = "http://maps.google.com/maps/api/js?key=AIzaSyDKTN8NMIlr0UrIOVTPEzykrfY0nWPHP_4&zoom=10&size=200x200&sensor=false";

          //window.open(img);
    	
        var marker, iCnt,circle;
         for (iCnt = 0; iCnt < info_cities.length; iCnt++) {
       
         circle = new google.maps.Circle({
            center: new google.maps.LatLng(info_cities[iCnt][1],info_cities[iCnt][2]),
            map: map,
            radius: 160934,          // IN METERS.
            fillColor: '#FF6700',
            fillOpacity: 0.3,
            strokeColor: "#FFF",
            strokeWeight: 0         // DON'T SHOW CIRCLE BORDER.
        });
        }

        for (iCnt = 0; iCnt < info_cities.length; iCnt++) {
            marker = new google.maps.Marker({
                
                position: new google.maps.LatLng(info_cities[iCnt][1], info_cities[iCnt][2]),
                map: map,
                animation: google.maps.Animation.DROP,          // SHOW MARKERS AS DROPING (ANIMATED).
                title: info_cities[iCnt][0]     
             //   label: labels[labelIndex++ % labels.length],             // SHOW TITLE ON MOUSE OVER MARKERS.
            });
            
            
        }
    }
       
       
       initialize();   google.maps.event.addDomListener(window, 'load', initialize);
       
       }
		getPositionobject1("first object");
	  //   sendToServer1("second object");
	 // sendToServer1();
	 // sendToServer2();
  
    
    //---------------------------------------------------------------------------------------------
     //var latte = document.getElementById("lat").value;
     //var longe = document.getElementById("long").value;
     //alert(longe);
     //alert(latlng);
     //--------------------------------------------------------------------------------------------
   /*   $(function () {

      $("action-button").click(function () {
         name = $("#lat").val();
         logger=$("#long").val();
        localStorage["name"]=name;
        localStorage["logger"]=logger;
        
      //  m= document.getElementById('name');
     // alert(name);
    });
      
    }); 
    
    m=document.getElementById("name").value;
   //n= document.getElementById("logger").value;
    alert(m);
  //  y=document.getElementById("lat").value;*/
    //--------------------------------------------------------------------------------------------
/*   var info_cities = [['GeoIP', 37.29, -121.987, 1], ['IP', iplatitude, iplongitude, 2] ];

   //alert(sendToServer1().gplat);
  // alert(sendToServer1());
    var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
      var labelIndex = 0;
      
var center = [iplatitude, iplongitude,1];
    function initialize() {
     		
        // MAP ATTRIBUTES.
        var mapAttr = {
            center: new google.maps.LatLng(iplatitude, iplongitude),     // DEFAULT LOCATION ON PAGE LOAD.
            zoom: 4,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        // THE MAP TO DISPLAY.
        var map = new google.maps.Map(document.getElementById("mapContainer"), mapAttr);
        //window.open(map);
		//var img = new Image();
   		 //img.src = "http://maps.google.com/maps/api/js?key=AIzaSyDKTN8NMIlr0UrIOVTPEzykrfY0nWPHP_4&zoom=10&size=200x200&sensor=false";

          //window.open(img);
    	
        var marker, iCnt,circle;
         for (iCnt = 0; iCnt < info_cities.length; iCnt++) {
       
         circle = new google.maps.Circle({
            center: new google.maps.LatLng(info_cities[iCnt][1],info_cities[iCnt][2]),
            map: map,
            radius: 160934,          // IN METERS.
            fillColor: '#FF6700',
            fillOpacity: 0.3,
            strokeColor: "#FFF",
            strokeWeight: 0         // DON'T SHOW CIRCLE BORDER.
        });
        }

        for (iCnt = 0; iCnt < info_cities.length; iCnt++) {
            marker = new google.maps.Marker({
                
                position: new google.maps.LatLng(info_cities[iCnt][1], info_cities[iCnt][2]),
                map: map,
                animation: google.maps.Animation.DROP,          // SHOW MARKERS AS DROPING (ANIMATED).
                title: info_cities[iCnt][0]     
             //   label: labels[labelIndex++ % labels.length],             // SHOW TITLE ON MOUSE OVER MARKERS.
            });
            
            
        }
    }*/
    // google.maps.event.addDomListener(window, 'load', initialize);
  //  google.maps.event.addDomListener(window, 'load', initialize);
    
   
    
//--------------------------------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------------------------------
//alert("latitudelatitude"+geoiplat.geoFindMe().success());
/* <table>
       
        <tr>

            <td style="color:red;background-color:blue;" class="auto-style3">Your Public IP Address is:</td>

            <td class="auto-style4">

                <input id="Text1" type="text" value='<?php echo  $ip; ?>'/></td>

        </tr>

 <tr>

            <td style="color:red;background-color:blue;" class="auto-style3">Location from IP Address:</td>

            <td class="auto-style4">

                <input id="Text1" type="text" value='<?php echo  $query['city']; ?>'/></td>

        </tr>
         <tr>

            <td style="color:red;background-color:blue;" class="auto-style3">Latitude IP Address:</td>

            <td class="auto-style4">

                <input id="iplat" type="text" valuevalue=""></td>

        </tr>
         <tr>

            <td style="color:red;background-color:blue;" class="auto-style3">Longitude from IP Address:</td>

            <td class="auto-style4">

                <input id="iplong" type="text" value=""></td>

        </tr>

</table>

   <table>

        <tr>

            <td style="color:red;background-color:aqua;" class="auto-style3">City from Geo API:</td>

            <td class="auto-style4">

               
               <div><input id="cit" value=""></div></td>
               <!-- <input id="Text1" type="text" value='city'/></td> -->
				<!--<input type ="text" id="cit"/>-->
        </tr>

 <tr>

            <td style="color:red;background-color:aqua;" class="auto-style3">Latitude from Geo API:</td>

            <td class="auto-style4">

               
               <div><input id="lat" value=""></div>
               <!-- <input id="Text1" type="text" value='latitude'/></td>-->
               <!-- <input type ="text" id="lat"/>-->

        </tr>
        
        <tr>

            <td style="color:red;background-color:aqua;" class="auto-style3">Longitude from Geo API:</td>

            <td class="auto-style4">

                
               <div><input id="long" value=""></div>
               <!--<input id="Text1" type="text" value='longitude'/></td>-->
                <!-- <input type ="text" id="long"/>-->

        </tr>


</table>


    <table>


      <tr>

            <td style="color:red;background-color:white;" class="auto-style3">What Three Words?:</td>

            <td class="auto-style4">
			<input id ="yyy" type="text"/>
      </tr>			
  <tr>

            <td style="color:red;background-color:white;" class="auto-style3">Latitude from What Three Words API:</td>

            <td class="auto-style4">

			<div><input type="text" name="3wordslat" id="3wordslat" /></div>
 </tr>
 <tr>

            <td style="color:red;background-color:white;" class="auto-style3">Longitude from What Three Words API:</td>

            <td class="auto-style4">
			<div><input type="text" name="3wordslng" id="3wordslng" /><div>
 </tr>
 
			<!-- <tr>

            <td style="color:red;background-color:aqua;" class="auto-style3">Click on me:</td>

            <td class="auto-style4">
			<button id="action-button">Click me to load info!</button>
			</tr>-->
	

</table>


<table>
<tr>

            <td style="color:red;background-color:orange;" class="auto-style3">Distance Between IP and GEO based:</td>

            <td class="auto-style4">
			<input id ="distance" type="text"/>
  </tr>			
  			
 </table>*/
 
 /*
  <table cellspacing="0" id="table1" cellpadding="0" class="twikiTable" rules="all" border="1">
		<tbody><tr class="twikiTableOdd twikiTableRowdataBgSorted0 twikiTableRowdataBg0">
			<th bgcolor="#687684" colspan="8" valign="top" class="twikiFirstCol"> <font color="#000000">Verify Your Location(s)</font> </th>
		</tr>
		<tr class="twikiTableEven twikiTableRowdataBgSorted0 twikiTableRowdataBg0">
			<!--<td bgcolor="#ffffff" colspan="8" valign="top" class="twikiFirstCol"> <div style="white-space:nowrap; margin: 2px 0 7px 0;">  <input type="text" name="ip"  size="91"  class="twikiInputField"> </td>-->
				<td bgcolor="#ffffff" colspan="10" valign="top" class="twikiFirstCol"><font color="#000000">Distance between IP2Location and Geolocation API in Meters </font><input  id ="distance" type="text"/></td>
		</tr>
		<tr class="twikiTableOdd twikiTableRowdataBgSorted1 twikiTableRowdataBg1">
			<th bgcolor="#687684" valign="top" class="twikiTableCol0 twikiFirstCol"> <font color="#000000">API/Database</font> </th>
			<th bgcolor="#687684" valign="top" class="twikiTableCol1"> <font color="#000000">Public IP Address/3 Words</font> </th>
			<th bgcolor="#687684" valign="top" class="twikiTableCol2"> <font color="#000000">City</font> </th>
			<th bgcolor="#687684" valign="top" class="twikiTableCol3"> <font color="#000000">Longitude</font> </th>
			<th bgcolor="#687684" valign="top" class="twikiTableCol4"> <font color="#000000">Latitude</font> </th>
		<!--	<th bgcolor="#687684" valign="top" class="twikiTableCol7 twikiLastCol"> <font color="#ffffff"><img src="/p/pub/TWiki06x00/TWikiDocGraphics/map.gif" width="16" height="16" alt="Map" title="Map" border="0"> Map</font> </th>-->
		</tr>
		<tr class="twikiTableEven twikiTableRowdataBgSorted0 twikiTableRowdataBg0">
			<td bgcolor="#ffffff" valign="top" class="twikiTableCol0 twikiFirstCol"> <input id="Text1" type="text" value="IP To Location" </td>
			<td bgcolor="#ffffff" valign="top" class="twikiTableCol1" ><input id="Text1" type="text" value='<?php echo  $ip; ?>'/></td>
			<td bgcolor="#ffffff" valign="top" class="twikiTableCol2">   <input id="Text1" type="text" value='<?php echo  $query['city']; ?>'/> </td>
			<td bgcolor="#ffffff" valign="top" class="twikiTableCol3"><input id="iplat" type="text" value=""> </td>
			<td bgcolor="#ffffff" valign="top" class="twikiTableCol4">  <input id="iplong" type="text" value=""> </td>
			<!--<td bgcolor="#ffffff" valign="top" class="twikiTableCol7 twikiLastCol"> <a href="http://maps.google.com/maps?q=37.2362%2c-121.8289&amp;z=12&amp;source=embed">View map</a> </td>-->
		</tr>
		<tr class="twikiTableOdd twikiTableRowdataBgSorted2 twikiTableRowdataBg2">
		     <td bgcolor="#ffffff" valign="top" class="twikiTableCol0 twikiFirstCol"> <input id="Text1" type="text" value="Geolocation API" </td>
			<td bgcolor="#ffffff" valign="top" class="twikiTableCol1 "><div><input id="" value=""></div></td>
			<td bgcolor="#ffffff" valign="top" class="twikiTableCol2"><div><input id="cit" value=""></div> </td>
			<td bgcolor="#ffffff" valign="top" class="twikiTableCol3"><div><input id="lat" value=""></div> </td>
			<td bgcolor="#ffffff" valign="top" class="twikiTableCol4"><div><input id="long" value=""> </div> </td>
			<!--<td bgcolor="#edf4f9" colspan="8" valign="top" class="twikiFirstCol twikiLast"> <iframe width="700" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?q=37.2362%2c-121.8289&amp;z=12&amp;output=embed"></iframe><br> <small> <a href="http://maps.google.com/maps?q=37.2362%2c-121.8289&amp;z=12&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a>  </small> </td>-->
		</tr>
		<tr class="twikiTableEven twikiTableRowdataBgSorted1 twikiTableRowdataBg1">
			<td bgcolor="#ffffff" valign="top" class="twikiTableCol0 twikiFirstCol"> <input id="Text1" type="text" value="What 3 Words API (input)" </td>
			<td bgcolor="#ffffff" valign="top" class="twikiTableCol1" ><input id ="yyy" type="text"/></td>
			<td bgcolor="#ffffff" valign="top" class="twikiTableCol2">   <input id="Text1" type="text" value=""/> </td>
			<td bgcolor="#ffffff" valign="top" class="twikiTableCol3"><div><input type="text" name="3wordslat" id="3wordslat" /></div></td>
			<td bgcolor="#ffffff" valign="top" class="twikiTableCol4"> <div><input type="text" name="3wordslng" id="3wordslng" /></div> </td>
			<!--<td bgcolor="#ffffff" valign="top" class="twikiTableCol7 twikiLastCol"> <a href="http://maps.google.com/maps?q=37.2362%2c-121.8289&amp;z=12&amp;source=embed">View map</a> </td>-->
		
		</tr>
		
		
		
		</tbody></table>*/
 
</script>
<button onclick="getPositionobject1()">Mapping</button>
<!--<button onclick="getLocation()">Mapping</button>-->
<p id="demo"></p>
<!--<p id="1"></p>-->
<!--<span id="currentLat">???</span>°
<span id="distance">dista</span>-->


<!--<ul id="x">
    <li>City: <span id="city"></span></li>
    <li>City alt: <span id="cityAlt"></span></li>
    <li>Country Name: <span id="country"></span></li>
    <li>Country Code: <span id="countryCode"></span></li>
   <li>IP Address is :<span id="Text1"></span></li>
</ul>-->
<!--<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKTN8NMIlr0UrIOVTPEzykrfY0nWPHP_4&callback=initialize()">
    </script>-->
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