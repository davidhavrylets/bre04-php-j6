
<?php 



$host = "db.3wa.io";
$port = "3306";
$dbname = "davydhavrylets_phpj6";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

$user = "davydhavrylets";
$password = "26f472ba361f190453abd9784e08474d";

$db = new PDO(
    $connexionString,
    $user,
    $password
);

var_dump($db);

?>