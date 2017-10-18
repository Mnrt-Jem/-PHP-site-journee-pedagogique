<?php  
	include'database.php';
    session_start();
	if (!isset($_SESSION['login'])) 
	{
	  	header("location: login.php");
	}

	if(!empty($_POST)) 
    {

        $nomEmploye         = checkInput($_POST['nom_employe']);
        $prenomEmploye      = checkInput($_POST['prenom_employe']);
        $agenceEmploye      = checkInput($_POST['agence_employe']);
        $serviceEmploye     = checkInput($_POST['service_employe']);
        $succes 			= true;

    }
    if (empty($nomEmploye) && empty($prenomEmploye) && empty($agenceEmploye) && empty($serviceEmploye)) 
    {
    	$champInvalide = 'Vous devez remplir au moins un champ';
    	$succes = false;
    }

    function checkInput($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }      

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Administration - site pédagogique</title>
		<meta http-equiv="X-UA-Compatible" content="IE=7">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="description" content="Outil de trombinoscope ">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<!-- Utilisation de Bootsrap -->
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
		<link rel="icon" type="image/png" href="../images/logo.png" />
		 
	</head>
	<body>
		<header class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
					<div class="header-trombi col-md-2"></div>
					<div class="col-md-7 col-sm-7 col-xs-7">
						<a href="admin/index.php"><img src="../images/logo_accueil.png" style="margin: 60px 20px"></a>				
					</div>
					<div class="main-menu-connexion col-md-3 col-sm-3 col-xs-3">
						<ul class="fa-ul">
							<?php
								if (!isset($_SESSION['login'])) 
								{
								  	echo '<a href="admin/login.php"><li><i class="fa fa-lock" ></i> Connexion</li></a>';
								}
								else if (isset($_SESSION['login'])) 
								{
									echo '<a href="session_destroy.php"><li><i class="fa fa-unlock" ></i> Déconnexion</li></a>';
								}   
							?>		
						</ul>
					</div>								
				</div>
			</div>
		</header>
		<section id="formulaire">
			<div class="container">
				<div class="red-bar">
					<div class="administration-trombi">
						<div class="row">
							<div class="col-md-3 col-sm-2 col-xs-2"></div>
							<form role="form" class="form-vertcial col-md-9 col-sm-8 col-xs-8" method="post" action="admin/index.php">
								<fieldset>
									<legend><span style="color: #6DA542;"> <em>Administration site pédagogique</em></span><a href="../index.php" class="btn" style="margin-left: 80px;"><span class="glyphicon glyphicon-arrow-left"></span> Retour</a></legend>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="formulaire">
			<div class="container">
				<div class="row">
					<div class="administration-trombi">
						<div class="row">
						<a href="gestion_utilisateur.php" class="btn" style="margin-left: 25px;"><span class="glyphicon glyphicon-plus"></span> Administration utilisateur</a>
						<a href="gestion_live.php" class="btn" style="margin-left: 25px;">Administration Live</a>
						<a href="gestion_temoignage.php" class="btn" style="margin-left: 25px;"><span class="glyphicon glyphicon-arrow-left"></span> Administration Témoignages</a></h1>
					</div>					
				</div>
			</div>			
		</section>
		<footer>
			<div class="container">
				<div class="red-bar">
					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-3"></div>
							<div class="footer-trombi col-md-7 col-sm-7 col-xs-7">
								<br />
								<br />
							</div>			
						</div>					
					</div>
				</div>
			</div>			
		</footer>
	</body>
</html>