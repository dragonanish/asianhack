<?php
	session_start();
	include '../action/DbConnection.php';

	if(isset($_POST["btn_comment"])){

		$Comment = $_POST["comment"];
		$UserId = $_SESSION["UserId"];
		$PostId = $_SESSION["PostId"];


		$sql = "Insert into comments(Comment,PostId,UserId) Values('$Comment','$PostId','$UserId')";
		$sqlresult = mysqli_query($db,$sql);

		header('location:../view/post_view.php?id='.$PostId);
	}else{
		header('location:../view/post_view.php?id='.$PostId);
	}
?>