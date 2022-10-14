<?php

require_once ("student.php");

// $student->Initialize("Test");
// $student = new Student("Romain", "Météyé",22,"0604027598","rmeteye@normandiewebschool.fr","23 bis rue de la paix","Vernon",1);

function newContact() {
try
{
	$db = new PDO('mysql:host=localhost;dbname=annuar;charset=utf8', 'root', '');
}
catch (Exception $e)
{
  die('Erreur : ' . $e->getMessage());
}

$sql = "INSERT INTO contacts(contact_firstname, contact_lastname, contact_age, contact_phone, contact_email, contact_adresse, contact_ville, alternance)
        VALUES(:firstname, :lastname, :age, :phone, :email, :adress, :city, :alternance)";
$sth = $db->prepare($sql);
$sth->execute([
    'firstname' => "Mathilde",
    "lastname" => "Ultry",
    "age" => 19,
    "phone" => "0748571236",
    "email" => "mathilde.ultry2@test.fr",
    "adress" => "104 avenue Charle de Gaule",
    "city" => "Rouen",
    "alternance" => 1,
    ]);

print_r($sth->errorInfo());
}

// newContact();
// var_dump($student);

?>