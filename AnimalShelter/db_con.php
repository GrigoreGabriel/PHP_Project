<?php

$connection = new mysqli('localhost', 'root', null, 'animalshelter');
if(!$connection){
    echo ('Connection unsuccessful');
}

?>