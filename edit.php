<?php
require_once 'db.php';
require_once 'functions.php';
require 'brand.php';
require 'color.php';
$db=db_connect();

$stmt=$db-> prepare('SELECT * FROM toys WHERE id = ?');
$stmt->execute([$_GET['id']]);
$toys = $stmt->fetch();

echo build_form($toys['name'],$toys['price'], $toys['brand'], $toys['color'],$toys['description']);
//var_dump($movie);