<?php
ob_start();
session_start(); 
require_once('../../p-admin/Model/Annonceur.class.php');
 $_SESSION['nom']=$_POST['nom'];
  $_SESSION['login']=$_POST['login'];
   $_SESSION['password']=$_POST['password'];
    $_SESSION['email']=$_POST['email'];
     $_SESSION['num_tel']=$_POST['num_tel'];
$annonceur = new Annonceur($_POST['nom'],$_POST['login'],$_POST['password'],$_POST['email'],$_POST['num_tel']);
$annonceur->modifier();

header("location:../Profil_ann.php?modifier=oui");

//exit();
?>