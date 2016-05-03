<?php
include "conn.php";

$name = $_POST['name'];
$noic = $_POST['noic'];
$notel = $_POST['notel'];
$car = $_POST['car'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$start_hour = $_POST['start_hour'];
$start_min = $_POST['start_min'];
$start_time = $_POST['start_time'];
$end_hour = $_POST['end_hour'];
$end_min = $_POST['end_min'];
$end_time = $_POST['end_time'];



if(trim($notel) == "") {
echo "<script>
					alert('Please enter your HANDPHONE NUMBER!');
					window.location.href='sebelum_tempah.php'; 
		</script>";
}
if(trim($car) == "") {
echo "<script>
					alert('Please select a CAR!');
					window.location.href='sebelum_tempah.php'; 
		</script>";
}
else if(trim($start_date) == "") {
echo "<script>
					alert('Please select START DATE!');
					window.location.href='sebelum_tempah.php'; 
		</script>";
}
else if(trim($end_date) == "") {
echo "<script>
					alert('Please select END DATE!');
					window.location.href='sebelum_tempah.php'; 
		</script>";
}
else if(trim($start_hour) == "") {
echo "<script>
					alert('Please select START HOUR!');
					window.location.href='sebelum_tempah.php'; 
		</script>";
}
else if(trim($start_min) == "") {
echo "<script>
					alert('Please select START MINUTE!');
					window.location.href='sebelum_tempah.php'; 
		</script>";
}
else if(trim($start_time) == "") {
echo "<script>
					alert('Please select START TIME!');
					window.location.href='sebelum_tempah.php'; 
		</script>";
}
else if(trim($end_hour) == "") {
echo "<script>
					alert('Please select END HOUR!');
					window.location.href='sebelum_tempah.php'; 
		</script>";
}
else if(trim($end_min) == "") {
echo "<script>
					alert('Please select END MINUTE!');
					window.location.href='sebelum_tempah.php'; 
		</script>";
}
else if(trim($end_time) == "") {
echo "<script>
					alert('Please select END TIME!');
					window.location.href='sebelum_tempah.php'; 
		</script>";
}
else {
$sql = "INSERT INTO booking SET name='$name',noic='$noic',no_tel='$notel', car='$car', start_hour='$start_hour',start_min='$start_min',start_time='$start_time',end_hour='$end_hour', end_min='$end_min', end_time='$end_time', start_date='$start_date', end_date='$end_date',status='new'";
mysql_query($sql, $db_conn)
 or die ("An Error occurred during insertion.".
 mysql_error());
 echo 
"<script>
					alert('Your request has been submitted!!');
					window.location.href='sebelum_tempah.php'; 
		</script>";
   }         
	mysql_close($db_conn);
?>

