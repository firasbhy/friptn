<?php
include('includes/connect_db.php');
 session_start();
$id=$_GET['id'];
$req = $bdd->query("SELECT * FROM pub where id=$id ");
$donnees=$req->fetch();

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
    <title>Modifier annonce| Fripe.Tn</title>
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
                    <a href="#">accuiel</a>
                    <a href="#">Votre publicité</a>
                </div>

                <div class="information-blocks">
                    <div class="row">
                        <div class="col-sm-10 information-entry">
                           
                            <div class="login-box" >
                                <div class="article-container style-1">
                                    <h3>Modifier publicité</h3>
                                    <p></p>
                                </div>
                                <form action="Controller/modifierpub.php?id=<?php echo $donnees['id'];?>"  method="post" enctype="multipart/form-data">
                                    <div>
                                    <label>Titre</label>
                                    <input class="simple-field" name="titre" type="text" value="<?php echo $donnees['titre']; ?>" required="required" />
                                    </div>

                                    

                                

                                   
                                     

                                   
                                      <div >
                                    <label>Lien</label>
                                    <input class="simple-field" type="text" name="lien" required="required" class="form-control input-lg"  value="<?php echo $donnees['lien']; ?>" />
                                    
                                     </div>

                                  

                                   <div class="form-group row">
                                    <br> <br>
                                           <label>    Select image to upload: </label>
                                            <br>
                                            <div class="col-md-10">
                                                
                                                <input  type="file" name="file" id="fileToUpload" >
                                                </br>
                                                <span id="upload_image"><img  name="oldpic" src="../p-admin/Controller/<?php echo $donnees['image']?>" width="200px" higth="100px"></span>
                                            
                                            </div>
                                            
                                        </div>

                             
                                    <div class="button style-10">modifier<input type="submit" value="modifier"/></div> 
                             
                         </div>


                     


                              
  

   </div>

                                </form>
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

