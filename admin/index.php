<?php
     session_start();
    include ("connect.php")  ;
    include ("includes/template/header.php");
    include ("includes/template/navbar.php");
    include ("includes/template/carousel.php");
    include ("includes/functions/fcindex.php");

?>


<section class="portfolio" id="portfolio">
        <!--div>
        <div class="container">
        <h2 class="mbr-fonts-style mb-4 align-center display-5" style="letter-spacing: 3px ;font-weight: normal;">Nos meilleurs articles</h2>
    </div>
   </div-->
   <!-- The grid: four columns -->
<div style="text-align:center">
  <h2>Tapez sur l'image </h2>
  <p>pour plus des détails</p>
</div>

<!-- The four columns -->
<div class="row" style=" content: "";display: table;clear: both;">
  <div class="col-lg-3 col-sm-6 col-xs-12">
    <img src="layout/images/90.jpg" alt="Nature" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="col-lg-3 col-sm-6 col-xs-12">
    <img src="layout/images/99.jpg" alt="Snow" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="col-lg-3 col-sm-6 col-xs-12">
    <img src="layout/images/92.jpg" alt="Mountains" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="col-lg-3 col-sm-6 col-xs-12">
    <img src="layout/images/94.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
</div>

<div class="container">
  <span onclick="this.parentElement.style.display='none'" class="closebtn" style=" position: absolute;
  top: 10px;margin-right: 30%; right: 25px ;color: black;font-size: 50px;cursor: pointer;">&times;</span>
  <img id="expandedImg" style="width:400px; height: 500px ; margin-right: 40% ; margin-left: 35%;">
  <div id="imgtext" style="position: absolute;bottom: 15px;left: 15px;color: white;font-size: 20px;"></div>
</div>



    <!--div class="container-fluid ">
        
       </div>

    <div class="portfolio-grid" >
      <div class="row">
        <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="card middle">
      <div class="front">
        <img src="layout/images/99.jpg" alt="">
      </div>
      <div class="back">
        <div class="back-content middle">

              <img src="layout/images/98.jpg" alt="">
         
                        
        </div>
      </div>
    </div>
          
        </div>

        <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="card middle">
      <div class="front">
        <img src="layout/images/91.jpg" alt="">
      </div>
      <div class="back">
        <div class="back-content middle">
           <img src="layout/images/92.jpg" alt="">
            
        </div>
      </div>
    </div>
        </div>

        <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="card middle">
      <div class="front">
        <img src="layout/images/90.jpg" alt="">
      </div>
      <div class="back">
        <div class="back-content middle">
          
          <img src="layout/images/93.jpg" alt="">
        </div>
      </div>
    </div>
        </div>

        <div class="col-lg-3 col-sm-6 col-xs-12">
           <div class="card middle">
      <div class="front">
        <img src="layout/images/94.jpg" alt="">
      </div>
      <div class="back" >
        <div class="back-content middle">
            <img src="layout/images/95.jpg" alt="">

        </div>
      </div>
    </div>
        </div>
      

     
    </div>
    </div-->
    

  </section>


<section class="features7 cid-rbmgesvQTI" id="features7-a" style="padding-top: 80px;">
    <div class="container">
        <div class="row main-row">
            <div class="text-content mb-4 col-lg-6">
                <h2 class="mb-4 mbr-fonts-style mbr-section-title display-2">NOUVELLE COLLECTION 2020</h2>
                <h3 class="mbr-fonts-style mbr-text align-left mbr-light display-7">Assurez à vos clients que vous êtes un professionnel. Par exemple, que vous avez une grande collection de spots à offrir, vous connaissez les meilleurs fleuristes et photographes. Partagez quelques photos de vos travaux précédents.</h3>
                
                <div class="mbr-section-btn align-left pt-3"><a class="btn btn-md btn-success display-7" href="shopping.php#">Voir plus</a>
                    <img src="layout/images/jenn.gif" alt="Mobirise" title="" style="width: 420px ;height: 570px; margin-left: 2%; padding:20px 0;position: relative; " > 
                </div>
            </div>
     
            <div class="mbr-figure col-lg-6">
                <img src="layout/images/jen.gif" alt="Mobirise" title="">
            </div>

        </div>
    </div>
</section>

<section class="header1 cid-qwU0Se3wgU mbr-parallax-background" id="header1-c" data-rv-view="1142" >

    

    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(70, 80, 82);">
    </div>

    <div class="container" >
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h2 class="mb-4 mbr-fonts-style mbr-section-title display-2" style="color: #ffcc00;letter-spacing: 3px;">
                    Venez Profitez des soldes jusqu'à -80% </h2>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-7"> <a class="btn  btn-white-outline display-4" href="#">SHOPPING</a></h3>
                
                
            </div>
        </div>
    </div>

</section>


<section class="features3 cid-rbmgMi0CRH" id="features17-b">
    
    

    
    <div class="container">
        <h2 class="mbr-fonts-style mb-4 align-center mbr-bold display-5" style="letter-spacing: 3px ;font-weight: normal;">Offre Spéciale</h2>
        
        <div class="media-container-row">
               <?php
         
          $query="SELECT * FROM produits where id_cat in (5,6)  order by prix  asc limit 3";
          $result = mysqli_query($conn,$query);
          if (mysqli_num_rows($result)>0 ) {
          while ($row = mysqli_fetch_assoc($result)) {
          
       
         shoes($row['prix'],$row['image3'],$row['titre'], $row['id_pro']);
           }} else {
           echo"No records" ;
         }


         ?>
          <!--div class='card col-12 col-md-4 col-lg-4'>
                <div class="card-img">
                    <img src='$row[img1]'  title='' style='height: 300px; width:220px '>
                </div>
                <div class='card-box'>
                    <h4 class='card-title mbr-fonts-style align-center display-5'>$row['titre']</h4>
                    <div class='mbr-text mbr-fonts-style align-center mbr-light display-7'>
                         <div class='product_price'>
                                <div class='grid-price'>
                                    <span class='money'><span class='line'>$row['prix1'] TND</span>$row['prix1'] TND</span>
                                </div>
                            </div>
                                  <ul class='stars'>
                                <li><a href='#'><span class='fa fa-star' aria-hidden='true'></span></a></li>
                                <li><a href='#'><span class='fa fa-star' aria-hidden='true'></span></a></li>
                                <li><a href='#'><span class='fa fa-star-half-o' aria-hidden='true'></span></a></li>
                                <li><a href='#'><span class='fa fa-star-half-o' aria-hidden='true'></span></a></li>
                                <li><a href='#'><span class='fa fa-star-o' aria-hidden='true'></span></a></li>
                            </ul>
                   <div class='mbr-section-btn align-center'><a class='btn btn-md btn-success display-10' href='chaussures.php#'><span class='fa fa-shopping-cart'></span></a></div>
                </div>
            </div>
        </div>
          <div class='card col-12 col-md-4 col-lg-4'>
                <div class='card-img'>
                    <img src='$row[img1]'  title='' style='height: 300px; width:220px '>
                </div>
                <div class='card-box'>
                    <h4 class='card-title mbr-fonts-style align-center display-5'>$row['titre']</h4>
                    <div class='mbr-text mbr-fonts-style align-center mbr-light display-7'>
                         <div class='product_price'>
                                <div class='grid-price'>
                                    <span class='money'><span class='line'>$row['prix1'] TND</span>$row['prix1'] TND</span>
                                </div>
                            </div>
                                  <ul class='stars'>
                                <li><a href='#'><span class='fa fa-star' aria-hidden='true'></span></a></li>
                                <li><a href='#'><span class='fa fa-star' aria-hidden='true'></span></a></li>
                                <li><a href='#'><span class='fa fa-star-half-o' aria-hidden='true'></span></a></li>
                                <li><a href='#'><span class='fa fa-star-half-o' aria-hidden='true'></span></a></li>
                                <li><a href='#'><span class='fa fa-star-o' aria-hidden='true'></span></a></li>
                            </ul>
                   <div class='mbr-section-btn align-center'><a class='btn btn-md btn-success display-10' href='chaussures.php#'><span class='fa fa-shopping-cart'></span></a></div>
                </div>
            </div>
        </div-->
       

            </div>
        </div>
</section>

<section class="map1 cid-qzakXpK2SH" id="map1-h" data-rv-view="517" style="margin-top: 5%;">
   
 
    <div class="google-map"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d102782.74610918446!2d10.709830199999999!3d36.3859426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x12a875102650dbca!2sIT%20Business%20School!5e0!3m2!1sfr!2stn!4v1585199325566!5m2!1sfr!2stn" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> </div>


<section>

<!--section class="form1 cid-rbmkSiAkp2" id="form1-e">

    

    
    <div class="container">
        <div class="row main-row justify-content-center">
            <div class="col-sm-12 col-lg-8 col-md-6" data-form-type="formoid">
                <div data-form-alert="" hidden="">Thanks for filling out the form!</div>
                <form class="mbr-form" action="https://mobirisethemes.com/" method="post" data-form-title="My Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="iLgkqGtzh01u5CObG568vjO7faJaWvLykV7mwDXaChoSIEvO0vWsbqieT9EEorfrH9f9BnrFEjQxEJRY3X3JhgbHDIohL6a6kcxwc5K5SQm2tOmjp2/WpvTstY/9UbfF">
                    <div class="row input-main">
                        <div class="col-md-12 col-lg-6 input-wrap" data-for="firstname">
                            <input type="text" class="field display-7" name="firstname" placeholder="First Name" data-form-field="First Name" required="" id="firstname-form1-e">
                        </div>
                        <div class="col-md-12 col-lg-6 input-wrap" data-for="email">
                            <input type="email" class="field display-7" name="email" data-form-field="Email" placeholder="Email" required="" id="email-form1-e">
                        </div>
                        
                        
                    </div>

                    <div class="row input-main">
                        <div class="col-md-12 col-lg-12 form-group" data-for="message">
                            <textarea type="text" class="form-control display-7" name="message" rows="7" data-form-field="Message" placeholder="Message" id="message-form1-e"></textarea>
                        </div>
                    </div>
                    <div class="row input-main">
                        <div class="col-md-12 col-lg-12 btn-row">
                            <span class="input-group-btn">
                                <button href="" type="submit" class="btn btn-form btn-success display-4">SEND</button>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-12 col-lg-4 col-md-6 text-block">            
                <div class="content-panel">
                    <h2 class="mbr-section-title mbr-fonts-style align-left mbr-white pb-2 display-2">
                        Get In Touch
                    </h2>
                    <p class="content-block mbr-fonts-style align-left m-0 display-7"><span class="fa fa-phone"></span>Tel : +216 53259048
                        <br><span class="fa fa-envelope"></span>
                        Email : ibtihelmansour5555@gmail.com
<br></p>
                </div>
            </div>
        </div>
   </div>
</section-->



<?php  include ("includes/template/footer.php") ?>

 <div id="loginModal" class="modal fade" role="dialog">  
      <div class="modal-dialog">  
   <!-- Modal content-->  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Login</h4>  
                </div>  
                <div class="modal-body">  
                     <label>Username</label>  
                     <input type="text" name="username" id="username" class="form-control" />  
                     <br />  
                     <label>Password</label>  
                     <input type="password" name="password" id="password" class="form-control" />  
                     <br />  
                     <button type="button" name="login_button" id="login_button" class="btn btn-warning">Login</button>  
                </div>  
           </div>  
      </div>  
 </div>  
 
 <script>  
 $(document).ready(function(){  
      $('#login_button').click(function(){  
           var username = $('#username').val();  
           var password = $('#password').val();  
           if(username != '' && password != '')  
           {  
                $.ajax({  
                     url:"action.php",  
                     method:"POST",  
                     data: {username:username, password:password},  
                     success:function(data)  
                     {  
                          //alert(data);  
                          if(data == 'No')  
                          {  
                               alert("Wrong Data");  
                          }  
                          else  
                          {  
                               $('#loginModal').hide();  
                               location.reload();  
                          }  
                     }  
                });  
           }  
           else  
           {  
                alert("Both Fields are required");  
           }  
      });  
      $('#logout').click(function(){  
           var action = "logout";  
           $.ajax({  
                url:"action.php",  
                method:"POST",  
                data:{action:action},  
                success:function()  
                {  
                     location.reload();  
                }  
           });  
      });  
 });  
 </script>  
 <script type="text/javascript">
   function myFunction(imgs) {
  // Get the expanded image
  var expandImg = document.getElementById("expandedImg");
  // Get the image text
  var imgText = document.getElementById("imgtext");
  // Use the same src in the expanded image as the image being clicked on from the grid
  expandImg.src = imgs.src;
  // Use the value of the alt attribute of the clickable image as text inside the expanded image
  imgText.innerHTML = imgs.alt;
  // Show the container element (hidden with CSS)
  expandImg.parentElement.style.display = "block";
}function myFunction(imgs) {
  // Get the expanded image
  var expandImg = document.getElementById("expandedImg");
  // Get the image text
  var imgText = document.getElementById("imgtext");
  // Use the same src in the expanded image as the image being clicked on from the grid
  expandImg.src = imgs.src;
  // Use the value of the alt attribute of the clickable image as text inside the expanded image
  imgText.innerHTML = imgs.alt;
  // Show the container element (hidden with CSS)
  expandImg.parentElement.style.display = "block";
}
 </script>
  
