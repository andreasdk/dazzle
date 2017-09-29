
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
<?php
require_once 'db.php';
require 'color.php';
require 'brand.php';

$db=db_connect();

$stmt = $db-> prepare('SELECT * FROM toys');
$stmt -> execute();
$toys = $stmt->fetchAll();


foreach($toys as $toy){
    echo  '<b>name:  </b>' . htmlspecialchars  ($toy['name']);
    echo '<br>';
    echo  '<b>price:    </b>' . htmlspecialchars  ($toy['price']);
    echo '<br>';
    echo  '<b>brand:    </b>' . htmlspecialchars  ($toy['brand']);
    echo '<br>';
    echo  '<b>color:    </b>' . htmlspecialchars  ($colors[$toy['color']]);
    echo '<br>';
    echo  '<b>brand:    </b>' . htmlspecialchars  ($brands[$toy['brand']]);
    echo '<br>';
    echo '<a href="edit.php?id=' . htmlspecialchars($toy['id']) . '">edit</a>';
    echo '<br>';
    echo '<br>';



}
?>    
    
   
   

    </ol>
</body>
</html>