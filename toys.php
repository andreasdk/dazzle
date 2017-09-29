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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Chango" rel="stylesheet">


    <style>
    body{
        font-family: 'Chango', cursive;
        font-size:25px;
        font-weight: bolder;
        color: #b7176a ;
        letter-spacing:3px;
        background: url(back2.png) no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        text-shadow: 2px 2px #ffffff;

    }

    input {
    -webkit-border-radius: 50px;
    -moz-border-radius: 50px;
    border-radius: 50px;
    color:#b7176a;
    background-color:#ffffff;
    border:10px;
    
    }
    select{
    color:#28385b;
    }
    textarea{
    -webkit-border-radius: 50px;
    -moz-border-radius: 50px;
    border-radius: 20px;  
    color: #000000;  
    
    }
    div{
        margin-top: 0.5em;
        margin-left: 3em;
        margin-bottom:5em;
    }
    input .button{
    -webkit-border-radius: 50px;
    -moz-border-radius: 50px;
    border-radius: 50px; 
    padding:10px;
    }
    
    </style>

</head>
<body>
<div class="container">
<div class='form-group'>

<?php echo build_form('','','','',''); ?>

</div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>