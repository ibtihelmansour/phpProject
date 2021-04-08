<?php
function shoes ($produitprix1,$image1,$produitnom,$produitid ){
	$element ="

            <div class='card col-12 col-md-4 col-lg-4'>
                <div class='card-img'>
                    <img src='$image1'  title='' style='height: 300px; width:220px !important '>
                </div>
                <div class='card-box'>
                    <h4 class='card-title mbr-fonts-style align-center display-7'>$produitnom</h4>
                    <div class='mbr-text mbr-fonts-style align-center mbr-light display-7'>
                         <div class='product_price'>
                                <div class='grid-price'>
                                    <span class='money'>$produitprix1 TND</span>
                                </div>
                            </div>
                                  <ul class='stars'>
                                <li><a href='#'><span class='fa fa-star' aria-hidden='true'></span></a></li>
                                <li><a href='#'><span class='fa fa-star' aria-hidden='true'></span></a></li>
                                <li><a href='#'><span class='fa fa-star-half-o' aria-hidden='true'></span></a></li>
                                <li><a href='#'><span class='fa fa-star-half-o' aria-hidden='true'></span></a></li>
                                <li><a href='#'><span class='fa fa-star-o' aria-hidden='true'></span></a></li>
                            </ul>
                   <div class='mbr-section-btn align-center'>
                   
                    <a class='btn btn-md btn-success display-10' href='d.php?pid=$produitid' name='' type='submit' style='border-radius:100px ;'>
                   <span class='fa fa-shopping-cart'></span></a></div>
                </div>
            </div>
        </div>
        ";
        echo $element;
    }