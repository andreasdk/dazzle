<?php
require_once 'db.php';
require 'genre.php';
$db=db_connect();

//var_dump($db);

if($_POST)
{
    $movie=[];
    foreach ($_POST as $key =>$value) {
        $movie[$key]= $value;
}
}


if($_POST)
{
  //  echo 'name: ' . htmlspecialchars($_POST['name']);
  //  echo '<br>';
  //  echo 'year: ' . htmlspecialchars($_POST['year']); 
  //  echo '<br>';
  //  echo 'director: ' . htmlspecialchars($_POST['director']);
  //  echo '<br>';
  // echo 'about movie: ' . htmlspecialchars($_POST['description']); 

  $stmt=$db->prepare('INSERT INTO movies(name, year, director, genre, description )VALUES (?,?,?,?,?)'); // will send it to database
  $stmt->execute([$_POST['name'], $_POST['year'], $_POST['director'], $_POST['genre'], $_POST['description']]);

  header('Location:movie.php?status=ok'); // this changes from post to get and sends it to an empty form page
  exit();
  //prepares the posted date on the html page
}
if(isset($_GET['status'])&& $_GET['status']=='ok') // isset because status-might not be -ok if it is echo ..
{
    echo 'movie added to the database!';
}
//instead of ? in the --- VALUES(:name, :description) $stmt->execute([ ':name'=> $_POST['name]), ':description'=>$_POST[':description'],])

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Koftiden</title>
    <style>
    body{
        font-family:helvetica;
        font-size:20px;
        color: navy;
    
    }
    div{
        margin-top: 3em;
        margin-left: 3em;
    }
    
    </style>

</head>
<body>
<div>
    <h1>Add a movie</h1>
<form action="" method="post">
    Movie: <br>  <input type="text" name="name"> <br>
    Year: <br> <input type="text" name="year"> <br>
    Director: <br>  <input type="text" name="director" > <br>
    Genre: <br>
    <select name="genre">
    <?php
    foreach ($genres as $id =>$genre){
        echo "<option value=$id>$genre</option>";
    }
    ?>
    </select> 
    <br><br>
    Movie Plot: <br> <textarea name="description" id="" cols="30" rows="10"></textarea>
    <br>
    <input type="submit" value="Find..">
</form>
   
</div>
</body>

</html>