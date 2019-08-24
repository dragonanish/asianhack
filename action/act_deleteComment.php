<?php
	session_start();
	include "DbConnection.php";

	if(isset($_GET["id"])){
		$CommentId = $_GET["id"];

		$sql = "Update comments set IsDeleted = 1 where CommentId=".$CommentId;

		$deleteResult = mysqli_query($db,$sql);

		$postSql = "Select PostId from comments where CommentId=".$CommentId;
		$postIDResul = mysqli_query($db,$postSql);
		$row = mysqli_fetch_assoc($postIDResul);
		header('location:../view/post_view.php?id='.$row["PostId"]);
	}

?>