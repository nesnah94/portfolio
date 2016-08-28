<!doctype html>
<html>
<head>
<?php
	if (!isset($_COOKIE['firsttime']))
	{
		setcookie("firsttime", "no");
		header('Location: index.php');
		exit();
	}
	else
	{
		header('Location: login.php');
		exit();
	}
	?>
</head>
<body>
</body>
</html>
