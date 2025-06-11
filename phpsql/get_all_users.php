<?php



$query = $db->prepare("SELECT * FROM users ");

$parameters = [
    'id' => $_GET['id']
];

$query->execute();
$users = $query->fetchAll(PDO::FETCH_ASSOC);

// Выводим результат
var_dump($users);

?>