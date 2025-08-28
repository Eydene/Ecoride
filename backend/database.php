<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=ecoride;charset=utf8;','root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Une erreur est survenue :".$e->getMessage());
}

?>