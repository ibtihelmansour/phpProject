<?php 
    session_start();
    include ("createDB.php")  ;
    include ("includes/template/header.php");
    include ("includes/template/navbar.php");
    include ("component.php");
     include ("connect.php")  ;

?>



     
  <link rel="stylesheet" type="text/css" href="layout/css/model.css">
<?php

//$db =new createDB ("shop","chaussures" );
if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Le produit est déjà ajouté dans le panier..!')</script>";
            echo "<script>window.location = 'chaussures.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
               echo "<script>alert('Un produit a été ajouté dans le panier!')</script>";
        echo "<script>window.location = 'chaussures.php'</script>";
        }
    
    }else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
       // print_r($_SESSION['cart']);
     
    }
}




    ?>


 <img src="layout/images/30 (9).jpg" style="width: 100% ; height:850px;" class="img-fluid">
     <?php
       // include ("includes/template/entete.php");
       include ("filtre5.php");
   ?>
   

<div class="container" >
               <div class="row" >
                 <?php 
         if (isset($_POST['Search'])) {
     
        $Search = mysqli_real_escape_string($conn,$_POST['Search']);
        $sql = "SELECT * FROM produits WHERE titre LIKE '%$Search%' OR description LIKE '%$Search%' OR prix
        LIKE '%$Search%' and id_cat in (5,6) ";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);
        if ($queryResult > 0){
            while ($row = mysqli_fetch_assoc($result)) {

              componentLeft($row['prix'],$row['image'],$row['titre'],$row['description'],$row['code'],$row['id_pro']);
            }
        }else {
           echo "<h1 style='font-size: 50px ;padding :35px 0'> Ooups..! recherche introuvable </h1>  " ;
        }
    } else {
      ?>
    </div>
    <div class="row" id="bottine">
      <?php


          $query="SELECT * FROM `produits` where id_cat=5  ";
          $result = mysqli_query($conn,$query);
          if (mysqli_num_rows($result)>0 ) {
          while ($row = mysqli_fetch_assoc($result)) {
          
        componentLeft($row['prix'],$row['image'],$row['titre'],$row['description'],$row['code'],$row['id_pro']);
         }} else {
           echo"No records" ;
         }
         ?>
             </div> 
              <div class="row" id="basket">
             <?php
         
          $query="SELECT * FROM `produits` where id_cat=6  ";
          $result = mysqli_query($conn,$query);
          if (mysqli_num_rows($result)>0 ) {
          while ($row = mysqli_fetch_assoc($result)) {
          
       componentLeft($row['prix'],$row['image'],$row['titre'],$row['description'],$row['code'],$row['id_pro']);

         }} else {
           echo"No records" ;
         }}
         ?>
         


              </div>
              </div>
             

     
    


    <section class="shipping-wthree">
        <div class="shiopping-grids d-lg-flex">
            <div class="col-lg-4 shiopping-w3pvt-gd text-center">
                <div class="icon-gd"><span class="fa fa-truck" aria-hidden="true"></span>
                </div>
                <div class="icon-gd-info">
                    <h3>FREE SHIPPING</h3>
                    <p>On all order over $2000</p>
                </div>
            </div>
            <div class="col-lg-4 shiopping-w3pvt-gd sec text-center">
                <div class="icon-gd"><span class="fa fa-bullhorn" aria-hidden="true"></span></div>
                <div class="icon-gd-info">
                    <h3>FREE RETURN</h3>
                    <p>On 1st exchange in 30 days</p>
                </div>
            </div>
            <div class="col-lg-4 shiopping-w3pvt-gd text-center">
                <div class="icon-gd"> <span class="fa fa-gift" aria-hidden="true"></span></div>
                <div class="icon-gd-info">
                    <h3>MEMBER DISCOUNT</h3>
                    <p>Register &amp; save up to $29%</p>
                </div>

            </div>
        </div>

    </section>
 
<?php  include ("includes/template/footer.php") ?>