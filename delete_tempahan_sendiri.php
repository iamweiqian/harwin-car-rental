<?php
//include "inc.session.php";
include "conn.php";
$txtNo = $_GET['no'];
if (($_SESSION['no'])) {
	echo "Delete Failed";
	}
	else {
	$sql = "DELETE FROM booking WHERE no ='$txtNo'";
	mysql_query($sql, $db_conn)
	or die ("Failed to access SQL".mysql_error());
	#Jika Sukses
	//echo "<h4><font color=blue>DELETE $officer SUCCESS</font></h4>";
	echo "<script type='text/javascript'>\n";
       echo "alert('DELETE SUCCESSFULLY');\n";
       echo "history.go(-1);\n";
       echo "</script>";
	echo "<script>location.href='status_tempah_user.php'</script>";
	//include "userview.php";
	}
	?>