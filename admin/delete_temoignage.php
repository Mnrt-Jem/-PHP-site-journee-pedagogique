<?php 
	session_start();
	if (!isset($_SESSION['login'])) 
	{
	  	header("location: login.php");
	}
	if(!empty($_GET['id'])) 
    {
        $id = checkInput($_GET['id']);
    }     
    include 'database.php';
 
    $imageError = $nomError = $prenomError = $posteError = $agenceError = "";

    if(!empty($_POST)) 
    {

        $image              = checkInput($_FILES["image"]["name"]);
        $imagePath          = '../img/temoignage'. basename($image);
        $imageExtension     = pathinfo($imagePath,PATHINFO_EXTENSION);
        $isSuccess          = true;
        
        if(empty($image)) 
        {
            $isImageUpdated = false;
        }
        else
        {
        	$isImageUpdated = true;
            $isUploadSuccess = true;
            if($imageExtension != "jpg" && $imageExtension != "png" && $imageExtension != "jpeg" ) 
            {
                $imageError = "Les fichiers autorises sont: .jpg, .jpeg, .png";
                $isUploadSuccess = false;
            }
            if(file_exists($imagePath)) 
            {
                $imageError = "Le fichier existe deja";
                $isUploadSuccess = false;
            }
            if($_FILES["image"]["size"] > 1000000) 
            {
                $imageError = "Le fichier ne doit pas depasser 1Mo";
                $isUploadSuccess = false;
            }
            if($isUploadSuccess) 
            {
                if(!move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath)) 
                {
                    $imageError = "Il y a eu une erreur lors de l'upload, vérifier la taille de l'image (1Mo max)";
                    $isUploadSuccess = false;
                } 
            } 
        }
        
        if($isSuccess && $isImageUpdated) 
        {

			$statement = $db->prepare("UPDATE temoignage SET img_temoignage=? WHERE id_employe=?");
	    	$statement->execute(array($image));      	}

            
            header("Location: gestion_temoignage.php");

        }

     
    else
    {
    	$statement = $db ->prepare("SELECT * FROM temoignage WHERE id_temoignage=?");
    	$statement->execute(array($id));
    	$temoignage = $statement->fetch();
    	$id_temoignage = $temoignage['id_temoignage'];
        $image      = $temoignage['img_temoignage'];
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
					<div class="administration-trombi ">
						<div class="row">
							<div class="col-md-3 col-sm-2 col-xs-2"></div>
							<form action="<?php echo 'delete_temoignage.php?id=' .$id; ?>" role="form" class="form-vertcial col-md-8 col-sm-7 col-xs-7" method="post" enctype="multipart/form-data">
								<fieldset>
									<legend style="width: 468px;"><span style="color: #6DA542;"><em>Modifier la photo numéro <?php echo $id_temoignage; ?> </em></span><a href="gestion_temoignage.php" class="btn" style="margin-left: 144px;"> Retour</a></legend>
									<div class="form-group" for="photo">
										<label for="img_temoignage" id="photo">Sélectionner une nouvelle image (max. 1 Mo):</label>
										<p><?php echo $image;?></p>
										<input type="file" id="img_temoignage" name="image" placeholder="photo du témoignage">
										<br>
										<span class="help-inline" style="color: red"><?php echo $imageError;?></span>
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