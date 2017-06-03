<?php
echo "hello";
$servername = getenv('IP');
//$servername = "terrywbradyc9-tb-demo-4877922";
$username = getenv('C9_USER');
$password = "";
$database = "c9";
$dbport = 3306;

$dsn = "mysql:dbname={$database};host={$servername}";
$dbh = new PDO($dsn, $username, $password);
$res = $dbh->query("select * from testdata");

$sql = "select * from testdata";
//$sql = "select 'foo','bar'";
$arg = array();
$stmt = $dbh->prepare($sql);
$stmt->execute($arg);

if ($dbh->errorCode() > 0) {
    print_r($dbh->errorInfo());
	die("Error in SQL query: {$sql}");
}       
$result = $stmt->fetchAll();
foreach ($result as $row) {
 	print_r($row);
}  
?>