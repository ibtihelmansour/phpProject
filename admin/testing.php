    <?php 
         session_start();
        include ("connect.php");
        include ("includes/template/header.php");
        include ("component.php");  
        if (isset($_POST['add'])){
      print_r($_POST['produit_id']) ;
    }



        ?>
<div class="row " id="row" > 
         <?php
         
          $query="SELECT * FROM `chaussures` where id_art=5  ";
          $result = mysqli_query($conn,$query);
          if (mysqli_num_rows($result)>0 ) {
          while ($row = mysqli_fetch_assoc($result)) {
          
        componentLeft($row['prix1'],$row['img1'],$row['titre'],$row['description'],$row['code'],$row['id_art']);
         }} else {
           echo"No records" ;
         }


         ?>
    </div>      