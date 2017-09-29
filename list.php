<?php
require_once 'db.php';
require 'color.php';
require 'brand.php';
$db=db_connect();

$stmt = $db-> prepare('SELECT * FROM toys');
$stmt -> execute();
$toys = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
   
    <style>
    body{
        font-size:14px;
        line-height:1.3em;
        background: url(back.jpg) no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;

    }

    .card{
        margin-top:2em!important;
        padding-top: 1.3em;
        padding-left:1em;
        padding-right:1em;
    }

    .row h4{
        font-size:18px;
        color: #c60f37
    }
    .card .buton{
        
    }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        
            <?php foreach ($toys as $toy):?>
                <div class="col-lg-4 col-md-6 col-sm12">
                    <div class="card">
                     
                        <h4 class="card-title"><?php echo  '<b>Name:'.'<br>'.'</b>' . htmlspecialchars  ($toy['name']) ;?></h4>
                        <h4 class="card-title"><?php echo  '<b>Brand:    </b>' . htmlspecialchars  ($brands[$toy['brand']]);
                        echo '<br>';?></h3>
                        <h4 class="card-title"><?php echo  '<b>Price:    </b>' . htmlspecialchars  ($toy['price']);?></h4>
                        <h4 class="card-title"><?php echo  '<b>Color:    </b>' . htmlspecialchars  ($colors[$toy['color']]);
                        echo '<br>';?></h4>

                        <p class="card-text"><?php echo  '<b>Description:    </b>' . htmlspecialchars  ($toy['description']);
                        echo '<br>';?></p>
                        <a href="edit.php?id=<?php echo htmlspecialchars($toy['id']) ;?>" class="btn btn-outline-danger buton">Edit Details</a>
                    </div>
                </div>
             <?php endforeach;?>
        </div>
    </div>
</div>

    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>