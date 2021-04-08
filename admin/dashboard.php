<?php 
session_start();
include ("connect.php");
    //delete produit 
      if(isset($_GET['delete_pro'])){
        $delete_pro = mysqli_query($conn , "DELETE FROM produits WHERE id_pro='$_GET[delete_pro]'");
        if ($delete_pro) {
          echo " <script> alert('suppression a effectuée avec succés!') </script> "; 
          echo " <script> window.open('dashboard.php?action=pro', '_self') </script> ";
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
          //echo " <script> window.open('admin.php?action=client', '_self') </script> ";
        }
      }
?>


  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <style type="text/css">
    .container {
      padding: 80px 0 ;
    }
  </style>

 
</head>

<body class="sidebar-menu-collapsed">
  <div class="se-pre-con"></div>
<section>
  <!-- sidebar menu start -->
  <div class="sidebar-menu sticky-sidebar-menu">

    <!-- logo start -->
    <div class="logo">
      <h6><a href="index.php">collective</a></h6>
    </div>

  <!-- if logo is image enable this -->
    <!-- image logo --
    <div class="logo">
      <a href="index.html">
        <img src="image-path" alt="Your logo" title="Your logo" class="img-fluid" style="height:35px;" />
      </a>
    </div-->
    

    <div class="sidebar-menu-inner">

      <!-- sidebar nav start -->
      <ul class="nav nav-pills nav-stacked custom-nav">
        <li class="active"><a href="dashboard.php?action=dash"><i class="fa fa-tachometer"></i><span> Dashboard</span></a>
        </li>
        <li class="menu-list">
          <a href="#"><i class="fa fa-table"></i>
            <span>Listes <i class="lnr lnr-chevron-right"></i></span></a>
          <ul class="sub-menu-list">
            <li><a href="dashboard.php?action=pro">Listes vetements </a> </li>
            <li><a href="dashboard.php?action=shoes">Listes chaussures</a> </li>
            <li><a href="dashboard.php?action=client">Listes Clients</a></li>
            <li><a href="dashboard.php?action=pro">Listes Catégories </a></li>
          </ul>
        </li>
        <li><a href="dashboard.php?action=add"><i class="fa fa-file-text"></i> <span>Ajouter produit </span></a></li>
        <li><a href="#"><i class="fa fa-cogs"></i> <span>Ajouter Catégorie</span></a></li>
        
      </ul>
      <!-- //sidebar nav end -->
      <!-- toggle button start -->
      <a class="toggle-btn">
        <i class="fa fa-angle-double-left menu-collapsed__left"><span>Collapse Sidebar</span></i>
        <i class="fa fa-angle-double-right menu-collapsed__right"></i>
      </a>
      <!-- //toggle button end -->
    </div>
  </div>
  <!-- //sidebar menu end -->
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
        <div class='container' style='padding :80px 0 ;'>
                    <h2 class='mbr-section-title form-title mbr-fonts-style display-5 mt-2'>
                        |Nos Chaussures
                    </h2>
                         <div class='search-box' >
                    <form action='dashboard.php?action=shoes' method='post'>
                   <input class='search-input' placeholder='Recherche...' type='search' id='search' name='Search'>
                 
                    </form>
                    </div>
                                   
                

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
     if (isset($_POST['Search'])) {
        $Search = mysqli_real_escape_string($conn,$_POST['Search']);
        $sql = "SELECT * FROM produits WHERE titre LIKE '%$Search%' OR prix LIKE '%$Search%' OR code
        LIKE '%$Search%' or description  LIKE '%$Search%' or id_pro  LIKE '%$Search%' and id_cat in (5 , 6) ";
         $result = mysqli_query($conn,$sql);
          if (mysqli_num_rows($result)>0 ) {
          while ($row = mysqli_fetch_assoc($result)) {
            
            include("table_pro.php");  

          }
        } else {
          echo " <h2 style='color: red; '> ooopps! recherche introuvable </h2> ";
        }
        }else {
 $sql="SELECT * FROM produits where id_cat in (5 , 6)" ;
      $result = mysqli_query($conn,$sql);
          if (mysqli_num_rows($result)>0 ) {
          while ($row = mysqli_fetch_assoc($result)) {

             

  include("table_pro.php");

}}}

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
                        <div class='search-box' >
                    <form action='dashboard.php?action=pro' method='post'>
                   <input class='search-input' placeholder='Recherche...' type='search' id='search' name='Search'>
                 
                    </form>
                    </div>
                                   
                

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
       if (isset($_POST['Search'])) {
        $Search = mysqli_real_escape_string($conn,$_POST['Search']);
        $sql = "SELECT * FROM produits WHERE titre LIKE '%$Search%' OR prix LIKE '%$Search%' OR code
        LIKE '%$Search%' or description  LIKE '%$Search%' or id_pro  LIKE '%$Search%' and id_cat=3  ";
         $result = mysqli_query($conn,$sql);
          if (mysqli_num_rows($result)>0 ) {
          while ($row = mysqli_fetch_assoc($result)) {
            
            include("table_pro.php");  

          }
        } else {
          echo " <h2 style='color: red; '> ooopps! recherche introuvable </h2> ";
        }
        }else {
   
  
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
                    <h2 class='mbr-section-title form-title mbr-fonts-style display-5 mt-2' >
                        |Nos Clients
                    </h2>
                     <div class='search-box' >
                    <form action='dashboard.php?action=client' method='post'>
                   <input class='search-input' placeholder='Recherche...' type='search' id='search' name='Search'>
                 
                    </form>
                    </div>
                                  
                

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
                    

                  </tr>
                  " ;
      if (isset($_POST['Search'])) {
        $Search = mysqli_real_escape_string($conn,$_POST['Search']);
        $sql = "SELECT * FROM client WHERE nom LIKE '%$Search%' OR pnom LIKE '%$Search%' OR mail
        LIKE '%$Search%' or telephone LIKE '%$Search%' ";
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
                    <td><a href='dashboard.php?action=id&delete_client=<?php echo $row['id']; ?>'>Supprimer</a><br>
                     
                    </td>

            </tr>
    <?php

     }}}else {
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
                    <td><a href='dashboard.php?action=id&delete_client=<?php echo $row['id']; ?>'>Supprimer</a><br>
                     
                    </td>

            </tr>
         
<?php
}}}

    echo "         
            </table>
          </div>
        </div>
     </div>";
  

   break;
  
    case 'pro_edit':
    include ("update_pro.php");

     break;
 case 'dash':
 ?>
     <div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      </ol>
    </nav>
    <!--div class="welcome-msg pt-3 pb-4">
      <h1>Hi <span class="text-primary">John</span>, Welcome back</h1>
      <p>Very detailed & featured admin.</p>
    </div-->

    <!-- statistics data -->
    <div class="statistics">
      <div class="row">
        <div class="col-xl-6 pr-xl-2">
          <div class="row">
            <div class="col-sm-6 pr-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-4">
                <i class="lnr lnr-users"> </i>
                <?php

                 $sql="SELECT count(id) as user FROM client " ;
                 $result = mysqli_query($conn,$sql);
                 $values = mysqli_fetch_assoc($result);
                 $users = $values['user'];
                 echo 
                "<h3 class='text-primary number'>$users</h3>";
            
                 ?>
                <p class="stat-text">Nos Clients </p>
              </div>
            </div>
            <div class="col-sm-6 pl-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-4">
                <i class="lnr lnr-shirt"></i>
                <?php

                 $sql1="SELECT count(id_pro) as pro FROM produits where id_cat not in (5,6) " ;
                 $result = mysqli_query($conn,$sql1);
                 $values = mysqli_fetch_assoc($result);
                 $pro_tot = $values['pro'];
                 echo "<h3 class='text-secondary number'>$pro_tot articles</h3>";
                ?>
                <p class="stat-text">Nos articles</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 pl-xl-2">
          <div class="row">
            <div class="col-sm-6 pr-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-4">
                <i class="lnr lnr-paw"> </i>
                   <?php

                 $sql1="SELECT count(id_pro) as pro FROM produits where id_cat in (5, 6) " ;
                 $result = mysqli_query($conn,$sql1);
                 $values = mysqli_fetch_assoc($result);
                 $pro_tot = $values['pro'];
                 echo
                "<h3 class='text-success number'>$pro_tot articles</h3>" ;
                ?>
                <p class="stat-text">Nos chaussures</p>
              </div>
            </div>
            <div class="col-sm-6 pl-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-4">
                <i class="lnr lnr-magic-wand"> </i>
                   <?php

                 $sql1="SELECT count(id_cat) as cat FROM categorie " ;
                 $result = mysqli_query($conn,$sql1);
                 $values = mysqli_fetch_assoc($result);
                 $cat_tot = $values['cat'];
                 echo "
                <h3 class='text-danger number'>$cat_tot</h3>" ;
                ?>
                <p class="stat-text">Nos catégories</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- //statistics data -->

    <!-- charts -->
    <div class="chart">
      <div class="row">
        <div class="col-lg-6 pr-lg-2 chart-grid">
          <div class="card text-center card_border">
            <div class="card-header chart-grid__header">
              Bar Chart
            </div>
            <div class="card-body">
              <!-- bar chart -->
              <div id="container">
                <canvas id="barchart"></canvas>
              </div>
              <!-- //bar chart -->
            </div>
            <div class="card-footer text-muted chart-grid__footer">
              Updated 2 hours ago
            </div>
          </div>
        </div>
        <div class="col-lg-6 pl-lg-2 chart-grid">
          <div class="card text-center card_border">
            <div class="card-header chart-grid__header">
              Line Chart
            </div>
            <div class="card-body">
              <!-- line chart -->
              <div id="container">
                <canvas id="linechart"></canvas>
              </div>
              <!-- //line chart -->
            </div>
            <div class="card-footer text-muted chart-grid__footer">
              Updated just now
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- //content -->
</div>
<?php 
break ; 

  default:
    
    break;
}
?>
  
</div>

  </div>

  













  <!-- header-starts -->
  <div class="header sticky-header">

    <!-- notification menu start -->
    <div class="menu-right">
      <div class="navbar user-panel-top">
       
        <div class="user-dropdown-details d-flex">
          <div class="profile_details_left">
            <ul class="nofitications-dropdown">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                    class="fa fa-bell-o"></i><span class="badge blue">3</span></a>
                <ul class="dropdown-menu">
                  <li>
                    <div class="notification_header">
                      <h3>You have 3 new notifications</h3>
                    </div>
                  </li>
                  <li><a href="#" class="grid">
                      <div class="user_img"><img src="assets/images/avatar1.jpg" alt=""></div>
                      <div class="notification_desc">
                        <p>Johnson purchased template</p>
                        <span>Just Now</span>
                      </div>
                    </a></li>
                  <li class="odd"><a href="#" class="grid">
                      <div class="user_img"><img src="assets/images/avatar2.jpg" alt=""></div>
                      <div class="notification_desc">
                        <p>New customer registered </p>
                        <span>1 hour ago</span>
                      </div>
                    </a></li>
                  <li><a href="#" class="grid">
                      <div class="user_img"><img src="assets/images/avatar3.jpg" alt=""></div>
                      <div class="notification_desc">
                        <p>Lorem ipsum dolor sit amet </p>
                        <span>2 hours ago</span>
                      </div>
                    </a></li>
                  <li>
                    <div class="notification_bottom">
                      <a href="#all" class="bg-primary">See all notifications</a>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                    class="fa fa-comment-o"></i><span class="badge blue">4</span></a>
                <ul class="dropdown-menu">
                  <li>
                    <div class="notification_header">
                      <h3>You have 4 new messages</h3>
                    </div>
                  </li>
                  <li><a href="#" class="grid">
                      <div class="user_img"><img src="assets/images/avatar1.jpg" alt=""></div>
                      <div class="notification_desc">
                        <p>Johnson purchased template</p>
                        <span>Just Now</span>
                      </div>
                    </a></li>
                  <li class="odd"><a href="#" class="grid">
                      <div class="user_img"><img src="assets/images/avatar2.jpg" alt=""></div>
                      <div class="notification_desc">
                        <p>New customer registered </p>
                        <span>1 hour ago</span>
                      </div>
                    </a></li>
                  <li><a href="#" class="grid">
                      <div class="user_img"><img src="assets/images/avatar3.jpg" alt=""></div>
                      <div class="notification_desc">
                        <p>Lorem ipsum dolor sit amet </p>
                        <span>2 hours ago</span>
                      </div>
                    </a></li>
                  <li><a href="#" class="grid">
                      <div class="user_img"><img src="assets/images/avatar1.jpg" alt=""></div>
                      <div class="notification_desc">
                        <p>Johnson purchased template</p>
                        <span>Just Now</span>
                      </div>
                    </a></li>
                  <li>
                    <div class="notification_bottom">
                      <a href="#all" class="bg-primary">See all messages</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="profile_details">
            <ul>
              <li class="dropdown profile_details_drop">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="dropdownMenu3" aria-haspopup="true"
                  aria-expanded="false">
                  <div class="profile_img">
                    <img src="assets/images/profileimg.jpg" class="rounded-circle" alt="" />
                    <div class="user-active">
                      <span></span>
                    </div>
                  </div>
                </a>
                <ul class="dropdown-menu drp-mnu" aria-labelledby="dropdownMenu3">
                  <li class="user-info">
                    <h5 class="user-name">John Deo</h5>
                    <span class="status ml-2">Available</span>
                  </li>
                  <li> <a href="#"><i class="lnr lnr-user"></i>My Profile</a> </li>
                  <li> <a href="#"><i class="lnr lnr-users"></i>1k Followers</a> </li>
                  <li> <a href="#"><i class="lnr lnr-cog"></i>Setting</a> </li>
                  <li> <a href="#"><i class="lnr lnr-heart"></i>100 Likes</a> </li>
                  <li class="logout"> <a href="#sign-up.html"><i class="fa fa-power-off"></i> Logout</a> </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--notification menu end -->
  </div>
  <!-- //header-ends -->
  <!-- main content start -->




  <!-- //content -->
</div>
<!-- main content end-->
</section>

<!-- move top -->
<button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
  <span class="fa fa-angle-up"></span>
</button>
<script>
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function () {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("movetop").style.display = "block";
    } else {
      document.getElementById("movetop").style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>
<!-- /move top -->


<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/jquery-1.10.2.min.js"></script>

<!-- chart js -->
<script src="assets/js/Chart.min.js"></script>
<script src="assets/js/utils.js"></script>
<!-- //chart js -->

<!-- Different scripts of charts.  Ex.Barchart, Linechart -->
<script src="assets/js/bar.js"></script>
<script src="assets/js/linechart.js"></script>
<!-- //Different scripts of charts.  Ex.Barchart, Linechart -->


<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/scripts.js"></script>

<!-- close script -->
<script>
  var closebtns = document.getElementsByClassName("close-grid");
  var i;

  for (i = 0; i < closebtns.length; i++) {
    closebtns[i].addEventListener("click", function () {
      this.parentElement.style.display = 'none';
    });
  }
</script>
<!-- //close script -->

<!-- disable body scroll when navbar is in active -->
<script>
  $(function () {
    $('.sidebar-menu-collapsed').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll when navbar is in active -->

 <!-- loading-gif Js -->
 <script src="assets/js/modernizr.js"></script>
 <script>
     $(window).load(function () {
         // Animate loader off screen
         $(".se-pre-con").fadeOut("slow");;
     });
 </script>
 <!--// loading-gif Js -->

<!-- Bootstrap Core JavaScript -->
<script src="assets/js/bootstrap.min.js"></script>

</body>

</html>
  