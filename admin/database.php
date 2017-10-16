<?php

    try//Début connexion
    {
    $db = new PDO("mysql:host=localhost;dbname=site_peda", "root", "");
    }
    catch(Exception $e)
    {
    die("Erreur : ".$e->getMessage());
    }//Fin connexion
    $db->query("SET NAMES UTF8");//Solution encodage UTF8
?>
