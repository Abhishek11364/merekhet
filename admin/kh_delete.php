<?php
		include "connection.php";
		$id = $_GET['i'];
		mysqli_query($con,"delete from kharif where id='$id'");
		header("location:kh_view.php");
?>