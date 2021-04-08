<?php
function cart ($img ,$prix,$nomproduit,$id_produit ){
	$element ="
  
  <form class='col-md-12' method='get' action='cartShop.php' >

             
  
                <tbody>
                  <tr>
                    <td class='product-thumbnail'>
                    <div class='gallery'>
                      <a data-lightbox='mygallery'><img src='$img' alt='Image' class='img-fluid' > </a>
                      </div>
                    </td>
                    <td class='product-name'>
                      <h2 class='h5 text-black'>$nomproduit</h2>
                    </td>
                    <td>$prix TND</td>
                    <td>
                      <div class='input-group mb-3' style='max-width: 120px;'>
                        <div class='input-group-prepend'>
                          <button class='btn btn-outline-warning  js-btn-minus' type='button'>&minus;</button>
                        </div>
                        <input type='text' class='form-control text-center' value='1' name='quantité' placeholder='' aria-label='Example text with button addon' aria-describedby='button-addon1'>
                        <div class='input-group-append'>
                          <button class='btn btn-outline-warning  js-btn-plus' type='button'>&plus;</button>
                        </div>
                      </div>

                    </td>
                    <td> $prix TND </td>
                   
                    <td><a class='btn btn-outline-warning  height-auto ' href='cartShop.php?action=delete&id=$id_produit'><span class='fa fa-trash'></span></a></td>
                  </tr>

             
                </tbody>
           
          </form>
          ";
        echo $element ;
    }
    ?>