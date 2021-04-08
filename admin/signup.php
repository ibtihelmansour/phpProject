<?php
    session_start();
    include ("connect.php")  ;
    include ("includes/template/header.php");
    include ("includes/template/navbar.php");
  
 
    ?>
   <?php
   
   
   if (isset($_POST['register'])) {
    $nom =     $_POST['nom'];
    $pnom =    $_POST['pnom'];
    $mail=     $_POST['mail'];
    $phone =   $_POST['phone'];
    $password  = sha1($_POST['password']);
    $sql = " INSERT into `client` (`nom` , `pnom` , `mail` , `password` , `telephone` ) values  ('$nom', '$pnom' , '$mail', '$password','$phone')";
   $result = mysqli_query($conn, $sql);
   
    if ($result){

    echo " <script> alert('success !') ;</script>" ;
    }else 
    {
        echo 'there were erros .........';
    }
    //mysqli_free_result($result);
   

}
?>


<section class="form4 cid-raTI7nYObn" id="form4-1" style="background-image: url('layout/images/about_1.jpg'); ">

    

    
    <div class="container" >
        
        
        
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 form-wrapper" data-form-type="formoid">            
                <div class="form-head">
                    <h3 class="mbr-section-subtitle form-subtitle mbr-fonts-style align-center pb-3 display-4">
                       INSCRIPTION FORM
                    </h3>
                    <h2 class="mbr-section-title form-title mbr-fonts-style align-center display-5">
                        S'inscrire maintenant 
                    </h2>
                </div>
               
            <div class="p-3 p-lg-5 " style="background: rgba(211 , 211, 211 ,0.5);">
   <form method="POST" action="signup.php">
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="nom" class="text-black">Nom <span style="color: red">*</span></label>
                  <input type="text" class="form-control"  name="nom"  id="nom" required>
                </div>
                <div class="col-md-6">
                  <label for="pnom" class="text-black">Prénom <span style="color: red">*</span></label>
                  <input type="text" class="form-control"  name="pnom" id="pnom" required>
                </div>
              </div>
                 <div class="form-group row">
                <div class="col-md-12">
                <label for="mail" class="text-black">Adresse Email <span style="color: red">*</span></label>
                  <input type="text" class="form-control"  name="mail" id="mail" required>
                </div>
              </div>

              <div class="form-group row mb-5">
                <div class="col-md-6">
                   <label for="password" class="text-black">Mot de passe <span style="color: red">*</span></label>
                      <input type="password" class="form-control"  name="password" id="password" placeholder="Mot de passe" required>
                </div>
                <div class="col-md-6">
                  <label for="phone " class="text-black">Télephone <span style="color: red">*</span></label>
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="Numéro de Télephone" required>
                </div>

              </div>
                <span class="input-group-btn">
                <button href="" type="submit" name="register" id="register" class="btn btn-form btn-success display-4" style="border-radius: 3rem" >Inscription
                </button>
              </span>
            
    </form>

              <div class="form-group">
                <label  class="text-black" data-toggle="collapse" href="#create_an_account" role="button" aria-expanded="false" aria-controls="create_an_account"><input type="checkbox" value="1" id="c_create_account"> j'ai déjà un compte </label>
                <div class="collapse" id="create_an_account">
                  <div class="py-2">
                  
                     <form method="POST" action="index.php">
                     <div class="form-group">
                      <label for="username" class="text-black">Adresse e-mail</label>
                      <input type="text" class="form-control" id="username" name="username" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="password" class="text-black">Mot de passe </label>
                      <input type="password" class="form-control" id="pass" name="pass" placeholder="">
                    </div>
                       <span class="input-group-btn">
                      <button href="" type="submit" name="login_button" id="login_button" class="btn btn-form btn-success display-4" style="border-radius: 3rem">Connexion</button>
                    </span>
                   </form> 

                   
                  </div>
                </div>
              </div>


            

            </div>
          </div>
            </div>
        </div>
   </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<!--script type="text/javascript">
    $(function(){
      alert("ggggggggggg");
        $('#register').click(function(e){


            var valid = this.form.checkValidity();

            if(valid){


            var nom1  = $('#nom').val();
            var pnom1    = $('#pnom').val();
            var mail1       = $('#mail').val();
            var phone1 = $('#phone').val();
            var password1    = $('#password').val();
            

                e.preventDefault(); 

                $.ajax({
                    type: 'POST',
                    url: 'process.php',
                    data: {nom1: nom,pnom1: pnom,mail1: mail,phone1: phone,password1: password},
                    success: function(data){
                    Swal.fire({
                                 icon : 'success',
                                'title': 'Successful',
                                'text': data,
                                'type': 'success'
                                })
                            
                    },
                    error: function(data){
                        Swal.fire({
                                'title': 'Errors',
                                'text': 'There were errors while saving the data.',
                                'type': 'error'
                                })
                    }
                });

                
            }else{
                
            }

            



        });     

        
    });
    
</script-->
 <script>  
 $(document).ready(function(){
  
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
      $('#login_button').click(function(){  
           var username = $('#username').val();  
           var pass = $('#pass').val();  
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
                               //$('#loginModal').hide();  
                               location.reload();

                                Swal.fire({
                                 icon : 'success',
                                'title': 'Successful',
                                'text': data,
                                'type': 'success'
                                })  
                          }  
                     }  
                });  
           }  
           else  
           {  
                alert("Both Fields are required");  
           }  
      });  

 });  
 </script>  

<?php
   
    include ("includes/template/footer.php");
  
   
    ?>