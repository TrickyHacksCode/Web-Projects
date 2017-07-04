<?php 
	session_start();
	unset($_SESSION['username']);
	unset($_SESSION['privilegio']);
	header('Location: index.php');
?>
