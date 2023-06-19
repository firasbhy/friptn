<?php
 include('includes/connect_db.php');
  session_start();
  $id = $_SESSION['id'];
  $req = $bdd->query("SELECT * FROM invistisseur WHERE id= $id");
  $donnees = $req->fetch();
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
    <link href="css/pwd.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
            .class_firas{
                background: gainsboro;
                /* position: absolute; */
                /* display: none; */
                /*position: absolute;
                right: 13px;
                top: 1px;*/
                padding: 12px;
            }
        </style>
    <!--[if IE 9]>
        <link href="css/ie9.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link rel="shortcut icon" href="img/img/favicon.ico" />
    <title>Pub Invistiseur | Fripe.Tn</title>
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

                <div class="breadcrumb-box">
                    <a href="index.php">Acceuil</a>
                    <a href="#">Ajouter pub</a>
                </div>

                <div class="information-blocks">
                    <div class="row">
                        <form action="Controller/AjoutPub.php" method="post" enctype="multipart/form-data">
                        <div class="col-sm-6 information-entry">
                            
                            <div class="login-box" >
                                <div class="article-container style-1">
                                    <h3>Investisseurs pub</h3>
                                    <p></p>
                                </div>
                                
                                    <label>Nom d'entreprise</label>
                                    <input class="simple-field" name="titre" type="text" placeholder="Entrer nom d'entreprise " required="required" />
                                    
                                    <label>Date d'ajout</label>
                                    <input class="simple-field" type="date"   readonly="readonly"  name="date" id="dateDuJour">
                                                
                                                
                                            <label for="example-month-input" class="simple-field">Choisir une image pour la  pub :</label><br> 
                                            
                                            
                                        <input type="file" name="file" id="fileToUpload">
                                                                           
                                       <span id="upload_image" class="img-thumbnail rounded-circle">
                                                
                                            </span>
                            </div>
                        </div>
                        <div class="col-sm-6 information-entry">
                            <div class="login-box">
                                
                                <div class="article-container style-1">
                                    <label>Lien</label>
                                    <input class="simple-field" name="lien" type="text" placeholder="Entrer site web socité" required="required" />

                                    <label>Type</label>
                                    <input class="simple-field" name="type" type="text"  value="Off" readonly="readonly" /><br><span>Aprés le paiement votre pub sera visible</span>
                                    
                                    <label>Id d'investiseur</label>
                                    <input class="simple-field" name="id_invistisseur" type="text" value="<?php echo $donnees['id'] ?>" readonly="readonly" />

                                       
                                </div>
                                
                                <div class="button style-10">Ajout pub<input type="submit" style="float: right;  "/></div>
                            </div>
                            
                        </div>

                        </form>
                    </div>
                </div>

                
                
                
                
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

    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/idangerous.swiper.min.js"></script>
    <script src="js/global.js"></script>

    <!-- custom scrollbar -->
    <script src="js/jquery.mousewheel.js"></script>
    <script src="js/jquery.jscrollpane.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
    

</body>


</html>
<script>
    $(document).ready(function(){
        $(document).on('change','#fileToUpload',function(){
            var property = document.getElementById("fileToUpload").files[0];
            var image_name = property.name;
            var image_extension = image_name.split('.').pop().toLowerCase();
            if (jQuery.inArray(image_extension,['gif','png','jpg','jpeg']) == -1) {
                alert("invalid image file");
            }
            var image_size = property.size;
            if (image_size > 200000) {
                alert("image file is very big");
            }
            else
            {
                var form_data = new FormData();
                form_data.append("fileToUpload",property);
                $.ajax({
                    url:"upload.php",
                    method:"POST",
                    data:form_data,
                    contentType:false,
                    cache:false,
                    processData:false,
                    beforeSend:function(){
                        $('#upload_image').html("<label class='text-success'>Uploding...</label");
                    },
                    success:function(data)
                    {
                        $('#upload_image').html(data);
                    }
                })
            }
        });
    });
</script>
<script>
 

var aujourdhui = new Date();   
document.getElementById('dateDuJour').valueAsDate = aujourdhui;


</script>

