<?php
    session_start();
    // online
    $PARAM_hote='otakuwcmitsu.mysql.db'; // le chemin vers le serveur
    $PARAM_port=''; // le port de votre service mysql
    $PARAM_nom_bd='otakuwcmitsu'; // le nom de votre base de données
    $PARAM_utilisateur='otakuwcmitsu'; // nom d'utilisateur pour se connecter
    $PARAM_mot_passe='Nikelol5'; // mot de passe de l'utilisateur pour se connecter

    // local
    // $PARAM_hote='LOCALHOST'; // LE CHEMIN VERS LE SERVEUR
    // $PARAM_port=''; // LE PORT DE VOTRE SERVICE MYSQL
    // $PARAM_nom_bd='OTAKU'; // LE NOM DE VOTRE BASE DE DONNÉES
    // $PARAM_utilisateur='root'; // NOM D'UTILISATEUR POUR SE CONNECTER
    // $PARAM_mot_passe=''; // MOT DE PASSE DE L'UTILISATEUR POUR SE CONNECTER

    try {
        $connection = new PDO('mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd,
        $PARAM_utilisateur, $PARAM_mot_passe);
        $connection ->exec('SET NAMES utf8');
    } catch(Exception $e) {
        echo 'Une erreur de connexion à la BDD est survenue !';
        die();
    }

?>
