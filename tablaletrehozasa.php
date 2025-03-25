<?php
/belépéshez szükséges adatokat változókba tesszük
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "enABn";

//készíteni kell egy csatlakozást
$conn=new mysli($servername, $username, $password, $dbname);
if($conn->connect_error)
{
    //hiba esetén lelőjük a csatlakozást
    die("Csatlakozási hiba" . $conn->connect_error);
}
else{
    echo "Csatlakozás megtörtént";
}