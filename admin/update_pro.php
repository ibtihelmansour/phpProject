<?php
 include ("connect.php");
 include ("includes/template/header.php");
$edit_pro = mysqli_query($conn , "select * from produits where id_pro= '$_GET[update_pro]'");
$fetch_edit = mysqli_fetch_array($edit_pro);
?>





  <div class="container ">
                    <h2 class="mbr-section-title form-title mbr-fonts-style display-5 mt-2">
                        |Modifier un produit
                    </h2>
                    <hr>
            
  <form method="POST" action="dashboard.php">
              <div class="form-group row mt-5">
                
                <div class="col-md-4">
                  <label for="titre" class="text-black">Titre</label>
                  <input type="text" class="form-control"  name="titre"  id="titre"  value="<?php echo $fetch_edit['titre']; ?>" required>
                </div>
                <div class="col-md-4">
                  <label for="desc" class="text-black">Description</label>
                  <input type="text" class="form-control"  name="desc"  id="desc" value="<?php echo $fetch_edit['description']; ?>" required>
                </div>
                
              </div>
                 <div class="form-group row">
                <div class="col-md-4">
                <label for="prix" class="text-black">Prix</label>
                  <input type="text" class="form-control"  name="prix" id="prix"  value="<?php echo $fetch_edit['prix']; ?>" required>
                </div>
              </div>

              <div class="form-group row mb-5">
                <div class="col-md-4">
                   <label for="password" class="text-black">categorie </label>
                <select id="categorie" name="categorie" class="form-control">
                  <option value="1">Choisir une catégorie</option>    
                  <?php
                  $get_cats ="SELECT * FROM categorie ";
                  $run_cats = mysqli_query($conn , $get_cats);
                  while ($row_cats=mysqli_fetch_array($run_cats)){
                    $cat_id=$row_cats['id_cat'] ;
                    $cat_nom=$row_cats['nom_cat'] ;

                    if ($fetch_edit['id_cat'] == $cat_id ){
                    echo " <option value='$fetch_edit[id_cat]' selected>$cat_nom</option>" ;

                  }else {
                     echo " <option value=$cat_id>$cat_nom</option>" ;
                  }
                }
                  ?>  
                </select>

                </div>
                <div class="col-md-4">
                  <label for="phone " class="text-black">Code </label>
  <input type="text" class="form-control"  name="code" id="code" value="<?php echo $fetch_edit['code']; ?>" required >
                </div>

              </div>
               <div class="form-group row mb-5">
                <div class="col-md-4">
                   <label for="Image1" class="text-black">Image 1 </label>
                      <input type="file" class="form-control"  name="Image1" id="Image1"  required>
                      <div class="edit_img">
                        <img src="<?php echo $fetch_edit['image']; ?>" style="width: 100px ; height: 90px ;">
                        
                      </div>
                </div>
                <div class="col-md-4">
                  <label for="Image2" class="text-black">Image 2 </label>
                   <input type="file" class="form-control"  name="Image2" id="Image2" value="<?php echo $fetch_edit['image']; ?>" required >
                    <div class="edit_img">
                        <img src="<?php echo $fetch_edit['image2']; ?>" style="width: 100px ; height: 90px ;">
                        
                      </div>
                </div>

              </div>
               <div class="form-group row mb-5">
                <div class="col-md-4">
                   <label for="Image3" class="text-black">Image 3 </label>
                      <input type="file" class="form-control"  name="Image3" id="Image3"  required>
                       <div class="edit_img">
                        <img src="<?php echo $fetch_edit['image3']; ?>" style="width: 100px ; height: 90px ;">
                        
                      </div>
                </div>
                <div class="col-md-4">
                  <label for="Image4 " class="text-black">Image 4</label>
                   <input type="file" class="form-control"  name="Image4" id="Image4" required>
                    <div class="edit_img">
                        <img src="<?php echo $fetch_edit['image4']; ?>" style="width: 100px ; height: 90px ;">
                        
                      </div>
                </div>

              </div>
             <div class="form-group row">
                <div class="col-md-4">
                <label for="Image5" class="text-black">Image 5</label>
                  <input type="file" class="form-control"  name="Image5" id="Image5" required>
                   <div class="edit_img">
                        <img src="<?php echo $fetch_edit['image5']; ?>" style="width: 100px ; height: 90px ;">
                        
                      </div>
                </div>
              </div>
                <span class="input-group-btn">
                <button href="" type="submit" name="insert" id="insert" class="btn btn-form btn-success display-4" style="border-radius: 3rem" >Modifier 
                </button>
              </span>
            
          </form>
         </div>

