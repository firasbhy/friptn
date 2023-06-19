<?php 
 session_start();
include('includes/connect_db.php');
$rech=$_GET['recherche'];
$rech = trim($rech); //pour supprimer les espaces dans la requête de l'internaute
 $rech = strip_tags($rech); //pour supprimer les balises html dans la requête
  
$req_rech = $bdd->query("SELECT  annonce.*, categorie.nom FROM  annonce,categorie where type='on' and annonce.id_categorie=categorie.id and  (titre like '%$rech%' or description like '%$rech%')     ");
     
?>

<!DOCTYPE html>
<html>

<!-- Mirrored from 8theme.com/demo/html/mango/compare.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Mar 2020 11:28:08 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, minimal-ui"/>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/idangerous.swiper.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700%7CDancing+Script%7CMontserrat:400,700%7CMerriweather:400,300italic%7CLato:400,700,900' rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!--[if IE 9]>
        <link href="css/ie9.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link rel="shortcut icon" href="img/img/favicon.ico" />
  	<title>Annonce de <?php echo $rech;?></title>
</head>
<body class="style-10">

    <!-- LOADER -->
    <div id="loader-wrapper">
        <div class="bubbles">
            <div class="title">loading</div>
            <span></span>
            <span id="bubble2"></span>
            <span id="bubble3"></span>
        </div>
    </div>

    <div id="content-block">

        <div class="content-center fixed-header-margin">
            <!-- HEADER -->
             <?php include('includes/header_frip.php');?>
                <div class="clear"></div>
            

            <div class="content-push">

                <div class="breadcrumb-box">
                    <a href="#">Home</a>
                    <a href="#">Annonce de <?php  echo $rech; ?> </a>
                </div>

                <div class="information-blocks">
                    <div class="table-responsive">
                        <table class="compare-table">
                            <tr> 
                                 <td></td>
                               <?php 
                                    $i=0;
                                    while($donnees_rech=$req_rech->fetch())
                                    {$i++;
                                        if($i<=3)
                                        {

                               ?>
                               
                                <td>
                                    <div class="product-slide-entry shift-image" >
                                        <a href="produit.php?id=<?php echo $donnees_rech['id'] ?>"><div class="product-image" style="height: 579px;">
                                            <img alt="" src="../p-admin/Controller/<?php echo $donnees_rech['image'];?> " style="height: 570px;"> 
                                          <img alt="" src="../p-admin/Controller/<?php echo $donnees_rech['image'];?>" style="height: 570px;">
                                            
                                        </div></a>
                                        <div >
                                        <a href="#" class="tag"><?php echo $donnees_rech['nom']; ?> </a>
                                        <a href="produit.php?id=<?php echo $donnees_rech['id']; ?>" class="title"><?php echo      $donnees_rech['titre']; ?></a>
                                        <a  href="produit.php?id=<?php echo $donnees_rech['id']; ?>" class=" style-1">
                                        <?php echo $donnees_rech['description'] ;?>
                                    </a>
                                        <div class="price">
                                            <div class="current"><?php echo $donnees_rech['prix']; ?> D.T</div>
                                          
                                        </div>
                                    </div>
                                </div>
                                </td>
                            <?php }
                                else
                                {
                                    $i=1;


                             ?>
                                
                            </tr>
                            <tr>
                                <td></td>

                                  <td>
                                    <div class="product-slide-entry shift-image" >
                                      <a href="produit.php?id=<?php echo $donnees_rech['id'] ?>">  <div class="product-image" style="
                                            height: 579px;
                                        ">
                                            <img alt="" src="../p-admin/Controller/<?php echo $donnees_rech['image'];?>" style="height: 570px;"> 
                                            <img alt="" src="../p-admin/Controller/<?php echo $donnees_rech['image'];?>"style="height: 570px;"> 
                                           
                                        </div></a>
                                        <a href="#" class="tag"> <?php echo $donnees_rech['nom']; ?></a>
                                        <a href="produit.php?id=<?php echo $donnees_rech['id'] ?>" class="title"><?php echo       $donnees_rech['titre']; ?></a>
                                        <a  href="produit.php?id=<?php echo $donnees_rech['id'] ?>" class=" style-1">
                                        <?php echo $donnees_rech['description'] ;?>
                                    </a>
                                        <div class="price">
                                            <div class="current"><?php echo $donnees_rech['prix']; ?> D.T</div>
                                          
                                        </div>
                                    </div>
                                </td>

                            <?php }} echo "</tr>"; ?>
                               
                        </table>
                    </div>
                </div>

              
                               

                <!-- FOOTER -->
                  <?php include('includes/footer_frip.php');?>
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/idangerous.swiper.min.js"></script>
    <script src="js/global.js"></script>

    <!-- custom scrollbar -->
    <script src="js/jquery.mousewheel.js"></script>
    <script src="js/jquery.jscrollpane.min.js"></script>
</body>

<!-- Mirrored from 8theme.com/demo/html/mango/compare.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Mar 2020 11:28:09 GMT -->
</html>
