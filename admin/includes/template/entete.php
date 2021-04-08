 <div class="header">
        <div class="container">
           
            <div class="w3l_logo" >
                <h1><a href="index.php">Maison <span>du Glamour</span></a></h1>
            </div>

            

            <div class="cart box_1">
                <div class="search">
                <input class="search_box" type="checkbox" id="search_box">
                <label class="icon-search" for="search_box">
                  <span class="fa fa-search" aria-hidden="true"></span></label>
                <div class="search_form">
                    <form action="shopping.php"  method="POST">
                        <input type="text" name="Search" placeholder="Search...">
                        <input type="submit" name=submit_search  value="Send">
                    </form>
                </div>
            </div>
        </div>

                
                <div class="clearfix"> </div>
            </div>  
            <div class="clearfix"> </div>

        </div>
    
    <hr>
         <div class="container">
          <?php
           if (isset($_POST['submit_search'])) {
        
                  
                  echo " <h1 style='font-size: 13px ;letter-spacing: 3px ;'>Résultat de recherche</h1>
                   <hr>" 
                 ;
          }
          ?>
            <div class="row ">
                
         <?php 
    if (isset($_POST['submit_search'])) {
        $Search = mysqli_real_escape_string($conn,$_POST['Search']);
        $sql = "SELECT * FROM produits WHERE titre LIKE '%$Search%' OR description LIKE '%$Search%' OR prix
        LIKE '%$Search%'";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);
        if ($queryResult > 0){
            while ($row = mysqli_fetch_assoc($result)) {

                 component($row['prix'],$row['image'],$row['image2'],$row['image3'],$row['image4'],$row['image5'],$row['titre'],$row['description'],$row['code'],$row['id_pro']);
            }
        }else {
           echo "no records " ;
        }
    }

   ?>
        
</div>
</div> 