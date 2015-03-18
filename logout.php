<?php
session_start();
if (isset($_SESSION['id'])) {
	unset($_SESSION['id']);
	header("Location: index.php");
}elseif (isset($_SESSION['adminid'])) {
	unset($_SESSION['adminid']);
	header("Location: index.php");
}
?>