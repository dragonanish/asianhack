
<?php
	session_start();
	include "DbConnection.php";
	if (isset($_POST['btn_login'])) {

		$email = $_POST['Email'];
		$password = $_POST['Password'];

		$mdPassword = md5($password);

		$query = "SELECT * FROM user WHERE email='$email' AND password='$mdPassword' LIMIT 1";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) {
			$logged_in_user = mysqli_fetch_assoc($results);
			$_SESSION['UserId'] = $logged_in_user['UserId'];
			header('location: ../view/home.php');		  
		}else{
			header('location: ../view/login.php');	
		}

	}else{
		header('location: ../view/login.php');	
	}

?>
