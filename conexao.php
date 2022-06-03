<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "phpdb";
$port = 3306;

$conn = mysqli_connect($host, $user, $pass, $dbname,$port) or die
    (mysqli_error());
if (!$conn)
    die ("Erro ao conectar ao bando de dados!");


    ?>