<?php
include("pass.php");
echo "<h1>welcome $username To </h1>\n";
$conn = new mysqli("localhost",$username,$password);
if (!$conn)
{
	die("connection failed");
}
else
{
	//Creating bWAPP database 
	$command = "CREATE DATABASE IF NOT EXISTS bWAPP";
	mysqli_query($conn,$command);
	$command="CREATE USER IF NOT EXISTS 'bWAPP'@'localhost' IDENTIFIED BY 'bWAPP';";
	mysqli_query($conn,$command);
	$command = "GRANT ALL PRIVILEGES ON *.* TO 'bWAPP'@'localhost';";
	mysqli_query($conn,$command);
	$command = "SHOW GRANTS FOR 'bWAPP'@'localhost';";
	mysqli_query($conn,$command);
	$command = "flush privileges;";
	mysqli_query($conn,$command);
	//Creating dvwa database 
	$command = "CREATE DATABASE IF NOT EXISTS  dvwa;";
	mysqli_query($conn,$command);
    $command = "CREATE USER IF NOT EXISTS 'dvwa'@'localhost' IDENTIFIED BY 'dvwa';";
	mysqli_query($conn,$command);
	$command = "GRANT ALL PRIVILEGES ON *.* TO 'dvwa'@'localhost';";
	mysqli_query($conn,$command);
    $command = "SHOW GRANTS FOR 'dvwa'@'localhost';";
	mysqli_query($conn,$command);
    $command = "flush privileges;";
    mysqli_query($conn,$command);
	//Creating xvwa database
	$command = "CREATE DATABASE IF NOT EXISTS  xvwa;";
	mysqli_query($conn,$command);
	$command = "CREATE USER IF NOT EXISTS 'xvwa'@'localhost' IDENTIFIED BY 'xvwa';";
	mysqli_query($conn,$command);
	$command = "GRANT ALL PRIVILEGES ON *.* TO 'xvwa'@'localhost';";
	mysqli_query($conn,$command);
	$command = "SHOW GRANTS FOR 'xvwa'@'localhost';";
	mysqli_query($conn,$command);
	$command = "flush privileges;";
	mysqli_query($conn,$command);
	//Creating mutillidae database
	$command = "CREATE DATABASE IF NOT EXISTS mutillidae;";
	mysqli_query($conn,$command);
	$command = "CREATE USER IF NOT EXISTS 'mutillidae'@'localhost' IDENTIFIED BY 'mutillidae';";
	mysqli_query($conn,$command);
	$command = "GRANT ALL PRIVILEGES ON mutillidae.* TO 'mutillidae'@'localhost';";
	mysqli_query($conn,$command);
	$command = "SHOW GRANTS FOR 'mutillidae'@'localhost';";
	mysqli_query($conn,$command);
	$command = "use mysql;";
	mysqli_query($conn,$command);
	$command = "flush privileges;";
	mysqli_query($conn,$command);
	$command = "ALTER USER 'root'@'localhost' IDENTIFIED BY 'mutillidae';";
	mysqli_query($conn,$command);
	$command = "SET PASSWORD FOR 'root'@'localhost' = PASSWORD('mutillidae');";
	mysqli_query($conn,$command);
	$command = "flush privileges;";
	mysqli_query($conn,$command);
	//creating sql database
	$command = "CREATE DATABASE IF NOT EXISTS security;";
	mysqli_query($conn,$command);
	$command  = "CREATE DATABASE IF NOT EXISTS challenges;";
	mysqli_query($conn,$command);
	$command = "CREATE USER IF NOT EXISTS 'sql'@'localhost' IDENTIFIED BY 'sql';";
	mysqli_query($conn,$command);
	$command = "GRANT ALL PRIVILEGES ON *.* TO 'sql'@'localhost';";
	mysqli_query($conn,$command);
	$command = "SHOW GRANTS FOR 'sql'@'localhost';";
	mysqli_query($conn,$command);
	$command = "flush privileges;";
	mysqli_query($conn,$command);
}
?>
