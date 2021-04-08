<?php 
   session_start();
    include ("connect.php")  ;
   $nom =$_POST['nom'];
    $pnom =$_POST['pnom'];
    $mail=$_POST['mail'];
    $phone =$_POST['phone'];
    $password =$_POST['password'];
    $sql = "SELECT * FROM client where nom = '$nom'";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows ($result) ;
    if ($num ==1) {
        echo "username already Taken ";
    }else {
        $reg = " insert into client (nom , pnom , mail , password , telephone ) values ('$nom', '$pnom' , '$mail', '$password','$phone') ";
        mysqli_query ($conn, $reg) ; 
        echo "registration successful" ;
    }
    ?>
