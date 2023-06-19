<?php
require_once('../Model/verification_inv.class.php');
$verification = new Verification($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['password'],$_POST['email'],$_POST['tel']);
$verification->verif();
header("location:../p_admin/Demande-Invistisseur.php");
//header("location:../Liste-Invistisseur.php?Ajout=oui");

?>