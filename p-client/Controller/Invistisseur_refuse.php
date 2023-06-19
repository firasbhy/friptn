<?php
ob_start();
require_once('../Model/verification_inv.class.php');
$verification= new Verification($_POST['nom'],$_POST['prénom'],$_POST['login'],$_POST['tel'],$_POST['email'],$_POST['password']);
$verification->supprimer();

header("location:../p_admin/Demande-Invistisseur.php?Supp=oui");

//exit();
?>