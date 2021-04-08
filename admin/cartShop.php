<?php
    session_start(); 
    include ("createDB.php")  ;
    include ("includes/functions/cartfunction.php");
  // $db =new createDB ("shop","chaussures" );
    $db1 =new createDB ("shop","produits");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ShopMax &mdash; Maison du glamour s</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="layout/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="layout/css/shopcart/cart.css">
     <link rel="stylesheet" type="text/css" href="layout/css/shopcart/owl.carousel.min.css">
      <link rel="stylesheet" type="text/css" href="layout/css/shopcart/jquery-ui.css">
       <link rel="stylesheet" type="text/css" href="layout/css/shopcart/aos.css">
        <link rel="stylesheet" href="layout/css/shopcart/magnific-popup.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
     <link href="layout/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
      <link href="layout/lightbox/dist/css/ lightbox.min.css" rel="stylesheet">
      <style type="text/css">
        .gallery {
          margin: 10px 50px ;
        }
        .gallery img:hover {
          filter:grayscale(100%);
          transform: scale(1.1);
        }
      </style>
    
    
  </head>
  <body>




   <!--img src="layout/images/fleurs.jpg" style="width : 1380px ; height: 550px; "--> 
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php" style="color: #ffcc00">Accueil</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Cart</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
                 <div class='site-blocks-table'>
              <table class='table table-bordered'>
                <?php
                  if(isset($_SESSION['cart'])){
                    ?>
                     <thead>
                  <tr>
                    <th class='product-thumbnail'>Image</th>
                    <th class='product-name'>Produit</th>
                    <th class='product-price'>Prix</th>
                    <th class='product-quantity'>Quantité</th>
                    <th class='product-total'>Total</th>
                    <th class='product-remove'>Supprimer</th>
                  </tr>
                </thead>
      
         
               <?php
             }
               
             $total =0 ;
          if(isset($_SESSION['cart'])){
            $produitid = array_column($_SESSION['cart'],'product_id');
           
          $result = $db1->getData();
          while ($row = mysqli_fetch_assoc($result)) {
            foreach ($produitid as $id) {
              if ($row['id_pro']== $id) {
                cart($row['image2'],$row['prix'],$row['titre'],$row['id_pro']);
                  $total = $total + (int)$row['prix'];
            


              }
           
            }
            }
           


          }
          else {
            echo "<center><h1 style='color : red '> Votre Panier est vide </h1></center>" ;
          }
      

        ?>
        <?php
            if (isset($_GET["action"])){
            if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["product_id"] == $_GET[id]){
                    unset($_SESSION["cart"][$keys]);
                    echo '<script>alert("Le produit a été supprimé...!")</script>';
                    echo '<script>window.location="cartShop.php"</script>';
                }
            }
        }
    }

          ?>
         </table>
         </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
             
              <div class="col-md-6">
                  <?php
                  if(isset($_SESSION['cart'])){
                    ?>
                <button class="btn btn-outline-warning btn-sm btn-block" onclick="window.location.href='index.php'">Continue Shopping</button>
              <?php } ?>
              </div>
            </div>
       
          </div>
           <?php
                  if(isset($_SESSION['cart'])){
                    ?>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <?php
                            if (isset($_SESSION['cart'])){
                                $count  = count($_SESSION['cart']);
                               echo " <h3 class='text-black h4 text-uppercase'>Panier  ($count Article(s))</h3>" ;
                                
                            }else{
                                echo "<h3 class='text-black h4 text-uppercase'>Panier (0  Article(s))</h3>";
                            }
                        ?>
                    
                  </div>

                </div>
                 
                <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Sub-total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black"><?php echo $total ; ?></strong>
                  </div>
                </div>
                 <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Livraison</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-green" style="color: green">GRATUIT</strong>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black"><?php echo $total ; ?></strong>
                  </div>
                </div>


                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-warning btn-lg btn-block" onclick="window.location='checkout.html'">Checkout</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
           <?php } ?>
        </div>
      </div>
    </div>

  

     <script src="layout/js/jquery/jquery.min.js"></script>
  <script src="layout/js/bootstrap.min.js"></script>
  
  <script src="layout/js/dropdown/script.min.js"></script>
  <script src="layout/js/filtre/script.js"></script>
 
   <!-----------------shop cart ------------------>
   <script src="layout/js/cart/owl.carousel.min.js"></script>
  <script src="layout/js/cart/jquery.magnific-popup.min.js"></script>
  <script src="layout/js/cart/aos.js"></script>

  <script src="layout/js/cart/main.js"></script>
  <!------------model ------------>
  <script src="layout/css/mobirise-shop/script.js"></script> 
  <script src="layout/lightbox/dist/js/lightbox-plus-jquery.min.js"></script> 
  
