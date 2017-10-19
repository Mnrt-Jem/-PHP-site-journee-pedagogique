<?php 
	session_start();
	if (!isset($_SESSION['login'])) 
	{
	  	header("location: login.php");
	 }      
    include 'database.php';
 
    $nomError =  "";

    if(!empty($_POST)) 
    {

        $lienYT 		= checkInput($_POST['lien_yt']);
        $description    = checkInput($_POST['description_yt']);
        $isSuccess      = true;

        
        if($isSuccess) 
        {
            $statement = $db->prepare("INSERT INTO lien_youtube(id_ly,lien,nom_lien) values(?, ?, ?)");
            $statement->execute(array(null,$lienYT, $description));
            header("Location: gestion_live.php");
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
		<title>Administration - Site pédagogique</title>
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
							<form action="insert_live.php" role="form" class="form-vertcial col-md-9 col-sm-9 col-xs-9" method="post">
								<fieldset>
									<legend><span style="color: #6DA542; font-style: normal;"><em>Administration - Ajout d'une vidéo</em></span><a href="gestion_live.php" class="btn" style="margin-left: 43px;"> Retour</a></legend>
									<div class="form-group" for="nom">
										<label id="nom">Lien de la vidéo :</label>	
										<input class="form-nom" type="text" name="lien_yt" placeholder="lien de la vidéo" style="margin-left: 67px;" required="">
										<br>
										<br>
										<span class="help-inline" style="color: red"><?php echo $nomError;?></span>
										<label id="nom">Description de la vidéo :</label>										
										<textarea name="description_yt" rows="4" cols="40"></textarea>
										<br>
										<span class="help-inline" style="color: red"><?php echo $nomError;?></span>
									</div>
									<button type="submit" class="btn" style="margin-left: 143px;" name="validation">Ajouter le programme</button>
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
									<li class="end">Lycée Saint-Vincent &copy;2017 - Tous droits réservés</li> 
									<li class="sign">Administration site pédagogique</li>
								</ul>
							</div>			
						</div>					
					</div>
				</div>
			</div>			
		</footer>
	</body>
</html>