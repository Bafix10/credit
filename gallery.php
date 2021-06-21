<!DOCTYPE html>
<html lang="en">

<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>Entro</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- fevicon -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="css/responsive.css">  
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout contineer_page">
  <!-- loader  -->
  <div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="#" /></div>
  </div>
  <!-- end loader -->
  <!-- header -->
  <header>
    <!-- header inner -->
   
      <?<?php include ("header.php");?>
     <!-- end header inner -->

     <!-- end header -->
    
</header>


<div class="backgro_mh">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="heding">
           <h2>Nos Formations</h2>
        </div>
      </div>
    </div>
  </div>
</div>


<div id="gallery" class="Gallery">
  <div class="container"> 
    <div class="row display_boxflex">
      <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
        <div class="row">
		
		<?php include("tab.php");
		$a=count($tab);
	for ($i=0; $i<$a; $i++){?>
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margi_bott">
            <div class="Gallery_img">
              <figure><img src="<?php echo $tab [$i]["Image"];?>" alt="#"/></figure>
            </div>
            <div class="hover_box">
             
              <ul class="icon_hu">
                 <h3><?php echo $tab [$i]["Titre"];?></h3>
                <li><a href="#"><img src="icon/h.png" alt="#"/></a></li>
                 <li><a href="#"><img src="icon/h.png" alt="#"/></a></li>
              </ul>
            </div>
          </div>
          <?php 
		}
		  ?>
          
          
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
        <div class="Gallery_text">
          <div class="titlepage">
            <h2>Gallery</h2>
          </div>
          <p>
Il y a un millier de façons d’apprendre le web, la nôtre fonctionne depuis plus de 10 ans.

<br/>Le cursus du bachelor s’étale sur 3 années en formation initiale et en alternance au cours desquelles vous deviendrez concepteur - développeur de solutions digitales, c’est à dire un expert des technologies de l’internet.

A l’issue de ce cursus, vous aurez le choix entre rejoindre le monde du travail ou poursuivre avec un mastère spécialisé à Hetic (Mastère CTO & Lead Tech, Mastère Marketing Digital & UX ou Mastère Big Data & Intelligence Artificielle).

Fort de l’apprentissage en profondeur de huit unités de compétences, des fondamentaux de la programmation à l’UX/UI au développement front et backend en passant par la gestion de projet en équipe et les devops, vous deviendrez un professionnel polyvalent, critique, autonome, capable de travailler en équipe et de développer votre propre regard sur les technologies numériques.

Ce cursus s'adresse aussi bien aux futurs développeurs web et mobile qu'aux futurs webdesigners à la recherche de compétences techniques reconnues et solides.
</p>
<p>

Compétences acquises

   <br/> Maîtrise des architectures et des solutions de développement en Front et en Back 
   <br/> Maitrise des méthodes et approches de gestion du cycle de vie d’une solution logiciel
   <br/> Maitrise des solutions cloud, containerisation et virtualisation
   <br/> Maitrise des enjeux d’UX et de design 
    <br/>Maitrise des outils et des méthodologies de gestion d’équipes et de projets,
    <br/>Maitrise des enjeux de qualité du code et des livrables
    <br/>Conception, développement, maintenance et déploiement de solutions numériques

          <a href="Javascript:void(0)">En savoir plus</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- end Gallery --> 




    <!--  footer -->
    <?php include("footer.php");?>
          <!-- end footer -->
          <!-- Javascript files-->
          <script src="js/jquery.min.js"></script>
          <script src="js/popper.min.js"></script>
          <script src="js/bootstrap.bundle.min.js"></script>
          <script src="js/jquery-3.0.0.min.js"></script>
          <script src="js/plugin.js"></script>
          <!-- sidebar -->
          <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
          <script src="js/custom.js"></script>
          <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>




</body>

</html>