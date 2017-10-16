<?php 
	session_start();
	if (!isset($_SESSION['login'])) 
	{
	  	header("location: login.php");
	}

    include 'database.php';
    if(!empty($_GET['id'])) 
    {
        $id = checkInput($_GET['id']);
    }
    var_dump($id);

 
    $nomError = $prenomError ="";

    if(!empty($_POST)) 
    {

        $lienYoutube         = checkInput($_POST['lien']);
        $nomLy     = checkInput($_POST['nom_lien']);          
        $isSuccess = true;

        
        if(empty($lienYoutube)) 
        {
            $nomError = 'Ce champ ne peut pas être vide';
            $isSuccess = false;
        }
        if(empty($nomLy)) 
        {
            $prenomError = 'Ce champ ne peut pas être vide';
            $isSuccess = false;
        } 

    

    if(($isSuccess)) 
        {

 
        	$statement = $db->prepare("UPDATE lien_youtube SET lien=?,nom_lien=? WHERE id_ly=?");
            $statement->execute(array($lienYoutube,$nomLy,$id));
        
   			header("Location: admin_service.php");

        }

    }
    else
    {
    	$statement = $db ->prepare("SELECT * FROM lien_youtube WHERE id_ly = ?");
    	$statement->execute(array($id));
    	$programme = $statement->fetch();
    	$lienYoutube         = $programme['lien'];
        $nomLy      = $programme['nom_lien']; 
    }
    function checkInput($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
     var_dump($lienYoutube, $nomLy);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Administration - Trombinoscope</title>
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
					<div class="administration-trombi ">
						<div class="row">
							<div class="col-md-3 col-sm-2 col-xs-2"></div>
							<form action="<?php echo 'modif_lien_youtube.php?id=' .$id; ?>" role="form" class="form-vertcial col-md-8 col-sm-7 col-xs-7" method="post" enctype="multipart/form-data">
								<fieldset>
									<legend style="width: 468px;"><span style="color: #6DA542;"><em>Administration - Modifier les informations</em></span><a href="admin_agence.php" class="btn""><span class="glyphicon glyphicon-arrow-left"></span> Retour</a></legend>
									<div class="form-group" for="nom programme">
										<label id="nom">Nom :</label>	
										<input class="form-nom" type="text" name="nom_lien" placeholder="nom du programme" style="margin-left: 27px;" value="<?php echo $nomLy;?>" required="">
										<br>
										<span class="help-inline" style="color: red"><?php echo $nomError;?></span>
									</div>
									<div class="form-group" for="text programme">
										<label id="prenom">lien :</label>	
										<input class="form-nom" type="text" name="lien" placeholder="lien" style="margin-left: 27px;" value="<?php echo $lienYoutube;?>" required="">
										<br>
										<span class="help-inline" style="color: red"><?php echo $prenomError;?></span>
									</div>
									<button type="submit" class="btn" style="margin-left: 120px;" name="validation">Modifier</button>
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