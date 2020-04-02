<?php
$connection = new PDO('pgsql:host = localhost;dbname =Register','postgres','3228');
if(!$connection){
    die('Error connect to db!');
}
