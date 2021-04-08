
   <style>
table {
 
 border-collapse: collapse;
  border-spacing: 1;*/
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
   padding: 8px;
  width: 20px !important ; 
  height: 20px !important ;
}

tr:nth-child(even){background-color: #f2f2f2}
</style> 

 
               
              <tr>
            
                    <td><?php echo $row['id_pro']; ?></td> 
                    <td><?php echo $row['titre']; ?></td>
                      
                   
                    <td><?php echo $row['description']; ?></td>
                    <td><?php echo $row['prix']; ?></td>
                    <td> <?php echo $row['code']; ?> </td>

                   
                    <td><img src="<?php echo $row['image']; ?>" style="width: 120px ; height: 120px ;">

                    </td>

                    <td><a href='dashboard.php?action=pro_id&delete_pro=<?php echo $row['id_pro']; ?>'>Supprimer</a><br>
                      <a href='dashboard.php?action=pro_edit&update_pro=<?php echo $row['id_pro']; ?>'>Modifier</a>
                    </td>

            </tr>


 