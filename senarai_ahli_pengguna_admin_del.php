<?php
//include "inc.session.php";
include "conn.php";
$txtnoic = $_GET['noic'];
if (trim($txtnoic) == "") {
	echo "Delete Failed";
	}
	else {
	$sql = "DELETE FROM user WHERE noic ='$txtnoic'";
	mysql_query($sql, $db_conn)
	or die ("Failed to access SQL".mysql_error());
	#Jika Sukses
	//echo "<h4><font color=blue>DELETE $officer SUCCESS</font></h4>";
	echo "<script type='text/javascript'>\n";
       echo "alert('DELETE noic = $txtnoic Delete Successfully');\n";
       echo "history.go(-1);\n";
       echo "</script>";
	echo "<script>location.href='senarai_ahli_pengguna_admin.php'</script>";
	//include "userview.php";
	}
	?>