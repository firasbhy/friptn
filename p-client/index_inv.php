<?php
 include('includes/connect_db.php');
 
session_start();
$id = $_SESSION['id']; 


  $req = $bdd->query("SELECT * FROM annonce where type='on' order by id DESC limit 3  ");
 $req_der_pub=$bdd->query("SELECT * FROM pub where id_invistisseur=$id order by id DESC limit 2 ");
 $req2= $bdd->query("SELECT * FROM categorie   limit 3 ");
 if (empty($_SESSION['id'])) {
header('Location:Identifiant_inv.php');
}else{

?>

<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
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
  	<title>Frip.tn</title>
</head>
<body class="style-3">

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
            <?php include('includes/header_frip_inv.php')?>

            <div class="content-push">

                <div class="row">
                    <?php include('includes/nav_inv.php')?>
                    <div class="col-md-9">

                        <div class="information-blocks">
                            <div class="mozaic-banners-wrapper type-2">
                                <div class="row">
                                    <div class="banner-column col-md-8">
                                        
                                        <div class="mozaic-swiper">
                                            <div class="swiper-container" data-autoplay="0" data-loop="1" data-speed="500" data-center="0" data-slides-per-view="1">
                                                
                                                <div class="swiper-wrapper">
                                                      <?php while($donnees=$req->fetch())
                                                       
                                                    {
                                                       

                                                      ?>
                                                    <div class="swiper-slide"> 
                                                     
                                                        <div class="mozaic-banner-entry type-1 rol" >
                                                            <div class="mozaic-banner-content">
                                                                <div class="image">
                                                                <img src="../p-admin/Controller/<?php echo $donnees['image'];?>"  style="position: absolute;left:301px;width: 250px;height: 550px;top: -200px;" >
                                                            </div>
                                                            <div class="contenu">
                                                                <h3 class="subtitle" ><?php echo $donnees['titre']; ?></h3>
                                                                <h2 class="title" style="color: #2291FF;"><?php echo $donnees['prix']." D.T"; ?></h2>
                                                                <h4 class="description" ><?php echo $donnees['description']; ?></h4>
                                                            </div>
                                                                <a class="button style-5" href="produit_i.php?id=<?php echo $donnees['id'] ; ?>">Acheter</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   <?php } ?>
                                                </div>
                                                <div class="pagination"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="banner-column col-md-4">
                                        <div class="row">
                                            
                                            <?php while ($donnees_der_pub=$req_der_pub->fetch()) {
                                                
                                                
                                                ?>
                                            
                                            <div class="banner-column col-md-12 col-sm-6 "  >
                                                <div class="mozaic-banner-entry type-2 rol-1" >
                                                     
                                                  
                                                     <img src="../p-admin/Controller/<?php echo $donnees_der_pub['image'];?>"  style="
                                                      width: 140px; height: 244px;position: absolute;right: -10px;">           
                                                    <div class="mozaic-banner-content" style="top: 140px;left: -20px;">
                                                        <h2 class="subtitle">vos dernieres publicité</h2>
                                                        <br>

                                                        <h2 class="subtitle" style="color: #2291FF;"><?php echo $donnees_der_pub['titre'];  ?></h2>
                                                        <br>
                                                        <h2 class="subtitle" style="color:  #2291FF;">visibilité:<?php echo " ".$donnees_der_pub['type']; ?> </h2>
                                                        <br>
                                                        <br>
                                                        <a class="button style-5" href="Modifier-Pub.php?id=<?php echo $donnees_der_pub['id']; ?>" style="right: 10px;"> modifier </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } ?>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-md-9 col-md-push-3">

                        <div class="information-blocks">
                            <div class="mozaic-banners-wrapper type-2">
                                <div class="row">
                                    
                                          <?php while($donnees=$req2->fetch())
                                    {
                                        ?>
                                  <a href="annonceparcat.php?id=<?php echo $donnees['id'];?>">
                                    <div class="banner-column col-md-4 col-sm-6">
                                        <a class="mozaic-banner-entry type-3" style="background-image: url(../p-admin/Controller/<?php echo $donnees['image'];?>);background-position-x:100px;  " href="annonceparcat_i.php?id=<?php echo $donnees['id'];?>">
                                            <span class="mozaic-banner-content ">
                                                <span class="subtitle">Catégorie</span>
                                                <span class="title "  ><?php echo $donnees['nom']; ?></span>
                                                <span class="description  "><?php echo $donnees['discription']; ?></span>
                                            </span>
                                        </a>
                                    </div>
                                </a>
                                   <?php } ?>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>

                      

                        

                    </div>
                    <!-- Partie pub -->
                    <?php include('includes/p_pub.php')?>
                </div>

                <!-- FOOTER -->
                <?php include('includes/footer_frip.php')?>

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
<div id="product-popup" class="overlay-popup">
        <div class="overflow">
            <div class="table-view">
                <div class="cell-view">
                    <div class="close-layer"></div>
                    <div class="popup-container">

                        <div class="row">
                            <div class="col-sm-6 information-entry">
                                <div class="product-preview-box">
                                    <div class="swiper-container product-preview-swiper" data-autoplay="0" data-loop="1" data-speed="500" data-center="0" data-slides-per-view="1">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="product-zoom-image">
                                                    <img src="img/product-main-1.jpg" alt="" data-zoom="img/product-main-1-zoom.jpg" />
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product-zoom-image">
                                                    <img src="img/product-main-2.jpg" alt="" data-zoom="img/product-main-2-zoom.jpg" />
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product-zoom-image">
                                                    <img src="img/product-main-3.jpg" alt="" data-zoom="img/product-main-3-zoom.jpg" />
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product-zoom-image">
                                                    <img src="img/product-main-4.jpg" alt="" data-zoom="img/product-main-4-zoom.jpg" />
                                                </div>
                                            </div>
                                        </div>
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
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide selected">
                                                    <div class="paddings-container">
                                                        <img src="img/product-main-1.jpg" alt="" />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="paddings-container">
                                                        <img src="img/product-main-2.jpg" alt="" />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="paddings-container">
                                                        <img src="img/product-main-3.jpg" alt="" />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="paddings-container">
                                                        <img src="img/product-main-4.jpg" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pagination"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 information-entry">
                                <div class="product-detail-box">
                                    <h1 class="product-title">T-shirt Basic Stampata</h1>
                                    <h3 class="product-subtitle">Loremous Clothing</h3>
                                    <div class="rating-box">
                                        <div class="star"><i class="fa fa-star"></i></div>
                                        <div class="star"><i class="fa fa-star"></i></div>
                                        <div class="star"><i class="fa fa-star"></i></div>
                                        <div class="star"><i class="fa fa-star-o"></i></div>
                                        <div class="star"><i class="fa fa-star-o"></i></div>
                                        <div class="rating-number">25 Reviews</div>
                                    </div>
                                    <div class="product-description detail-info-entry">Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur.</div>
                                    <div class="price detail-info-entry">
                                        <div class="prev">$90,00</div>
                                        <div class="current">$70,00</div>
                                    </div>
                                    <div class="size-selector detail-info-entry">
                                        <div class="detail-info-entry-title">Size</div>
                                        <div class="entry active">xs</div>
                                        <div class="entry">s</div>
                                        <div class="entry">m</div>
                                        <div class="entry">l</div>
                                        <div class="entry">xl</div>
                                        <div class="spacer"></div>
                                    </div>
                                    <div class="color-selector detail-info-entry">
                                        <div class="detail-info-entry-title">Color</div>
                                        <div class="entry active" style="background-color: #d23118;">&nbsp;</div>
                                        <div class="entry" style="background-color: #2a84c9;">&nbsp;</div>
                                        <div class="entry" style="background-color: #000;">&nbsp;</div>
                                        <div class="entry" style="background-color: #d1d1d1;">&nbsp;</div>
                                        <div class="spacer"></div>
                                    </div>
                                    <div class="quantity-selector detail-info-entry">
                                        <div class="detail-info-entry-title">Quantity</div>
                                        <div class="entry number-minus">&nbsp;</div>
                                        <div class="entry number">10</div>
                                        <div class="entry number-plus">&nbsp;</div>
                                    </div>
                                    <div class="detail-info-entry">
                                        <a class="button style-10">Add to cart</a>
                                        <a class="button style-11"><i class="fa fa-heart"></i> Add to Wishlist</a>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="tags-selector detail-info-entry">
                                        <div class="detail-info-entry-title">Tags:</div>
                                        <a href="#">bootstrap</a>/
                                        <a href="#">collections</a>/
                                        <a href="#">color/</a>
                                        <a href="#">responsive</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="close-popup"></div>
                    </div>
                </div>
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

</html>
<?php 
} 
?>