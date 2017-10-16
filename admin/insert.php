<?php 
	session_start();
	if (!isset($_SESSION['login'])) 
	{
	  	header("location: login.php");
	 }      
    include 'database.php';
 
    $imageError = $nomError = $prenomError = $posteError = $agenceError = "";

    if(!empty($_POST)) 
    {

        $nomLog         = checkInput($_POST['nom_log']);
        $mdpLog      = checkInput($_POST['mdp_log']); 
        $isSuccess          = true;
        $isUploadSuccess    = false;
        
        if(empty($nomLog)) 
        {
            $nomError = 'Ce champ ne peut pas être vide';
            $isSuccess = false;
        }
        if(empty($mdpLog)) 
        {
            $prenomError = 'Ce champ ne peut pas être vide';
            $isSuccess = false;
        } 

        if($isSuccess) 
        {
        
            $statement = $db->prepare("INSERT INTO login(id_log,nom_log,mdp_log) values(?, ?, ?)");
            $statement->execute(array(null,$nomLog,$mdpLog));
            header("Location: insert.php");

        }
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
		<title>Administration - utilisateur</title>
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
						<a href="../index.php"><img src="../images/logo_accueil.png" style="margin: 60px 20px"></a>				
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
							<form action="insert.php" role="form" class="form-vertcial col-md-9" method="post" enctype="multipart/form-data">
								<fieldset>
									<legend><span style="color: #6DA542;"> <em>Utilisateur - Administration</em></span><a href="index.php" class="btn" style="margin-left: 40px;"><span class="glyphicon glyphicon-arrow-left"></span> Retour</a></legend>
									<div class="form-group" for="photo">
									<br>
									<div class="form-group" for="nom">
										<label id="nom">identifiant :</label>	
										<input class="form-nom" type="text" name="nom_log" placeholder="votre identifiant" style="margin-left: 29px;" required="">
										<br>
										<span class="help-inline" style="color: red"><?php echo $nomError;?></span>
									</div>
									<div class="form-group" for="prenom">
										<label id="prenom">Mot de passe :</label>	
										<input class="form-nom" type="text" name="mdp_log" placeholder="votre mot de passe" style="margin-left: 8px;" required="">
										<br>
										<span class="help-inline" style="color: red"><?php echo $prenomError;?></span>
									</div>
										</select>
										<span class="help-inline" style="color: red"><?php echo $agenceError;?></span>
									</div>
									<button type="submit" class="btn" style="margin-left: 65px;" name="validation">Ajouter l'utilisateur</button>
								</fieldset>
							</form>						
						</div>
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
								<ul>
									<li class="end">EGETRA SA &copy;2009 - Tous droits réservés</li> 
									<li class="sign">Powered by Debian GNU / Linux<a href="http://wiki.resgestrans.int"><img src="../images/tuxlogo.png" style="vertical-align:middle" alt="Debian" /></a> - Apache<img src="../images/apachelogo.png" style="vertical-align:middle" alt="LE serveur Web !" /></a> - Designed By Seb2A</li>
								</ul>
							</div>			
						</div>					
					</div>
				</div>
			</div>			
		</footer>
	</body>
</html>