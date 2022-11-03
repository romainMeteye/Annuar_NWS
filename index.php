<?php
  include "header.php";
try
{
	$db = new PDO('mysql:host=localhost;dbname=annuar;charset=utf8', 'root', '');
}
catch (Exception $e)
{
  die('Erreur : ' . $e->getMessage());
}

$sql = 'SELECT *
        FROM contacts
        LEFT JOIN speciality ON contact_id  = contact_id
        WHERE contacts.speciality_id = speciality.speciality_id;';
$query = $db->prepare($sql);
$query->execute();
$contacts = $query->fetchAll(PDO::FETCH_ASSOC);


?>

<main>
  <div class="tablediv ml-auto mr-auto mt-3">
  <table class="table text-center">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Nom</th>
        <th scope="col">Prénom</th>
        <th scope="col">Age</th>
        <th scope="col">Téléphone</th>
        <th scope="col">Email</th>
        <th scope="col">Adresse</th>
        <th scope="col">Ville</th>
        <th scope="col">En alternance</th>
        <th scope="col">Année</th>
        <th scope="col">Spécialité</th>
      </tr>
    </thead>
    <tbody>
    <?php
    foreach ($contacts as $contact)
    {
        ?>
        <tr>
          <th scope="row"><?php echo $contact['contact_id'];?></th>
          <td><?php echo $contact['contact_firstname'];?></td>
          <td><?php echo $contact['contact_lastname'];?></td>
          <td><?php echo $contact['contact_age'];?></td>
          <td><?php echo $contact['contact_phone'];?></td>
          <td><?php echo $contact['contact_email'];?></td>
          <td><?php echo $contact['contact_adresse'];?></td>
          <td><?php echo $contact['contact_ville'];?></td>
          <td><?php if ($contact['alternance'] == 1) {echo "Oui";} else {echo "Non";} ;?></td>
          <td><?php echo 'A' . $contact['cycle_id'];?></td>
          <td><?php echo $contact['speciality_name'];?></td>
          <td><a class="btn btn2 mt-4" href="#deletefunction"><i class="fas fa-trash-alt text-white pe-2"></i>Supprimer</a></td>
      </tr>
        <?php
    };
?>
    </tbody>
  </table>
  </div>
  <div class="d-flex justify-content-center">
  <img class="barre" src="https://normandiewebschool.fr/uploads/cursus-wave.svg" alt="">
  </div>
 

</main>
<footer>

</footer>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

</body>

</html>
