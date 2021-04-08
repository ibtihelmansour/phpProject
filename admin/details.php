<?php
session_start();
include ("connect.php");
 include ("includes/template/header.php");
include ("includes/template/navbar.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link href="layout/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" href="layout/css/bootstrap.min.css">

  <link rel="stylesheet" href="layout/css/theme/style.css">
   <link rel="stylesheet" href="layout/css/carousel.css" type="text/css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<!--link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
<!--===============================================================================================-->
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="layout/css/util.css">
	<link rel="stylesheet" type="text/css" href="layout/css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Modal1 -->


		<div class="container" style="padding: 60px 0">
			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
				
 <?php 
    $sql="SELECT * FROM produits where id_pro='$_GET[pid]' " ;
      $result = mysqli_query($conn,$sql);
          if (mysqli_num_rows($result)>0 ) {
          while ($row = mysqli_fetch_assoc($result)) {
    ?>

  


				<div class="row">

					<div class="col-md-6 col-lg-7 p-b-30">
						<div class="p-l-25 p-r-30 p-lr-0-lg">
							<div class="wrap-slick3 flex-sb flex-w">
								<div class="wrap-slick3-dots"></div>
								<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

								<div class="slick3 gallery-lb">
									<div class="item-slick3" data-thumb="<?php echo $row['image']; ?>">
										<div class="wrap-pic-w pos-relative">
											<img src="<?php echo $row['image']; ?>" alt="IMG-PRODUCT">

											
										</div>
									</div>
									<div class="item-slick3" data-thumb="<?php echo $row['image2'] ?>">
										<div class="wrap-pic-w pos-relative">
											<img src="<?php echo $row['image2'] ?>" alt="IMG-PRODUCT">

										</div>
									</div>

									<div class="item-slick3" data-thumb="<?php echo $row['image3'] ?>">
										<div class="wrap-pic-w pos-relative">
											<img src="<?php echo $row['image3'] ?>" alt="IMG-PRODUCT">

										</div>
									</div>

									<div class="item-slick3" data-thumb="<?php echo $row['image4'] ?>">
										<div class="wrap-pic-w pos-relative">
											<img src="<?php echo $row['image4'] ?>" alt="IMG-PRODUCT">

										
										</div>
									</div>
									<div class="item-slick3" data-thumb="<?php echo $row['image5'] ?>">
										<div class="wrap-pic-w pos-relative">
											<img src="<?php echo $row['image5'] ?>" alt="IMG-PRODUCT">

										
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-6 col-lg-5 p-b-30">
						<div class="p-r-50 p-t-5 p-lr-0-lg">
						<h4 class="mtext-105 cl2 js-name-detail p-b-14" style=" font-size: 25px ; letter-spacing: 3px ;">
							<?php echo $row['titre'] ;?>
							</h4>

							<span class="mtext-106 cl2" >
								<strong>Prix :</strong><?php echo $row['prix'] ?> TND
							</span>
							<br>
							<br>
							<hr>
							<span class="stext-102 cl3 p-t-23" >
								<strong>Réf :</strong><?php echo $row['code'] ?> 
							</span>

							<p class="stext-102 cl3 p-t-23" style="font-size: 15px">
								<strong>Description :</strong><?php echo $row['description'] ?>
							</p>
							
							<!--  -->
							<div class="p-t-33">
								<div class="flex-w flex-r-m p-b-10" style="margin-right: 55%">
									<div class="size-203 flex-c-m respon6" style="margin-right: 85%">
										Size disponible 
									</div>
                  
					 <ul class='pagination mt-3' >
                    <li class='page-item'>
                        <a class='page-link' name='size' >XS</a>
                    </li>
                    <li class='page-item'>
                        <a class='page-link' name='size' style='background-color: grey ;'>S</a>
                    </li>
                    <li class='page-item'>
                        <a class='page-link' name='size'>M</a>
                    </li>
                    <li class='page-item'>
                        <a class='page-link' name='size'>L</a>
                    </li>
                    <li class='page-item'>
                        <a class='page-link'name='size' >XL</a>
                    </li>
                </ul>
								</div>


								<div class="flex-w flex-r-m p-b-10">
									<!--div class="size-203 flex-c-m respon6"  style="margin-right: 85%">
										Quantités
									</div>
                  
									<div class="size-204 flex-w flex-m respon6-next" style="margin-right: 60%">
										<div class="wrap-num-product flex-w m-r-20 m-tb-10"  >
											<div class="btn-num-product-down cl8   flex-c-m" >
												<i class="fs-16 fa fa-minus"></i>
											</div>

										 <input class="mtext-104 cl3 txt-center num-product" type="quantite" name="quantite" value="1">

											<div class="btn-num-product-up cl8   flex-c-m" >
												<i class="fs-16 fa fa-plus"></i>
											</div>
										</div>
                
           

									</div-->
									<section class="shipping-wthree" style="padding: 30px 0 ; width: : 600px " >
						        <div class="shiopping-grids d-lg-flex">
						            <div class="col-lg-4 shiopping-w3pvt-gd text-center">
						                <div class="icon-gd"><span class="fa fa-truck" aria-hidden="true"></span>
						                </div>
						                <div class="icon-gd-info">
						                    <h3>LIVRAISON GRATUITE</h3>
						                    <p>On all order over $2000</p>
						                </div>
						            </div>
						            <div class="col-lg-4 shiopping-w3pvt-gd sec text-center">
						                <div class="icon-gd"><span class="fa fa-bullhorn" aria-hidden="true"></span></div>
						                <div class="icon-gd-info">
						                    <h3>DELAI DE RETRACTATION</h3>
						                    <p>jusqu'à 30 jours apres l'achat</p>
						                </div>
						            </div>
						            <div class="col-lg-4 shiopping-w3pvt-gd text-center">
						                <div class="icon-gd"> <span class="fa fa-gift" aria-hidden="true"></span></div>
						                <div class="icon-gd-info">
						                    <h3>REMISE AUX MEMBRES</h3>
						                    <p>inscrire &amp; pour profiter </p>
						                </div>

						            </div>
						        </div>

						    </section>
                                   <!--div  style="margin-right: 150px; padding: 20px 0 ;" >
							<button class=" mbr-section-btn btn btn-md btn-success display-4 js-addcart-detail"  >
							ajouter au panier
							</button>

							
									</div-->	
									
								</div>	

							</div>

							<!--  -->
							
						</div>

					</div>
				</div>
			</div>
			<?php
		}}
		?>
	
</div>

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<!--script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script-->
<!--===============================================================================================-->
	<!--script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script-->
<!--===============================================================================================-->
	<script src="vendor/slick/slick.min.js"></script>
	<script src="layout/js/details/slick-custom.js"></script>
<!--===============================================================================================-->
	<!--script src="vendor/parallax100/parallax100.js"></script>
	<script>
        $('.parallax100').parallax100();
	</script-->
<!--===============================================================================================-->
	<!--script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script-->
<!--===============================================================================================-->
	<script src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	
	</script>
<!--===============================================================================================-->
	<!--script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script-->
<!--===============================================================================================-->
	<script src="layout/js/details/main.js"></script>
	 <script src="layout/js/dropdown/script.min.js"></script>
  <script src="layout/js/filtre/script.js"></script>
  </body>
</html>

