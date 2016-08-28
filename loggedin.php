<?php
session_start();
	if($_SESSION["loggedin"] !== "adgang")
	{
		header("Location: index.php");
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<h1>Velkommen, du er nu logget ind..</h1>
</body>
</html>