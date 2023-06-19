<?php
ob_start();
require_once('../Model/verification_inv.class.php');
include('../includes/connect_db.php');

$id=$_GET['id'];
$req10 = $bdd->query("SELECT * FROM verification where id=$id " );
   $donnees10 = $req10->fetch();

$verification = new Verification($donnees10['nom'],$donnees10['prenom'],$donnees10['login'],$donnees10['password'],$donnees10['email'],$donnees10['num_tel']);
$verification->accepter();



//exit();
?>