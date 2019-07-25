<?php
//Mengkoneksikan ke DB
$server = "localhost";
$server_username = "root";
$server_password = "";
$database_name = "Kompas";

$conn = new Mysqli($server, $server_username, $server_password, $database_name);