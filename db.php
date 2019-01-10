<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$db="php-neha";

$con = new mysqli($dbhost,$dbuser,$dbpass,$db);
if(!$con)
{
    die("not connected");
}

?>