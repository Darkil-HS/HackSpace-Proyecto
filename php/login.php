<?php
    $user=$_POST['usuario'];
    $psw=$_POST['contra'];

    if($user=='Marco' && $psw=='123')
    {
        header('location:https://www.youtube.com/watch?v=BGY-SQtVzJU&list=PLU8oAlHdN5BkinrODGXToK9oPAlnJxmW_&index=59');
    }
    else
    {
        echo "No entro";
    }
?>