<?php
$user = 'root';
$pass = "";

try {
$con = new PDO('mysql:host=localhost;dbname=projet_peda', $user, $pass);;
} catch(Exeption $e) {
    die($e);
}
session_start();
?>
