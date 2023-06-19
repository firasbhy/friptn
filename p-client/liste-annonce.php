<?php 
include('../includes/connect_db.php');
 session_start();
 $id=$_SESSION['id'];
 $req_ann_ann = $bdd->query("SELECT annonce.*,categorie.nom FROM annonce,categorie  where id_annonceur=$id and annonce.id_categorie=categorie.id");
 $req_pub_alea=$bdd->query("SELECT * FROM pub order by id DESC limit 1");
 $donnees_pub_alea=$req_pub_alea->fetch();
?>
<!DOCTYPE html>
<html>

<!-- Mirrored from 8theme.com/demo/html/mango/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Mar 2020 11:26:45 GMT -->
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
  	<title>Frip.tn - Liste des annonces</title>
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
            <?php include('includes/header_frip_ann.php')?>

            <div class="content-push">

                <div class="breadcrumb-box">
                    <a href="index_ann.php">Accueil</a>
                    <a href="#">Annonce</a>
                    <a href="#">Liste Annonce</a>
                </div>

                <div class="information-blocks">
                    <div class="row">
                        <div class="col-sm-9 information-entry">
                            <h3 class="cart-column-title size-1">Vos annonces</h3>

                              <?php 
                                      while($donnees_ann_ann=$req_ann_ann ->fetch())
                                      {

                                        
                           ?>
                            <div class="traditional-cart-entry style-1">
                                <a class="image" ><img alt="" src="../p-admin/Controller/<?php echo $donnees_ann_ann['image'];?>"></a>
                                <div class="content">
                                    <div class="cell-view">
                                        <a class="tag" href="#"><?php echo $donnees_ann_ann['nom'];?></a>
                                        <a class="title" href="#"><?php echo $donnees_ann_ann['titre'];?></a>
                                        <div class="inline-description"><?php echo $donnees_ann_ann['description'];?></div>
                                        <div class="inline-description">visiblité:<?php echo " ".$donnees_ann_ann['type'];?></div>
                                        <div class="price">
                                            
                                            <div class="current"><?php echo $donnees_ann_ann['prix'];?> D.T</div>
                                        </div>
                                        <div class="quantity-selector detail-info-entry">
                                            
                                            <a class="button style-17" href="Controller/supprimerann.php?id=<?php echo $donnees_ann_ann['id']; ?>">supprimer</a>
                                            <a class="button style-15" href="Modifier-Annonce.php?id=<?php echo $donnees_ann_ann['id']; ?>">Modifier</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           <?php } ?>



                            

                        </div>
                        <div class="col-sm-3 information-entry">
                            <h3 class="cart-column-title size-1" style="text-align: center;">Pub</h3>
                            <div class="sidebar-subtotal">
                                <div class="price-data"> <a href="<?php echo $donnees_pub_alea['lien']; ?>">
                                    <div class="main"><?php echo $donnees_pub_alea['titre'] ;?></div>
                                    
                                    <img src="../p-admin/Controller/<?php echo $donnees_pub_alea['image']; ?>" />
                                </a>
                                </div>
                                
                            </div>
                           
                            
                        </div>
                    </div>
                </div>

                          

                <!-- FOOTER -->
               <?php include('includes/footer_frip.php')?>
            </div>

        </div>
        <div class="clear"></div>

    </div>

    <div class="overlay-popup" id="image-popup">
        
        <div class="overflow">
            <div class="table-view">
                <div class="cell-view">
                    <div class="close-layer"></div>
                    <div class="popup-container">
                        <img class="gallery-image" src="img/portfolio-1.jpg" alt="" />
                        <div class="close-popup"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="search-box popup">
        <form>
            <div class="search-button">
                <i class="fa fa-search"></i>
                <input type="submit" />
            </div>
            <div class="search-drop-down">
                <div class="title"><span>All categories</span><i class="fa fa-angle-down"></i></div>
                <div class="list">
                    <div class="overflow">
                        <div class="category-entry">Category 1</div>
                        <div class="category-entry">Category 2</div>
                        <div class="category-entry">Category 2</div>
                        <div class="category-entry">Category 4</div>
                        <div class="category-entry">Category 5</div>
                        <div class="category-entry">Lorem</div>
                        <div class="category-entry">Ipsum</div>
                        <div class="category-entry">Dollor</div>
                        <div class="category-entry">Sit Amet</div>
                    </div>
                </div>
            </div>
            <div class="search-field">
                <input type="text" value="" placeholder="Search for product" />
            </div>
        </form>
    </div>

    <div class="cart-box popup">
        <div class="popup-container">
            <div class="cart-entry">
                <a class="image"><img src="img/product-menu-1.jpg" alt="" /></a>
                <div class="content">
                    <a class="title" href="#">Pullover Batwing Sleeve Zigzag</a>
                    <div class="quantity">Quantity: 4</div>
                    <div class="price">$990,00</div>
                </div>
                <div class="button-x"><i class="fa fa-close"></i></div>
            </div>
            <div class="cart-entry">
                <a class="image"><img src="img/product-menu-1_.jpg" alt="" /></a>
                <div class="content">
                    <a class="title" href="#">Pullover Batwing Sleeve Zigzag</a>
                    <div class="quantity">Quantity: 4</div>
                    <div class="price">$990,00</div>
                </div>
                <div class="button-x"><i class="fa fa-close"></i></div>
            </div>
            <div class="summary">
                <div class="subtotal">Subtotal: $990,00</div>
                <div class="grandtotal">Grand Total <span>$1029,79</span></div>
            </div>
            <div class="cart-buttons">
                <div class="column">
                    <a class="button style-3">view cart</a>
                    <div class="clear"></div>
                </div>
                <div class="column">
                    <a class="button style-4">checkout</a>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>

    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/idangerous.swiper.min.js"></script>
    <script src="js/global.js"></script>

    <!-- custom scrollbar -->
    <script src="js/jquery.mousewheel.js"></script>
    <script src="js/jquery.jscrollpane.min.js"></script>
</body>

<!-- Mirrored from 8theme.com/demo/html/mango/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Mar 2020 11:26:45 GMT -->
</html>
