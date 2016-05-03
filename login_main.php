<?php 

    session_start();
    include ('conn.php');

        $username= $_POST['username'];
        $password = $_POST['password'];

    if(($username == '')||($password == '')) {
        ?>
		<script>
            alert('Invalid USERNAME and PASSWORD... Please try again!!');
                window.location.href='login_mesyuarat.php';
		</script>
    <?php } else {
        $query_login = "SELECT * FROM user WHERE username='$username' && password='$password' ";
        $result_login = mysql_query($query_login);
        $row_login = mysql_fetch_array($result_login);

    if (($username == $row_login['username']) && ($password == $row_login['password'])) {

        $_SESSION['username'] = $row_login['username'];
        $_SESSION['noic'] = $row_login['noic'];
        $_SESSION['name']= $row_login['name'];
		
		if ($row_login['id'] == '1') {
			include 'utama_admin.php';
		} else if ($row_login['id'] == '2') {
			include 'utama_user.php';
		}
	} else {
        ?>
		<script>
            alert('Invalid USERNAME and PASSWORD... Please try again!!');
            window.location.href='login_mesyuarat.php';
		</script>
    <?php }
    }

?>


