<?php

function checkAdd() 
{
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

    var_dump(count($contacts));

    $url = 'http://localhost/project/Annuar/addContact.php';

    $header = get_headers($url);

    print_r($header);

    $sql = 'SELECT * FROM contacts';
    $query = $db->prepare($sql);
    $query->execute();
    $contacts = $query->fetchAll(PDO::FETCH_ASSOC);
    var_dump(count($contacts));
        
}



checkAdd();
?>