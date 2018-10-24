<?php
session_start();
if (!isset($_SESSION['username']))
	header("location: index.php");
else
{
	
	{
		$_SESSION['table']="lev2";
		header("location:js.php");
	}
}
?>