<?php

require "connexion.php";

// Запрос: получаем имя + адрес
$query = $db->prepare("
    SELECT 
        users.first_name, users.last_name,
        address.street, address.city, address.zipcode
    FROM users
    LEFT JOIN address ON users.address = address.id
    WHERE users.id = :id
");

$parameters = [
    'id' => $_GET['id']
];

$query->execute($parameters);
$user = $query->fetch(PDO::FETCH_ASSOC);


echo "<pre>";
var_dump($user);
echo "</pre>";

?>