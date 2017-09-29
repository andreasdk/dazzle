<?php
function build_form($name, $price, $brand, $color, $description)
{
    $form = '<form action="" method="post" ">
    Name: <br>
        <input type="text" name="name" value="'. htmlspecialchars($name) .'"> <br>
    Price: <br> 
    <input type="text" name="price" value="'. htmlspecialchars($price) .'"> <br>
    Brand: <br> <select name="brand"> <option value="">Select brand</option>';
    require 'brand.php';
    foreach ($brands as $id =>$brand)
        {
        $form .="<option value=$id>$brand</option>";
        }
        $form .=
        '</select> <br>
    Color: <br> <select name="color"> <option value="">Select color</option>';
    require 'color.php';
    foreach ($colors as $id =>$color)
        {
        $form .="<option value=$id>$color</option>";
        }
        $form .=
        '</select> 
        <br>
        Description: <br> <textarea name="description" id="" cols="40" rows="6">'. htmlspecialchars($description).'</textarea>
        <br>
        <input type="submit" value="SUBMIT">
    </form>';
    return $form;
    
}