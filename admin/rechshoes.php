<?php 
    include ("connect.php")  ;
    include ("includes/template/header.php");
    include ("includes/template/navbar.php");
    include ("component.php");
?>

    <img src="layout/images/30 (9).jpg" style="width: 1500px ; height:850px;" class="img-fluid">
   <?php  include ("includes/template/entete.php"); ?>
     
        <div class="container-fluid">
            <h1>Résultat récherche</h1>
            <div class="row ">
                
         <?php 
    if (isset($_POST['submit_search'])) {
        $Search = mysqli_real_escape_string($conn,$_POST['Search']);
        $sql = "SELECT * FROM chaussures WHERE titre LIKE '%$Search%' OR description LIKE '%$Search%' OR prix1 
        LIKE '%$Search%'";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);
        if ($queryResult > 0){
            while ($row = mysqli_fetch_assoc($result)) {

                 componentLeft($row['prix1'],$row['img1'],$row['titre'],$row['description'],$row['code']);
            }
        }else {
           echo "no records " ;
        }
    }

   ?>

</div>
</div> 
<hr>




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