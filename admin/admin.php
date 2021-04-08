<?php 
session_start();
include ("connect.php");
include ("includes/template/header.php");
    //delete produit 
      if(isset($_GET['delete_pro'])){
        $delete_pro = mysqli_query($conn , "DELETE FROM produits WHERE id_pro='$_GET[delete_pro]'");
        if ($delete_pro) {
          echo " <script> alert('suppression a effectuée avec succés!') </script> "; 
          echo " <script> window.open('admin.php?action=pro', '_self') </script> ";
        }
      }


  if (isset($_POST['insert'])) {
    
    $titre =     $_POST['titre'];
    $description =   !empty( $_POST[' titre']);
    $prix=     $_POST['prix'];
    $categorie =   $_POST['categorie'];
    $code  = $_POST['code'];
    $Image1  = $_POST['Image1'];
    $Image2  = $_POST['Image2'];
    $Image3  = $_POST['Image3'];
    $Image4  = $_POST['Image4'];
    $Image5  = $_POST['Image5'];

    $sql = " INSERT into produits ( id_cat,titre,description,code,prix,image,image2 ,image3 ,image4 ,image5) values  ('$categorie','$titre','$titre','$code','$prix',
    './layout/images/$Image1','./layout/images/$Image2' ,'./layout/images/$Image3' ,'./layout/images/$Image4' ,
    './layout/images/$Image5')";
   $result = mysqli_query($conn, $sql);
   
    if ($result){

    echo '<script> alert("un produit ajouté a la base ")</script>';

    }else 
    {
        echo 'there were erros .........';
    }

} 

/*delete client */
   if(isset($_GET['delete_client'])){
        $delete_pro = mysqli_query($conn , "DELETE FROM client WHERE id='$_GET[delete_client]'");
        if ($delete_pro) {
          echo " <script> alert('suppression a effectuée avec succés!') </script> "; 
          echo " <script> window.open('admin.php?action=client', '_self') </script> ";
        }
      }
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 55px 0px;
  width: 250px;
  background_color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;

}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #000000;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 50px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}


.container {
  padding: 5px;
 
}
img {

  width: 180px ;
  height: 200px ;
  margin-right: 3% ;
   padding-right: 3px;

}

span.psw {
  float: right;
  padding-top: 16px;
}



</style>
</head>
<body>

 <?php
        include ("includes/template/navadmin.php");
   ?>
<div class="sidebar">
  
  <a class="active" href="admin.php?action=accueil">Accueil</a>
  <a href="admin.php?action=pro">Nos Produits</a>
  <a href="admin.php?action=shoes">Nos Chaussures</a>
  <a href="admin.php?action=add">Ajouter un produit</a>
  <!--a href="admin.php?action=cat">Nos Catégorie</a-->
  <a href="admin.php?action=client">Nos Client</a>
  <a href="admin.php?action=edit_pro"></a>
</div>


<div class="content" >
  <div class="content_box" >
<?php 
if(isset($_GET['action'])){
  $action =$_GET['action'];
}else {
  $action='';
}

switch ($action) {
  case 'shoes';
  echo"
        <div class='container'>
                    <h2 class='mbr-section-title form-title mbr-fonts-style display-5 mt-2'>
                        |Nos Chaussures
                    </h2>
                    <hr>                
                

<div class='site-section'>
   
       
                 <div class='site-blocks-table'>
<table class='table' >
      <tr>
                    <th class='product-thumbnail'>ID</th>
                    <th class='product-name'>TITRE</th>
                    <th class='product-price'>DESCRIPTION</th>
                    <th class='product-quantity'>PRIX</th>
                    <th class='product-total'>CODE</th>
                    <th class='product-remove'>LES IMAGES</th>
                    <th class='product-remove'>OPTIONS</th>

                  </tr>" ;
 $sql="SELECT * FROM produits where id_cat in (5 , 6)" ;
      $result = mysqli_query($conn,$sql);
          if (mysqli_num_rows($result)>0 ) {
          while ($row = mysqli_fetch_assoc($result)) {

             

  include("table_pro.php");

    

}}

    echo "         
            </table>
          </div>
        </div>
      </div>";


   break;

    case 'pro';
  echo"
        <div class='container'>
                    <h2 class='mbr-section-title form-title mbr-fonts-style display-5 mt-2'>
                        |Nos Vetements

                    </h2>
                    <hr>                
                

<div class='site-section'>
   
       
                 <div class='site-blocks-table'>
<table class='table' >
      <tr>
                    <th class='product-thumbnail'>ID</th>
                    <th class='product-name'>TITRE</th>
                    <th class='product-price'>DESCRIPTION</th>
                    <th class='product-quantity'>PRIX</th>
                    <th class='product-total'>CODE</th>
                    <th class='product-remove'>LES IMAGES</th>
                    <th class='product-remove'>OPTIONS</th>

                  </tr>" ;

      if (isset($_POST['submit_search'])) {
        $Search = mysqli_real_escape_string($conn,$_POST['Search']);
        $sql = "SELECT * FROM produits WHERE titre LIKE '%$Search%' OR description LIKE '%$Search%' OR prix
        LIKE '%$Search%' or id_pro LIKE '%$Search%'or code LIKE '%$Search%' ";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);
        if ($queryResult > 0){
            while ($row = mysqli_fetch_assoc($result)) {

                include("table_pro.php"); 
            }
        }else {
           echo "no records " ;
        }
      }else{
  
   $sql="SELECT * FROM produits where id_cat=3" ;
      $result = mysqli_query($conn,$sql);
          if (mysqli_num_rows($result)>0 ) {
          while ($row = mysqli_fetch_assoc($result)) {

      include("table_pro.php");        

 

    
}
}}

    echo "         
            </table>
          </div>
        </div>
      </div>";
  

   break;


   case 'add':
    include ("insert_pro.php");

     break;
      case 'client';
  echo"
<div class='container'>
                    <h2 class='mbr-section-title form-title mbr-fonts-style display-5 mt-2'>
                        |Nos Clients
                    </h2>
                    <hr>                
                

  <div class='site-section'>
   
       
  <div class='site-blocks-table'>
  <table class='table' >
      <tr>
                    <th >ID</th>
                    <th >NOM</th>
                    <th >PRENOM</th>
                    <th >E-MAIL</th>
                    <th >MOT DE PASSE</th>
                    <th >TELEPHONE</th>
                    <th >OPTIONS</th>
                    

                  </tr>" ;
  
   $sql="SELECT * FROM client" ;
      $result = mysqli_query($conn,$sql);
          if (mysqli_num_rows($result)>0 ) {
          while ($row = mysqli_fetch_assoc($result)) {
            ?>

                      <tr>
            
                    <td><?php echo $row['id']; ?></td> 
                    <td><?php echo $row['nom']; ?></td>
                      
                   
                    <td><?php echo $row['pnom']; ?></td>
                    <td><?php echo $row['mail']; ?></td>
                    <td> <?php echo $row['password']; ?> </td>
                    <td> <?php echo $row['telephone']; ?> </td>
                    <td><a href='admin.php?action=id&delete_client=<?php echo $row['id']; ?>'>Supprimer</a><br>
                     
                    </td>

            </tr>
         
<?php
}}

    echo "         
            </table>
          </div>
        </div>
     </div>";
  

   break;
  
    case 'pro_edit':
    include ("update_pro.php");

     break;
  default:
    
    break;
}
?>
  
</div>

  </div>

  


</body>
</html>

