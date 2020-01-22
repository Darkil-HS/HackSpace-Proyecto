<?php
    $user=$_POST['usuario'];
    $psw=$_POST['contra'];

    if($user=='Marco' && $psw=='123')
    {
        header('location:../html5/perfil.html');
    }
    else
    {
        echo "No entro";
    }
?>