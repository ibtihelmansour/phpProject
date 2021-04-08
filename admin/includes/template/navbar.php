

 <section class="menu cid-rbmbAelA8q" once="menu" id="menu1-0">

    
    

    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="navbar-brand">
            
            <span class="navbar-caption-wrap"><a class="navbar-caption  display-7" href="index.php" style="margin-bottom: 18% ;  ">
              MAISON DE GLAMOUR 
                </a></span>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>

        </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                <li class="nav-item">
                    <a class="nav-link link display-4" id="bg" href="index.php#features7-a">
                        Nouveautés
                    </a>
                </li>
                   <li class="nav-item dropdown">
                    <a class="nav-link link dropdown-toggle  display-4" id="bg" href="#" data-toggle="dropdown-submenu" aria-expanded="false">
                        Vêtement
                    </a>
                     <div class="dropdown-menu">
                            <a class="dropdown-item display-4" id="bg" href="shopping.php#sweat">Pulls | Chemises</a>
                            <a class="dropdown-item  display-4" id="bg" href="https://mobirise.com/bootstrap-template/video-background.html">Djeans </a>
                            <a class="dropdown-item display-4" id="bg" href="https://mobirise.com/bootstrap-template/footer-template.html">Robes</a>

                           </div>
                </li>
                   <li class="nav-item dropdown">
                    <a class="nav-link link dropdown-toggle display-4" id="bg" href="#" data-toggle="dropdown-submenu" aria-expanded="false">
                        Chaussures
                         </a>
                         <div class="dropdown-menu">
                            <a class="dropdown-item  display-4" id="bg" href="chaussures.php#bottines">Bottines</a>
                            <a class="dropdown-item  display-4" id="bg" href="chaussures.php#baskets">Baskets</a>
                            <a class="dropdown-item display-4" id="bg"  href="https://mobirise.com/bootstrap-template/footer-template.html">Talons</a>

                           </div>
                   
                </li>
                <li class="nav-item">
                    <a class="nav-link link display-4" id="bg" href="#">
                       Solde
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link  display-4" id="bg" href="cartShop.php">
                        <div class="total">
          
                       <span id="simpleCart_quantity" class="fa fa-shopping-cart"> 
                      <?php 
                       if (isset($_SESSION['cart'])) {
                           $count=count($_SESSION['cart']);
                      echo " <span   id='cart_count' style='text-align: center ;padding: 0 0.9rem 0.1rem 0.9rem ; border-radius: 3rem; color:#ffffff !important; background-color : #f7ed4a !important ;'>$count</span>";
                      } else {
                     echo " <span   id='cart_count' class='text-warning ' style='text-align: center ;padding: 0 0.9rem 0.1rem 0.9rem ; border-radius: 3rem; color:#ffffff !important; background-color : #f7ed4a !important ;'> 0
                     </span>";

                    }
                     ?> 
            <span id="cart-count"  class="text-warning bg-light"></span>
          </span></div>
                    </a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link link  display-4" id="bg" href="https://www.facebook.com">
                       <span class="fa fa-facebook"></span>
                    </a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link link  display-4" id="bg" href="index.php#map1-h" >
                 
                     <span class="fa fa-map-marker"></span>
                    </a>
                </li>
                  <li class="nav-item">
                   <?php
                   if (isset($_POST['username'])) {
                   ?>
                  </li>
               <li class="nav-item">
                    <a class="nav-link link  display-4" id="bg">
                       <img src="layout/images/ibtihel.jpg" style="width: 30px ; height: 30px ; border-radius: 100% ; margin-bottom: 30%;">
                    </a>
                </li>



                  <li class="nav-item">
              
              <a class="nav-link link  display-4" id="bg" href="#" style=" color: #f7ed4a !important ; ">
                    
                     
                      Bonjour
                    <?php echo $_POST['username'];  ?> 

                    </a>
                </li>
                   <li class="nav-item">
                    <a class="nav-link link  display-4" id="logout" href="index.php" >
                    Logout
                    <?php /* if(isset($_POST["username"]))  
                        { session_unset() ; }*/
                  ?> 
                       
                    </a>
                </li>
                <?php
                   }else { 
                    ?>
                <li class="nav-item">
                


                  <button type="button" class="nav-link link  display-7 btn btn-success"
                  data-whatever="@fat" id="login" name="login" onclick="window.location.href='signup.php'">
                       <span class="fa fa-user"> S'inscrire </span>

                    </button>
                </li>
                <?php
              }
              ?>
               
            </ul>
            
            
           
      </div>
    </nav>
</section>

