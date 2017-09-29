<?php
if ($_POST){

    // var_dump($_POST);
    $errors = array();
    if(empty($_POST ['name'])){
        $errors[] = 'missing name';
    }
    if (empty($_POST['price'])){
        $errors[] = 'missing price';
    }
    if (empty($_POST['brand'])){
        $errors[] = 'missing brand';
    }
    if (empty($_POST['color'])){
        $errors[] = 'missing color ';
    }
    if (empty($_POST['description'])){
        $errors[] = 'missing description ';
    }
    
    if (empty($errors)) {
        $toys = [];
        foreach ($_POST as $key =>$value) {
            $toys[$key]= $value;
        }
    }
    else {
        foreach($errors as $error){
            echo $error;
            echo '<br>';
        }
    }
   
    
}
