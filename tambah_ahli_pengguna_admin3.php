<?php
	include "conn.php";

	$Noic = $_POST['txtNoic'];
	$Name = $_POST['txtName'];
	$Notel = $_POST['txtNotel'];
	$Email = $_POST['txtEmail'];
	$UserName = $_POST['txtUserName'];
	$Password = $_POST['txtPassword'];
    $Id = 2;

	if(trim($Noic) == "") {
	echo "<script>
						alert(' Please enter your I/C NUMBER!');
						window.location.href='tambah_ahli_pengguna_admin2.php'; 
			</script>";
	} else if(trim($Name) == "") {
	echo "<script>
						alert(' Please enter your NAME!');
						window.location.href='tambah_ahli_pengguna_admin2.php'; 
			</script>";
	} else if(trim($Notel) == "") {
	echo "<script>
						alert('Please enter your HANDPHONE NUMBER!');
						window.location.href='tambah_ahli_pengguna_admin2.php'; 
			</script>";
	} else if(trim($Email) == "") {
	echo "<script>
						alert('Please enter your EMAIL ADDRESS!');
						window.location.href='tambah_ahli_pengguna_admin2.php'; 
			</script>";
	} else if(trim($UserName) == "") {
	echo "<script>
						alert('Please enter a USERNAME');
						window.location.href='tambah_ahli_pengguna_admin2.php'; 
			</script>";
	} else if(trim($Password) == "") {
	echo "<script>
						alert('Please enter your PASSWORD');
						window.location.href='tambah_ahli_pengguna_admin2.php'; 
			</script>";
	} else {
	$sql = "INSERT INTO user SET noic='$Noic', name='$Name', no_tel='$Notel',email='$Email',username='$UserName',password='$Password', id = '$Id'";
	mysql_query($sql, $db_conn)
	 or die ("An Error occurred during insert".
	 mysql_error());
	 echo 
	"<script>
		alert('You have succcessfully registered!!');
		window.location.href='login_mesyuarat.php'; 
	</script>";
	}
	
	mysql_close($db_conn);
?>

