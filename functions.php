<?php
function build_form($name, $price, $category, $brand, $description)
{
    $form = '<form action="" method="post">
    Name: <br>
        <input type="text" name="name" value=" '. htmlspecialchars($name) .'"> <br>
    Price: <br> 
    <input type="text" name="price" value=" '. htmlspecialchars($price) .'"> <br>
    Category: <br> 
    <input type="text" name="category" value="'. htmlspecialchars($category).'"> <br>
    Brand: <br> <select name="brand">';
    require 'brand.php';
    foreach ($brands as $id =>$brand)
        {
        $form .="<option value=$id>$brand</option>";
        }
        $form .=
        '</select> 
    Color: <br> <select name="color">';
    require 'color.php';
    foreach ($colors as $id =>$color)
        {
        $form .="<option value=$id>$color</option>";
        }
        $form .=
        '</select> 
        <br><br>
        Description: <br> <textarea name="description" id="" cols="30" rows="10">'. htmlspecialchars($description).'</textarea>
        <br>
        <input type="submit" value="Find..">
    </form>';
    return $form;
    
}