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
	
	    </a>	  </div>
	<p align="right" >
      <p align="center" ><span class="style21">Registration Form</span>
      <form action="tambah_ahli_pengguna_admin3.php" method="post" name="form5" target="_self" id="form5">
        <table width="48%" border="4" align="center" cellpadding="4" cellspacing="4">
          <tr>
            <td bgcolor="#FF6600">IC/Passport No.</td>
            <td><label>
              <input name="txtNoic" type="text" id="txtNoic" size="60" maxlength="100" />
              </label>            </td>
          </tr>
          <tr>
            <td width="22%" bgcolor="#FF6600">Name</td>
            <td width="78%"><label>
              <input name="txtName" type="text" id="txtName" size="60" maxlength="100" />
              </label>            </td>
          </tr>
          <tr>
            <td bgcolor="#FF6600">HP No.</td>
            <td><label>
              <input name="txtNotel" type="text" id="txtNotel" />
              </label>            </td>
          </tr>
          <tr>
            <td bgcolor="#FF6600">Email</td>
            <td><label>
              <input name="txtEmail" type="text" id="txtEmail" />
              </label>            </td>
          </tr>
          <tr>
            <td bgcolor="#FF6600">Username </td>
            <td><label>
              <input name="txtUserName" type="text" id="txtUser Name" />
            </label>            </td>
          </tr>
          <tr>
            <td bgcolor="#FF6600">Password</td>
            <td><label>
              <input name="txtPassword" type="text" id="txtPassword" />
              </label>            </td>
          </tr>
          <tr>
            <td bgcolor="#FF6600">&nbsp;</td>
            <td><label></label>            <label>
              </label><div align="center"><input name="Submit" type="submit" id="Submit" value="Register" /><a href="login_mesyuarat.php">
	<input name="Submit4" type="button" class="style10" value="Cancel" />
            </label></td>
          </tr>

        </table>
                        <p align="center">
                          <label></label>
                        </p>
      </form>
	  		 
      <p>&nbsp;</p>
      <p align="center" >
    </table>
 
</body>
</html>
