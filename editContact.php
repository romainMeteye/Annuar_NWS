<?php

include "header.php";

function editContact($firstname,$lastname,$age,$phone,$email,$adress,$city,$alternance) {
try
{
	$db = new PDO('mysql:host=localhost;dbname=annuar;charset=utf8', 'root', '');
}
catch (Exception $e)
{
  die('Erreur : ' . $e->getMessage());
}

$sql = "UPDATE contacts(contact_firstname, contact_lastname, contact_age, contact_phone, contact_email, contact_adresse, contact_ville, alternance)
        SET (:firstname, :lastname, :age, :phone, :email, :adress, :city, :alternance)";
$sth = $db->prepare($sql);
$sth->execute([
    'firstname' => $firstname,
    "lastname" => $lastname,
    "age" => $age,
    "phone" => $phone,
    "email" => $email,
    "adress" => $adress,
    "city" => $city,
    "alternance" => $alternance,
    ]);

print_r($sth->errorInfo());
}

?>