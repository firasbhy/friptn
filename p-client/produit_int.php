<?php 
include('includes/connect_db.php');
session_start();
$id=$_GET['id'];
$req = $bdd->query("SELECT *  FROM annonce where id=$id ");
$donnees1=$req->fetch();
$id_ann=$donnees1['id_annonceur'];
$req27 = $bdd->query("SELECT *  FROM annonceur where id=$id_ann ");
$donnees27=$req27->fetch();

$req_pub = $bdd->query("SELECT *
FROM `pub`
ORDER BY RAND() ");
$donnees_pub=$req_pub->fetch();

?>
<!DOCTYPE html>
<html>

<!-- Mirrored from 8theme.com/demo/html/mango/product.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Mar 2020 11:27:09 GMT -->
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
  	<title>Produit <?php echo $donnees1['titre'] ; ?></title>
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
                    <a href="#">Accuiel</a>
                    <a href="#">Annonces</a>
                    <a href="#">Produit</a>
                                          
                </div>

                <div class="information-blocks">
                    <div class="row">
                        <div class="col-sm-5 col-md-4 col-lg-5 information-entry">
                            <div class="product-preview-box">
                                <div class="swiper-container product-preview-swiper" data-autoplay="0" data-loop="1" data-speed="500" data-center="0" data-slides-per-view="1">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="product-zoom-image">
                                                <img src="../p-admin/Controller/<?php echo $donnees1['image'];?> "  />
                                            </div>
                                        </div>                                    </div>
                                    <div class="pagination"></div>
                                    <div class="product-zoom-container">
                                        <div class="move-box">
                                            <img class="default-image" src="img/product-main-1.jpg" alt="" />
                                            <img class="zoomed-image" src="img/product-main-1-zoom.jpg" alt="" />
                                        </div>
                                        <div class="zoom-area"></div>
                                    </div>
                                </div>
                                <div class="swiper-hidden-edges">
                                    <div class="swiper-container product-thumbnails-swiper" data-autoplay="0" data-loop="0" data-speed="500" data-center="0" data-slides-per-view="responsive" data-xs-slides="3" data-int-slides="3" data-sm-slides="3" data-md-slides="4" data-lg-slides="4" data-add-slides="4">
                                       
                                        <div class="pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7 col-md-4 information-entry" >
                            <div class="product-detail-box">
                                <h1 class="product-title"><?php echo $donnees1['titre']; ?></h1>
                                <h3 class="product-subtitle"><?php  echo $donnees27['nom']; ?></h3>
                                
                                <div class="product-description detail-info-entry"><?php echo $donnees1['description'];?></div>
                                <div class="price detail-info-entry">
                                    
                                    <div class="current"> <?php  echo $donnees1['prix'];?> <span> D.T </span></div>
                                </div>
                               <h3 class="product-subtitle"><?php  echo $donnees27['num_tel']; ?></h3>

                                <div class="detail-info-entry">
                                    <a href="mailto:<?php  echo $donnees27['email']; ?>" class="button style-10">Contacter annonceur</a>
                                    
                                
                                    
                                </div>
                                
                            </div>
                        </div>
                        <div class="clear visible-xs visible-sm"></div>
                        <div class="col-md-4 col-lg-3 information-entry product-sidebar">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="information-blocks production-logo">
                                        <a href="<?php echo $donnees_pub['lien'] ;?>">
                                        <div class="background">
                                            <div class="logo"><img src="../p-admin/Controller/<?php echo $donnees_pub['image'];?>" alt="" /></div>
                                            <a href="#"><?php echo $donnees_pub['titre']; ?></a>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>

                

                
                
                             

                <!-- FOOTER -->
                <?php include('includes/footer_frip.php');?>
            </div>

        </div>
        <div class="clear"></div>

    </div>

    <div class="search-box popup">
        <form>
            <div class="search-button">
                <i class="fa fa-search"></i>
                <input type="submit" />
            </div>
         
            <div class="search-field">
                <input type="text" value="" placeholder="Search for product" />
            </div>
        </form>
    </div>

   

    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/idangerous.swiper.min.js"></script>
    <script src="js/global.js"></script>

    <!-- custom scrollbar -->
    <script src="js/jquery.mousewheel.js"></script>
    <script src="js/jquery.jscrollpane.min.js"></script>
</body>

<!-- Mirrored from 8theme.com/demo/html/mango/product.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Mar 2020 11:27:12 GMT -->
</html>
