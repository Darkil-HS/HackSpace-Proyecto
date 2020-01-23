<?php
    $user=$_POST['usuario'];
    $psw=$_POST['contra'];

    if($user=='Marco' && $psw=='123')
    {
        header('location:https://darkil-hs.github.io/HackSpace-Proyecto/php/login.php');
    }
    else
    {
        echo "No entro";
    }
?>