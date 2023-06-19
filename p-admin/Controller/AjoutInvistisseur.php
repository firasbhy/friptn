<?php
require_once('../Model/Invistisseur.class.php');
$Invistisseur = new Invistisseur($_POST['nom'],$_POST['prénom'],$_POST['login'],$_POST['tel'],$_POST['email'],$_POST['password']);
$Invistisseur->ajouter();

header("location:../Liste-Invistisseur.php?Ajout=oui");
//exit();
?>