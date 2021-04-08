<?php
 include ("includes/template/header.php");
 ?>



<div class="site-section">
      <div class="container">
        <div class="row mb-5">
                 <div class='site-blocks-table'>
<table class='table table-bordered' >
             
                     <thead>
                  <tr>
                    <th class='product-thumbnail'>ID</th>
                    <th class='product-name'>TITRE</th>
                    <th class='product-price'>DESCRIPTION</th>
                    <th class='product-quantity'>PRIX</th>
                    <th class='product-total'>CODE</th>
                    <th class='product-remove'>LES IMAGES</th>
                    <th class='product-remove'>OPTIONS</th>

                  </tr>
                </thead>

<tbody>
                  <tr>
                    <td><?php echo $row['id_pro']; ?></td> 
                    <td><?php echo $row['titre']; ?></td>
                      
                   
                    <td><?php echo $row['description']; ?></td>
                    <td><?php echo $row['prix']; ?></td>
                    <td> <?php echo $row['code']; ?> </td>

                   
                    <td><button  onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button></td>

                    <td><a href="">Supprimer</a><br>
                    	<a href="">Modifier</a>
                    </td>

                  </tr>

             
                </tbody>
            </table>
           </div>
           </div>
           </div>
           </div> 
          



<div id="id01" class="modal">
  
  <form class="modal-content animate" action="admin.php" method="post" style="width: 100% ; height:300%">
    <div class="">

      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
     

      <div class="row">

      <img src="<?php echo $row['image']; ?>" alt="">
      <img src='<?php echo $row['image2']; ?>' alt="">
      <img src='<?php echo $row['image3']; ?>' alt="">
       <img src='<?php echo $row['image4']; ?>' alt="">
       <img src='<?php echo $row['image5']; ?>' alt="">
    </div>
</div>
  

   

   
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
