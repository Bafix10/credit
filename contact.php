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
  <!--<div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="#" /></div>
  </div>-->
  <!-- end loader -->
  <!-- header -->
  <header>
    <!-- header inner -->
 
      <?php include ("header.php");?>
     <!-- end header inner -->

     <!-- end header -->


</header>

<div class="backgro_mh">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="heding">
           <h2>Contact us</h2
		 <?Php  
		$Nom = "ZIBO";
		$prenom = "Oumorou";
		$Email = "2021-06-17 11:00";

		// $req = $db -> prepare ("insert into clients (noms, prenoms,date_inscription) Values (?,?,?)");
		// $req -> execute (array ($noms,
                        // $prenoms,
	                 // $date_inscription,
	 // ));
	 ?>	   
        </div>
		     
			<form action="formulaire_encro.php" method="Post" >
					<label for="a1"> Nom </label>
					  <input id="a1" type= "text" required="required" name="nom"/> <br/><br/>
					<label for="a2"> prénom </label>
					 <input id="a2" type= "text" required="required" name="prenom"/> <br/><br/>
					<!--label for="a3"> sexe </label><select id="a3"  name="sexe"/><br/><br/>
										 <option value="feminin"> Féminin </option><br/><br/>
										<option value="masculin"> Masclin </option!--><br/><br/>
				<label for="a4"> Email </label><input id="a4" type="mail" name="email"> <br/><br/>
				<br/><br/><input type="submit" value="envoyer"/>
				
      </div>
    </div>
  </div>
</div>

    <!--  footer -->
    <!--?php include("footer.php");?!-->
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