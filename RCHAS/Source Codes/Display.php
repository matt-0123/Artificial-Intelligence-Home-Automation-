<?php
ob_start();
session_start();
$dir=$_SESSION['unm'];
if ($dir)
{

/* Pin Details P9
pin 12 --> gpio60
pin 14 --> gpio50
pin 15 --> gpio48
pin 16 --> gpio51
*/


//Check the status of the Gpio's
$gp1 = "0";
$gp2 = "0";
$gp3 = "0";
$gp4 = "0";

?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Display my Devices</title>
<style type="text/css">
<!--
.style1 {	color: #636464;
	font-weight: bold;
	font-family: "Copperplate Gothic Light";
}
-->
</style>

<style>
body
{ 
background-image:url('Imgs/bck.jpg');
background-repeat:no-repeat;
background-size:100%;
background-position:left; 
}
h3 {text-shadow:2px 2px #808080; color:#000000}
.style5 {color: #0000FF}

h2 {text-shadow:1px 1px #808080; }
</style>




<script type="text/javascript">
function fnDev1()
{
	//Set the Configuration
		var xmlhttp;
		if (window.XMLHttpRequest)
		{// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}
		else
		{// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				document.getElementById('myDv').reload();

			}
		}
		xmlhttp.open("POST","execute.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");		
		xmlhttp.send("cmd=S");		
		//wait(1000);  
		document.location.reload();
}

function fnDev2()
{
	//Set the Configuration
		var xmlhttp;
		if (window.XMLHttpRequest)
		{// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}
		else
		{// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				document.getElementById('myDv').reload();

			}
		}
		xmlhttp.open("POST","execute.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");		
		xmlhttp.send("cmd=T");		
		document.location.reload();
}

function fnDev3()
{
	//Set the Configuration
		var xmlhttp;
		if (window.XMLHttpRequest)
		{// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}
		else
		{// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				document.getElementById('myDv').reload();

			}
		}
		xmlhttp.open("POST","execute.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");		
		xmlhttp.send("cmd=U");		
		document.location.reload();
}

function fnDev4()
{
	//Set the Configuration
		var xmlhttp;
		if (window.XMLHttpRequest)
		{// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}
		else
		{// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				document.getElementById('myDv').reload();

			}
		}
		xmlhttp.open("POST","execute.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");		
		xmlhttp.send("cmd=V");		
		document.location.reload();
}





</script>

</head>

<body>

<center> 
  <div align="center" class="style1" style="font-size:28px;">    
    <p><h3> Remote Control </h3>
      <h3>Home Appliance  System  </h3>
  </div>
  <h2><font color="#0000FF" face="Copperplate Gothic Light">My Devices</font></h2>
  </center>
<div id="myDv">

<table width="60%" align="center">
<tr><td align="right"><a href="logout.php">Log Out</a></td></tr>
</table>


<table align="center" border="1" width="60%">

<tr bgcolor="#CCCCCC"> <td align="center" height="67"><strong><font size="+2" face="Courier New, Courier, monospace">Device Name </font></strong></td>
<td align="center"><strong><font size="+2" face="Courier New, Courier, monospace"> Device Status </font></strong></td>
</tr>


<?php
exec("cat /sys/class/gpio/gpio60/value", $gp1, $return);
exec("cat /sys/class/gpio/gpio50/value", $gp2, $return);
exec("cat /sys/class/gpio/gpio48/value", $gp3, $return);
exec("cat /sys/class/gpio/gpio51/value", $gp4, $return);
//Device 1
if ($gp1[0] == '0')
	echo '<tr> <td align="center"> Device 1 </td><td align="center"><a> <img src="Imgs/Off.png" alt="Off" width="121" height="49" onClick="fnDev1()" /></a> </td></tr>';
else
	echo '<tr> <td align="center"> Device 1 </td><td align="center"> <a><img src="Imgs/On.png" alt="Off" width="121" height="49" onClick="fnDev1()"/></a> </td></tr>';

//Device 2
if ($gp2[0] == '0')
	echo '<tr> <td align="center"> Device 2 </td><td align="center"><a> <img src="Imgs/Off.png" alt="Off" width="121" height="49" onClick="fnDev2()" /></a> </td></tr>';
else
	echo '<tr> <td align="center"> Device 2 </td><td align="center"> <a><img src="Imgs/On.png" alt="Off" width="121" height="49" onClick="fnDev2()" /> </a></td></tr>';

//Device 3
if ($gp3[0] == '0')
	echo '<tr> <td align="center"> Device 3 </td><td align="center"><a> <img src="Imgs/Off.png" alt="Off" width="121" height="49" onClick="fnDev3()" /></a> </td></tr>';
else
	echo '<tr> <td align="center"> Device 3 </td><td align="center"><a> <img src="Imgs/On.png" alt="Off" width="121" height="49" onClick="fnDev3()" /></a> </td></tr>';

//Device 4
if ($gp4[0] == '0')
	echo '<tr> <td align="center"> Device 4 </td><td align="center"><a> <img src="Imgs/Off.png" alt="Off" width="121" height="49" onClick="fnDev4()" /></a> </td></tr>';
else
	echo '<tr> <td align="center"> Device 4 </td><td align="center"><a> <img src="Imgs/On.png" alt="Off" width="121" height="49" onClick="fnDev4()" /></a> </td></tr>';

?>

</table>
</div>

</body>
</html>

<?php 
}
else 
{	
	header("Location: index.html");
}
ob_end_flush();
?>

