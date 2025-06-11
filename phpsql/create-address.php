<?php
require 'connexion.php';

$street = $_POST["street"];
$city = $_POST["city"];
$zipcode = $_POST["zipcode"];

$query = $db->prepare("INSERT INTO address (street, zipcode, city) VALUES (:street, :zipcode, :city)");
$parameters = [
    "street" => $street,
    "zipcode" => $zipcode,
    "city" => $city
];
$query->execute($parameters);
?>