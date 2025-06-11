<?php
require 'connexion.php';

$id = $_POST['id'];

$query = $db->prepare("DELETE FROM address WHERE id = :id");
$query->execute(["id" => $id]);


echo "$id a été supprimée.";
?>