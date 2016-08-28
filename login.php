<?php
session_start(); 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form action="login.php" method="post">
Brugernavn: <input type="text" name="brugernavn">
Adgangskode: <input type="text" name="adgangskode">
<input type="submit" value="Send">
</form>
<?php 
	if (isset($_POST["brugernavn"]) && isset($_POST["adgangskode"])){
	{
		echo $_POST["brugernavn"] . " ";
	}
	if($_POST["adgangskode"] == "007" && $_POST["brugernavn"] == "jan"){
		$_SESSION["loggedin"] = "adgang";
		header("Location: index.php");
		}
		else
		{
			echo "Beklager, din adgangskode eller brugernavn er forkert!";
			}
			
		}
?>
</body>
</html>