<?php
require_once('../Model/Annonceur.class.php');
$annonceur = new Annonceur($_POST['nom'],$_POST['login'],$_POST['password'],$_POST['email'],$_POST['num_tel']);
$annonceur->ajouter();

header("location:../Liste-Annonceur.php?naser=oui");
//exit();
?>