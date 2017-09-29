<?php
require_once 'db.php';
require 'genre.php';
$db=db_connect();

$stmt = $db-> prepare('SELECT * FROM movies');
$stmt -> execute();
$movies = $stmt->fetchAll();
//var_dump($movies);

foreach($movies as $movie){
    echo  '<b>Movie:  </b>' . htmlspecialchars  ($movie['name']);
    echo '<br>';
    echo  '<b>Year:    </b>' . htmlspecialchars  ($movie['year']);
    echo '<br>';
    echo  '<b>Director:    </b>' . htmlspecialchars  ($movie['director']);
    echo '<br>';
    echo  '<b>Plot:    </b>' . htmlspecialchars  ($movie['description']);
    echo '<br>';
    echo  '<b>Genre:    </b>' . htmlspecialchars  ($genres[$movie['genre']]);
    echo '<br>';
    echo '<a href="edit.php?id=' . htmlspecialchars($movie['id']) . '">edit</a>';
    echo '<br>';
    echo '<br>';



}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ol>
    
    
    <?php foreach($movies as $movie){
    echo '<li> ';
    echo  '<b>Movie:  </b>' . htmlspecialchars  ($movie['name']);
    echo '<br>';
    echo  '<b>Year:    </b>' . htmlspecialchars  ($movie['year']);
    echo '<br>';
    echo  '<b>Director:    </b>' . htmlspecialchars  ($movie['director']);
    echo '<br>';
    echo  '<b>Plot:    </b>' . htmlspecialchars  ($movie['description']);
    echo '<br>';
    echo  '<b>Genre:    </b>' . htmlspecialchars  ($genres[$movie['genre']]);
    echo '<br>';
    echo '<a href="edit.php?id=' . htmlspecialchars($movie['id']) . '">edit</a>';
    echo '<br>';
    echo '<br>';
    echo '</li>';
}
    ?>
   

    </ol>
</body>
</html>