<?php
		include "connection.php";
		$id = $_GET['i'];
		mysqli_query($con,"delete from rabi where id='$id'");
		header("location:rb_view.php");
?>