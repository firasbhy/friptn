<?php 

require_once('../Model/Cnx_ann.class.php');

$ann = new Cnxann($_POST['email'],$_POST['password']);
$ann->verifier();

?>
