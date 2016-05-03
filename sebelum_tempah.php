<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Harwin Online Car Rental System</title>
<style type="text/css">
<!--
body,td,th {
	color: #000000;
}
body {
	background-color: #FFFFFF;
}
.style18 {font-size: 16px}
.style19 {font-size: 24px}
.style20 {color: #FF6699}
.style14 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; }
.style16 {font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
.style17 {font-size: large}
-->
</style></head>

<body>

<table width="1037" height="800"  border="3" align="center" cellpadding="1" cellspacing="1" bordercolor="#000000" bgcolor="#FFFF99">
  <tr align="center" valign="top">

<td height="198" bordercolor="#000000"><div align="center">
  <form id="form1" name="form1" method="post" action="">
    <label>
    <input type="image" name="imageField" src="image/banner3.png" />
    </label>
  </form>
  </div></td> 
  <tr valign="top">
    <td width="1025" height="589" bgcolor="#FFCC66"><p align="center" >
	</strong>
	</p><script type="text/javascript">
// (c) 2000-2009 ricocheting.com                                                                   

dg0=new Image();dg0.src="dg0.gif";
dg1=new Image();dg1.src="dg1.gif";
dg2=new Image();dg2.src="dg2.gif";
dg3=new Image();dg3.src="dg3.gif";
dg4=new Image();dg4.src="dg4.gif";
dg5=new Image();dg5.src="dg5.gif";
dg6=new Image();dg6.src="dg6.gif";
dg7=new Image();dg7.src="dg7.gif";
dg8=new Image();dg8.src="dg8.gif";
dg9=new Image();dg9.src="dg9.gif";
dgam=new Image();dgam.src="dgam.gif";
dgpm=new Image();dgpm.src="dgpm.gif";

function dotime(){ 
theTime=setTimeout('dotime()',1000);
d = new Date();
hr= d.getHours()+100;
mn= d.getMinutes()+100;
se= d.getSeconds()+100;
if(hr==100){hr=112;am_pm='am';}
else if(hr<112){am_pm='am';}
else if(hr==112){am_pm='pm';}
else if(hr>112){am_pm='pm';hr=(hr-12);}
tot=''+hr+mn+se;
document.hr1.src = 'dg'+tot.substring(1,2)+'.gif';
document.hr2.src = 'dg'+tot.substring(2,3)+'.gif';
document.mn1.src = 'dg'+tot.substring(4,5)+'.gif';
document.mn2.src = 'dg'+tot.substring(5,6)+'.gif';
document.se1.src = 'dg'+tot.substring(7,8)+'.gif';
document.se2.src = 'dg'+tot.substring(8,9)+'.gif';
document.ampm.src= 'dg'+am_pm+'.gif';
}
dotime();

</script>

<script type="text/javascript">
tday  =new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

function GetClock(){
d = new Date();
nday   = d.getDay();
nmonth = d.getMonth();
ndate  = d.getDate();
nyear = d.getYear();
nhour  = d.getHours();
nmin   = d.getMinutes();
nsec   = d.getSeconds();

if(nyear<1000) nyear=nyear+1900;

     if(nhour ==  0) {ap = " AM";nhour = 12;} 
else if(nhour <= 11) {ap = " AM";} 
else if(nhour == 12) {ap = " PM";} 
else if(nhour >= 13) {ap = " PM";nhour -= 12;}

if(nmin <= 9) {nmin = "0" +nmin;}
if(nsec <= 9) {nsec = "0" +nsec;}


document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
setTimeout("GetClock()", 1000);
}
window.onload=GetClock;
</script>
<div id="clockbox"></div>
	<div align="center">
	<div align="center">
	<div align="center">
	<div align="center"><a href="utama_user.php">
	  <input name="Submit5" type="button" class="style19" value="Home" />
	  </a> <a href="senarai_penggunaan_user.php">
	  <input name="Submit3" type="button" class="style19" value="Record" />
	</a> <a href="sebelum_tempah.php">
	<input name="TEMPAHAN" type="button" class="style19" id="TEMPAHAN" value="BOOKING" />
	</a><a href="status_tempah_user.php">
	<input name="Submit" type="button" class="style19" value="Action" />
	</a><a href="logout.php">
	<input name="Submit4" type="button" class="style19" value="Log out" />
	</a><a href="status_tempah_admin.php"> 
         
	  
	  
	  </a>	  </div>
	  <script type="text/javascript" language="javascript" src="datetimepicker.js"></script>
  <script language="JavaScript">
<!--
if (document.images)
		{
		calimg= new Image(16,16); 
		calimg.src=<img src="New folder/cal.gif" />; 
		}
function MM_popupMsg(msg) { //v1.0
  alert(msg);
}
//-->
</script>
	<p align="right" >
      <form action="sebelum_tempah.php" method="post" >
        <div align="center"><span class="style16 style17">[PLEASE ENTER YOUR IC/PASSPORT NO. </span>
            <input name="noic" type="text" size="15" value="" id="" /> ] </span>
            <input type="submit" name="Submit10" value="Verify" />
        </div>
        <label>
        <div align="center"><br />
            <br />
        </div>
        </label>
        <table width="384" border="1" align="center" cellpadding="3" cellspacing="0">
          <tr bgcolor="#FF6600">
            <th width="117" scope="row">Name</th>
            <th width="73" scope="row">IC/Passport No.</th>
            <th width="80" scope="row">HP No.</th>
            <th width="80" scope="row">Action</th>
          </tr>
          <?php 
include "conn.php";

if($_POST){
$sql= "SELECT no,noic,name,no_tel FROM user WHERE noic ='$_POST[noic]'";
//$sql= "SELECT no,noic,nam3,no_tel FROM user WHERE noic = 93 ";
$result=mysql_query($sql,$db_conn);

while ($row=mysql_fetch_array($result)){

//$i++;											
?>
          <tr>
           <th scope="row"><?php echo $row{'name'};?></th>
            <th scope="row"><?php echo $row{'noic'}; ?></th>
            <th scope="row"><?php echo $row{'no_tel'}; ?></th>
            <th scope="row"><a href="semasa_tempah.php?bil=<?php echo $row['no'];?>" target="_self">Book</a></th>
        </tr>
          <?php }
	}
	mysql_close($db_conn);
	?>
        </table>
        <p>
          <label>
          <div align="center">
          </label>
      </form>
      <p align="right" >
</table>
 
</body>
</html>
