<?php
require_once('../Model/verification_ann.class.php');
///clé aléatoire
$cle = md5(microtime(TRUE)*100000);
$verification = new verification_ann($_POST['nom'],$_POST['login'],$_POST['password'],$_POST['email'],$_POST['num_tel'],$cle,0);
$verification->ajouter();

$destinataire = $_POST['email'];

$sujet = "Activer votre compte" ;
$entete = "From: firashajyedder@hotmail.com" ;
$message = 'Bienvenue sur Frip.tn,
 
Pour activer votre compte, veuillez cliquer sur le lien ci-dessous
ou copier/coller dans votre navigateur Internet.
 
http://localhost/frip/p-client/index_ann.php?log='.urlencode($_POST['login']).'&cle='.urlencode($cle).'
 
 
---------------
Ceci est un mail automatique, Merci de ne pas y répondre.';
mail($destinataire, $sujet, $message, $entete) ;
header("location:../wait_conf.php");


?>