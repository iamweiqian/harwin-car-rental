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
.style21 {font-family: Arial, Helvetica, sans-serif;
	font-size: 36px;
}
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
	
      </a>      </div>
	<p align="right" >
      <p align="center" ><span class="style21">Car Rental Form</span>
      <form action="tempahan2.php" method="post" name="form2" target="_self" id="form2">
        <table width="73%" border="4" align="center" cellpadding="5" cellspacing="0" bgcolor="#999999" summary="Harwin Online Car Rental System">
          
          <tr>
            <td width="21%" bgcolor="#FF6600">Name</td>
            <td width="79%" bgcolor="#FFCC66"><input name="name" type="text" id="name" size="75" /></td>
          </tr>
          <tr>
            <td bgcolor="#FF6600"> IC/Passport No.</td>
            <td bgcolor="#FFCC66"><input name="noic" type="text" id="noic" size="75" /></td>
          </tr>
          <tr>
            <td bgcolor="#FF6600" >HP No. </td>
            <td bgcolor="#FFCC66"><input name="notel" type="text" id="notel" size="75" /></td>
          </tr>
          <tr>
            <td height="62" bgcolor="#FF6600">Car</td>
            <td bgcolor="#FFCC66"><label></label>
                <label> <br />
                <input name="car" type="radio" value="Manual" />
                </label>
              Viva (Manual)
              <label>
                <input name="car" type="radio" value="Auto" />
              </label>
              Viva (Auto)
              <label></label></td>
          </tr>
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
          <tr>
            <td bgcolor="#FF6600">Start Date </td>
            <td bgcolor="#FFCC66"><label></label>
                <input name="start_date" type="text" size="15" value="" id="demo1" />
              <a href="javascript:NewCal('demo1','ddmmyyyy')"><img src="image/cal.gif" width="16" height="16" /> </a></td>
          </tr>
          <tr>
            <td bgcolor="#FF6600">End Date</td>
            <td bgcolor="#FFCC66"><label></label>
                <input name="end_date" type="text" size="15" value="" id="demo2" />
              <a href="javascript:NewCal('demo2','ddmmyyyy')"><img src="image/cal.gif" width="16" height="17" /> </a></td>
          </tr>
          <tr>
            <td bgcolor="#FF6600">Start Time</td>
            <td bgcolor="#FFCC66"><label>
              <select name="start_hour">
                <option>00</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
                <option>04</option>
                <option>05</option>
                <option>06</option>
                <option>07</option>
                <option>08</option>
                <option>09</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
              </select>
              </label>
                <label>
                <select name="start_min">
                  <option>00</option>
                  <option>10</option>
                  <option>20</option>
                  <option>30</option>
                  <option>40</option>
                  <option>50</option>
                </select>
                </label>
                <label>
                <select name="start_time">
                  <option>am</option>
                  <option>pm</option>
                </select>
                </label>            </td>
          </tr>
          <tr>
            <td bgcolor="#FF6600">End Time</td>
            <td bgcolor="#FFCC66"><label>
              <select name="end_hour">
                <option>00</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
                <option>04</option>
                <option>05</option>
                <option>06</option>
                <option>07</option>
                <option>08</option>
                <option>09</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
              </select>
              </label>
                <label>
                <select name="end_min">
                  <option>00</option>
                  <option>10</option>
                  <option>20</option>
                  <option>30</option>
                  <option>40</option>
                  <option>50</option>
                </select>
                </label>
                <label>
                <select name="end_time">
                  <option>am</option>
                  <option>pm</option>
                </select>
                </label>            </td>
          </tr>
        </table>
            <div align="center">
              <input type="submit" name="Submit6" value="Submit" />
            </div>
      </form>
      <div align="center"></div>
      <p align="center" >
    </table>
 
</body>
</html>
