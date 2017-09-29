<?php
require 'genre.php';
require_once 'db.php';
require_once 'functions.php';
$db=db_connect();

$stmt=$db-> prepare('SELECT * FROM movies WHERE id = ?');
$stmt->execute([$_GET['id']]);
$movie = $stmt->fetch();

echo build_form($movie['name'],$movie['year'], $movie['director'], $movie['genre'],$movie['description']);
//var_dump($movie);