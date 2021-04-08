 <?php  
 session_start();  
   include ("connect.php")  ; 

 if(isset($_POST["username"]))  
 {  
      $query = " SELECT * FROM client WHERE  nom= '".$_POST["username"]."'  AND password = '".$_POST["pass"]."'  ";  
      $result = mysqli_query($conn, $query);  
     if ($result)
      {  
           $_SESSION['username'] = $_POST['username'];  
           echo 'Yes';  
      }  
      else  
      {  
           echo 'No';  
      }  
 }  
 if(isset($_POST["action"]))  
 {    
  var_dump($_POST) ;
      unset($_SESSION["username"]);  
 }  
 ?>  
  