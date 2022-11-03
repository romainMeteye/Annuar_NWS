<?php

require_once ("student.php");
include "header.php";

// $student->Initialize("Test");
// $student = new Student("Romain", "Météyé",22,"0604027598","rmeteye@normandiewebschool.fr","23 bis rue de la paix","Vernon",1);

function newContact($firstname,$lastname,$age,$phone,$email,$adress,$city,$alternance) {
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

// newContact("Romain", "Météyé",22,"0604027598","rmeteye@normandiewebschool.fr","23 bis rue de la paix","Vernon",1);
// var_dump($student);


?>
<body>
  <article class="d-flex justify-content-center text-center mt-4">
    <form action="addContact.php" method="post">
      <p>Nom <input type="text" name="firstname" /></p>
      <p>Prénom <input type="text" name="lastname" /></p>
      <p>Age <input type="text" name="age" /></p>
      <p>N° de Téléphone <input type="text" name="phone" /></p>
      <p>Email <input type="text" name="email" /></p>
      <p>Adresse Postal <input type="text" name="adress" /></p>
      <p>Ville <input type="text" name="city" /></p>
      <p>En alterance ? <input type="checkbox" name="alternance" /></p>
      <p><input type="submit" name="submit" value="Envoyer" /></p>
    </form>
  </article>
</body>


<?php

  if(isset($_POST['submit'])) 
   {
     $submition = new Student($_POST['firstname'], $_POST['lastname'], $_POST['age'], $_POST['phone'], $_POST['email'], $_POST['adress'], $_POST['city'], $_POST['alternance']);
      newContact($submition->firstname,$submition->lastname,$submition->age,$submition->phone,$submition->email,$submition->adress,$submition->city,$submition->alternance);
   }
?>