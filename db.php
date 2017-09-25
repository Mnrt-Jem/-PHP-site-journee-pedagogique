<?php
$user = 'root';
$pass = "";

try {
$con = new PDO('mysql:host=localhost;dbname=20/11', $user, $pass);;
} catch(Exeption $e) {
    die($e);
}
session_start();
?>