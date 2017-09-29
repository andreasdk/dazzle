<?php
function db_connect()
{
    require 'db_config.php';
    $db = new PDO('mysql:host=localhost;dbname=toys;charset=utf8', $host ,$password );
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;
}
?>