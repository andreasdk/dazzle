<?php
require_once 'db.php';
require 'brand.php';
require 'color.php';
require 'functions.php';
$db=db_connect();

//var_dump($db);
//var_dump($_POST);
if($_POST)
{
    $toys=[];
    foreach ($_POST as $key => $value) {
        $toys[$key] = $value;
    }
}


if($_POST)
{
    $errors = array();
    if(empty($_POST ['name'])){
        $errors[] = 'missing name';
    }
    if (empty($_POST['price'])){
        $errors[] = 'missing price';
    }
    if (!isset($_POST['brand']) || strlen($_POST['brand']) == 0 ){
        $errors[] = 'missing brand';
    }
    if (!isset($_POST['color']) || strlen($_POST['color']) == 0 ){
        $errors[] = 'missing color ';
    }
    if (empty($_POST['description'])){
        $errors[] = 'missing description ';
    }
    
    if (!empty($errors)) {
        foreach($errors as $error){
            echo $error;
            echo '<br>';
        }
        exit();
    }
  //  echo 'name: ' . htmlspecialchars($_POST['name']);
  //  echo '<br>';
  //  echo 'year: ' . htmlspecialchars($_POST['year']); 
  //  echo '<br>';
  //  echo 'director: ' . htmlspecialchars($_POST['director']);
  //  echo '<br>';
  // echo 'about movie: ' . htmlspecialchars($_POST['description']); 

  $stmt=$db->prepare('INSERT INTO toys(name, price, brand, color, description )VALUES (?,?,?,?,?)'); // will send it to database
  $stmt->execute([$_POST['name'], $_POST['price'], $_POST['brand'], $_POST['color'], $_POST['description']]);
   // var_dump($_POST);
   

  header('Location:toys.php?status=ok'); // this changes from post to get and sends it to an empty form page
  exit();
  //prepares the posted date on the html page
}

if(isset($_GET['status'])&& $_GET['status']=='ok') // isset because status-might not be -ok if it is echo ..
{
    echo 'toy added to the database!';
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
<?php echo build_form('','','','',''); ?>
</body>

</html>