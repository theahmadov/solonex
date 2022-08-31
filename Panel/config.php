<?php
	error_reporting(0);
	$dbhost="";

	/* User database */
	$dbuname="";

	/* Database Name */
	$dbname="";

	/* Password Database */
	$dbpass="";

	/* GET Login */
	$GET_login="123123";

	/* Login */
	$login="12312";

	/* Password */
	$password="123123";

	/* Interval */
	$interval="60";

	if ($sokol=="1") {
		$ip=$_SERVER['REMOTE_ADDR'];
		if (($ip!=$ip1)and($ip!=$ip2)and($ip!=$ip3)and($ip1.$ip2.$ip3!='')) {
			include"404.php";
		}
		mysql_connect($dbhost, $dbuname, $dbpass) or include"404.php";
		mysql_select_db($dbname);
	} else {
		include"404.php";
	}
?>