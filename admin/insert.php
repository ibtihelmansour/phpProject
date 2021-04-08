
  <div class="container ">
    
                  
                    <h2 class="mbr-section-title form-title mbr-fonts-style display-5 mt-2">
                        |Ajouter un produit
                    </h2>
                    <hr>
            
  <form method="POST" action="admin.php">
              <div class="form-group row mt-5">
                
                <div class="col-md-4">
                  <label for="titre" class="text-black">Titre</label>
                  <input type="text" class="form-control"  name="titre"  id="titre" required>
                </div>
                <div class="col-md-4">
                  <label for="desc" class="text-black">Description</label>
                  <input type="text" class="form-control"  name="desc"  id="desc" required>
                </div>
                
              </div>
                 <div class="form-group row">
                <div class="col-md-4">
                <label for="prix" class="text-black">Prix</label>
                  <input type="text" class="form-control"  name="prix" id="prix" required>
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
                    echo " <option value=$cat_id>$cat_nom</option>" ;

                  }
                  ?>  
                </select>

                </div>
                <div class="col-md-4">
                  <label for="phone " class="text-black">Code </label>
                   <input type="text" class="form-control"  name="code" id="code" required>
                </div>

              </div>
               <div class="form-group row mb-5">
                <div class="col-md-4">
                   <label for="Image1" class="text-black">Image 1 </label>
                      <input type="file" class="form-control"  name="Image1" id="Image1"  required>
                </div>
                <div class="col-md-4">
                  <label for="Image2" class="text-black">Image 2 </label>
                   <input type="file" class="form-control"  name="Image2" id="Image2" required>
                </div>

              </div>
               <div class="form-group row mb-5">
                <div class="col-md-4">
                   <label for="Image3" class="text-black">Image 3 </label>
                      <input type="file" class="form-control"  name="Image3" id="Image3"  required>
                </div>
                <div class="col-md-4">
                  <label for="Image4 " class="text-black">Image 4</label>
                   <input type="file" class="form-control"  name="Image4" id="Image4" required>
                </div>

              </div>
             <div class="form-group row">
                <div class="col-md-4">
                <label for="Image5" class="text-black">Image 5</label>
                  <input type="file" class="form-control"  name="Image5" id="Image5" required>
                </div>
              </div>
                <span class="input-group-btn">
                <button href="" type="submit" name="insert" id="insert" class="btn btn-form btn-success display-4" style="border-radius: 3rem" >Submit
                </button>
              </span>
            
          </form>
         </div>

