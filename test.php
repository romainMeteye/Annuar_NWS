<?php

function checkAdd() 
{
    require_once ("addContact.php");
    $url = 'http://localhost/project/Annuar/addContact.php';

    $header = get_headers($url);

    return print_r($header);
}

checkAdd();
?>