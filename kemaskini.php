

<?php
include "conn.php";


$rbStatus = $_POST['rbStatus'];
$txtNo = $_POST['txtNo'];
if(trim($rbStatus) == ""){
	echo"Status is empty, please fill in.";
}

else{
	$sqlUbah="UPDATE booking SET
	status='$rbStatus'
	WHERE no='$txtNo'";
	mysql_query($sqlUbah, $db_conn)
	or die("Failed to access SQL".
	mysql_error());
	#Jika sukses
	echo"<script>
					alert('UPDATED!');
					window.location.href='status_tempah_admin.php'; 
		</script>";
	
}
?>