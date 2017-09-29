<?php
require_once 'db.php';
require_once 'functions.php';
require 'brand.php';
require 'color.php';
$db=db_connect();

$stmt=$db-> prepare('SELECT * FROM toys WHERE id = ?');
$stmt->execute([$_GET['id']]);
$toys = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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

<?php echo build_form($toys['name'],$toys['price'], $toys['brand'], $toys['color'],$toys['description']);?>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>
