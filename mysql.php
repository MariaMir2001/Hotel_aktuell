<?php
$host = "localhost";
$name = "hoteldb";
$user = "root";
$passwort = "";

    $mysql = new mysqli($host, $user, $passwort,$name);
   

    if($mysql -> connect_error){
        die("Datenbankverbindung nicht erfolgreich".$mysql->connect_error);
    }
    echo("connected");
 ?>