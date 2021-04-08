<?php
function component ($produitprix,$image1,$image2,$image3,$image4,$image5,$produitnom,$description,$code,$produitid ){
	$element ="
	<div class='col-md-4 col-sm-6 my-3 my-md-0'>
        <form action='shopping.php' method='POST'>
        	<div class='cart shadow'>
        	
             <div class='hs-wrapper'>
                                        <img src='$image1' alt=''  class='img-fluid' />
                                        <img src='$image2' alt='' class='img-fluid' />
                                        <img src='$image3' alt='' class='img-fluid' />
                                        <img src='$image4' alt='' class='img-fluid' />
                                        <img src='$image5' alt='' class='img-fluid' />
                                        <img src='$image3' alt='' class='img-fluid' />
                                        <img src='$image2' alt='' class='img-fluid' />
                                        <img src='$image1' alt='' class='img-fluid' />                
                                 </div>
                   
                  
                    <h2 class='align-center display-5 mt-3' style='margin-right:10%; letter-spacing: 3px ;font-size:20px'>
                    <i class='fa fa-heart-o' id='sm'></i> $produitnom
                     <a ></a>
                    </h2>

                  
             
                 <div style='font-size: 20px;  letter-spacing: 3px ;' <span class='money'><span class='line'></span>$produitprix TND</span>
                 </div>
                
            
              
                                  
            <div class='mbr-section-btn '>
            <button class='btn  btn-white display-4' href='shopping.php?pid=$produitid' name='add' type='submit' style='border-radius:100px ;'>
            <span class='fa fa-shopping-cart'></span>
            </button> 
            <input type='hidden' name='product_id' value=$produitid>

             <a class='btn  btn-white display-4' href='details.php?pid=$produitid' name='' type='submit' style='border-radius:100px ;'><span class='fa fa-eye'>
             </span>
        
            </a> 
             </div>
            </div>

        	
        </form>
       </div> 




	";
	echo $element;
}
      function componentLeft($produitprix,$produitimg,$produitnom,$description,$code,$produitid){
  
           $element1 ="
    <div class='col-md-6 col-sm-6 my-3 my-md-0'>
        <form action='chaussures.php' method='POST'>
            <div class='cart shadow'>
            
                                        
                                        <img src='$produitimg' class='img-fluid' />                
                             
                     <center><h2 class='align-center display-5 mt-3' style='letter-spacing: 3px ;font-size:20px'>
                    <i class='fa fa-heart-o' id='sm'></i> $produitnom
                    
                    </h2></center>

                  
             
                 <center><div style='font-size: 15px;  letter-spacing: 3px ;'>
                 <span><span class='line'></span>$produitprix TND</span>
                 </div></center>
           
                                  
                              
            <div class='mbr-section-btn align-center'>
            <button class='btn  btn-white display-4' href='#' name='add' type='submit'style='border-radius:100px ;'>
            <span class='fa fa-shopping-cart'></span>
            </button>
           
            <input type='hidden' name='product_id' value=$produitid>
            
              <a class='btn  btn-white display-4' href='d.php?pid=$produitid' name='' type='submit' style='border-radius:100px ;'>
          <span class='fa fa-eye'>
             </span>
        
            </a>
             </div> 
             </div>
           
            
        </form>
       </div> 
    ";
        echo $element1 ;
    }
  

function model($prix1,$img1,$produitnom,$description,$code,$produitid){
        $element ="

     <div class='col-md-6'>
      <form action='chaussures.php' method='POST'>
                
                <div class='mbr-gallery-item'   data-seller='false' >

                  <div class='item_overlay' data-toggle='modal'></div>
                  <div class='galleryItem' data-toggle='modal'>
               
                    <div class='style_overlay'></div>
                    <div class='img_wraper'><img src='$img1'  style='width:500px ; height: 350px ;'></div>

                     
                      <p style='display:inline !important'>$produitnom </p>
                      <h5> $prix1 DT </h5>

                    <span class='onsale mbr-fonts-style display-7' data-onsale='false' style='display: none;'>-50%</span>
                    <div class='sidebar_wraper'>
                     
                     
                      <div class='card-description'>


                    <h4 class='mbr-fonts-style mbr-text display-7 align-center' >$produitnom</h4>

                    <div> 
                      <span class='shop-item-price mbr-fonts-style display-5' style='margin-left:10%;display: none;' >$prix1 TND</span><span class='ldprice mbr-fonts-style display-7'>$150</span>
                     </div>
                     <br/>  


                      <strong> Description </strong>.&nbsp;
                        <div>$description     .&nbsp;<br>
                          <br>
                           code: <strong>$code</strong>
                    <ul class='pagination mt-3'>
                    <li class='page-item'>
                        <a class='page-link' >36</a>
                    </li>
                    <li class='page-item'>
                        <a class='page-link' >37</a>
                    </li>
                    <li class='page-item'>
                        <a class='page-link' >38</a>
                    </li>
                    <li class='page-item'>
                        <a class='page-link' >39</a>
                    </li>
                    <li class='page-item'>
                        <a class='page-link' >40</a>
                    </li>
                </ul>
                           </div>
                      </div>

                    </div>
                  </div>
                </div>
                  <div class='mbr-section-btn '>
            <button class='btn btn-md btn-success' href='#' name='add' type='submit' style='border-radius:100px ;'>
            <span class='fa fa-shopping-cart'></span>
            </button></div> 
            <input type='hidden' name='product_id' value=$produitid>
            </form>
              </div>
                ";
    echo $element;
}