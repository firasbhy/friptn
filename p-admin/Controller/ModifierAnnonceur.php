<?php
ob_start();
require_once('../Model/Annonceur.class.php');
$annonceur = new Annonceur($_POST['nom'],$_POST['login'],$_POST['password'],$_POST['email'],$_POST['num_tel']);
$annonceur->modifier();

header("location:../Liste-Annonceur.php?firas=ouiModif");
//exit();
?>