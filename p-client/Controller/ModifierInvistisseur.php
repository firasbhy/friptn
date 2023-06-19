<?php
ob_start();
session_start(); 
require_once('../../p-admin/Model/Invistisseur.class.php');
 $_SESSION['nom']=$_POST['nom'];
 $_SESSION['prenom']=$_POST['prenom'];
  $_SESSION['login']=$_POST['login'];
   $_SESSION['password']=$_POST['password'];
    $_SESSION['email']=$_POST['email'];
     $_SESSION['tel']=$_POST['tel'];
$inv = new Invistisseur($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['tel'],$_POST['email'],$_POST['password']);
$inv->modifier();

header("location:../Profil_inv.php?modifier=oui");

//exit();
?>