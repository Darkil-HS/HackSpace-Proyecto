<?php
    $user=$_POST['usuario'];
    $psw=$_POST['contra'];

    echo "Prueba";
    if($user=='Marco' && $psw=='123')
    {
        echo "entro"
    }
    else
    {
        echo "No entro";
    }
?>