<?php
    $user=$_POST['usuario'];
    $psw=$_POST['contra'];

    if($user=='Marco' && $psw=='123')
    {
        header('location:https://www.youtube.com/');
    }
    else
    {
        echo "No entro";
    }
?>