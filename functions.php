<?php
function build_form($name, $year, $director, $genre, $description)
{
    $form = '<form action="" method="post">
    Movie: <br>
        <input type="text" name="name" value=" '. htmlspecialchars($name) .'"> <br>
    Year: <br> 
    <input type="text" name="year" value=" '. htmlspecialchars($year) .'"> <br>
    Director: <br> 
    <input type="text" name="director" value="'. htmlspecialchars($director).'"> <br>
    Genre: <br> <select name="genre">';
    require 'genre.php';
    foreach ($genres as $id =>$genre)
        {
        $form .="<option value=$id>$genre</option>";
        }
        $form .=
        '</select> 
        <br><br>
        Movie Plot: <br> <textarea name="description" id="" cols="30" rows="10">'. htmlspecialchars($description).'</textarea>
        <br>
        <input type="submit" value="Find..">
    </form>';
    return $form;
    
}