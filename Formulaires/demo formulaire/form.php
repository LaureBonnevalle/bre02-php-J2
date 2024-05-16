<?php

// Je vérifie si le prénom et le nom existent

if(isset($_POST["firstName"]) && isset($_POST["lastName"]))
{
    echo "Les champs existent.<br>";
    
    // Je vérifie si ils ne sont pas vides
    
    if(!empty($_POST["firstName"]) && !empty($_POST["lastName"]))
    {
        echo "Les champs ne sont pas vides<br>";
        
        echo "Vous vous appelez {$_POST["firstName"]} {$_POST["lastName"]} <br>";
    }
    else
    {
        echo "/!\ ERREUR : un ou plusieurs champs sont vides /!\<br>";
    }
}
else
{
    echo "/!\ ERREUR : un ou plusieurs champs n'existent pas /!\<br>";
}

?>