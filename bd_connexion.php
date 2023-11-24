<?php
    $host="localhost";
    $user="root";
    $mdp="";
    $bd="dev";
    $connexion=mysqli_connect($host, $user, $mdp,$bd);
    if(!$connexion){
        echo "erreur de connexion a la base de donnée";
    }
?>