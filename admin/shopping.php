<?php 
    session_start();
    include ("connect.php")  ;
    include ("includes/template/header.php");
    include ("includes/template/navbar.php");
    include ("component.php");

?>
<?php
if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Le produit est déjà ajouté dans le panier..!')</script>";
            echo "<script>window.location = 'shopping.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
               echo "<script>alert('Un produit a été ajouté dans le panier!')</script>";
        echo "<script>window.location = 'shopping.php'</script>";
        }
    
    }else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
       //print_r($_SESSION['cart']);
     
    }
}




    ?>

    <img src="layout/images/photo-1558191053-8edcb01e1da3.jpg" style="width: 100%; height: 620px  ">
    <?php
        include ("filtre5.php");
   ?>

  




    <section id="sweat">
	<div class="container-fluid"  >
       
		<div class="row text-center py-5 mt-5" id="row" > 
		 <?php
          $query="SELECT * FROM `produits` WHERE id_cat=3 ";
          $result = mysqli_query($conn,$query);
          if (mysqli_num_rows($result)>0) {
          while ($row = mysqli_fetch_assoc($result)) {
          
        component($row['prix'],$row['image'],$row['image2'],$row['image3'],$row['image4'],$row['image5'],$row['titre'],$row['description'],$row['code'],$row['id_pro']);
        
        }
        } else {
        echo"No records" ;
         }
        mysqli_close($conn);
        ?> 
</div>
</div>

</section> 
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

