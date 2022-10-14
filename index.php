<style>
    <?php include 'css/main.css'; ?>
</style>

<?php

try
{
	$db = new PDO('mysql:host=localhost;dbname=annuar;charset=utf8', 'root', '');
}
catch (Exception $e)
{
  die('Erreur : ' . $e->getMessage());
}

$sql = 'SELECT * FROM contacts';
$query = $db->prepare($sql);
$query->execute();
$contacts = $query->fetchAll(PDO::FETCH_ASSOC);


// require_once ("student.php");

// $students = [];

// // $student = new Student("prenom", "nom");
// // $student->Initialize("Test");
// $students[] = new Student("prenom", "nom");

// var_dump($students);

// $student = [];

// $student["age"] = 22;
// $student["prenom"] = "Romain";
// $student["nom"] = "Meteye";

?>

<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <meta name="theme-color" content="#fafafa">
</head>

<body>

<header class="navigation">

<nav class="navbar navbar-expand-lg c-navbar-light">
<div class="navbar container px-3">
<a class=navbar-brand href=https://normandiewebschool.fr><img width=100 src=https://normandiewebschool.fr/uploads/logo_nws.svg alt="L'école des métiers du numérique"></a>
<button class=navbar-toggler type=button data-toggle=collapse data-target=#navigation aria-controls=navigation aria-expanded=false aria-label="Toggle navigation">
<span class=navbar-toggler-icon></span>
</button>
<div class="collapse navbar-collapse text-center" id=navigation>
<ul class="list-inline text-center align-items-center navbar-nav ml-auto mr-auto">
<li class=nav-item>
<a class=nav-link href=index.php>Liste des Candidats</a>
</li>
<li class=nav-item>
<a class=nav-link href=addContact.php>Ajouter un Candidat</a>
</li>
<li class=nav-item>
<a class=nav-link href=editContact.php>Modifier un Candidat</a>
</li>
</ul>
</div>
<img id=burger alt="Ouvrir le menu" class="d-block d-lg-none" src=/uploads/menu_burger.svg>
</div>
</nav>
<img data-src=/uploads/points.svg class="lazyload points" alt>
</div>
</nav>
</header>
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
          <td><?php echo $contact['cycle_id'];?></td>
          <td><?php echo $contact['speciality_id'];?></td>
      </tr>
        <?php
    };
?>
    </tbody>
  </table>
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
