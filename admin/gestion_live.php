<?php
	include 'database.php';
	session_start();
	if (!isset($_SESSION['login'])) 
	{
	  	header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Administration - Live</title>
		<meta http-equiv="X-UA-Compatible" content="IE=7">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="description" content="Outil de trombinoscope ">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<!-- Utilisation de Bootsrap -->
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
		<link rel="icon" type="image/png" href="../images/logo.png" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		 
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
								<h1><strong>Administration page Live</strong><a href="insert_live.php" class="btn" style="margin-left: 65px;"> Ajouter</a><a href="index.php" class="btn" style="margin-left: 65px;"> Retour</a></h1>
				                <table class="table table-striped table-bordered table-hover">
				                  <thead>
				                    <tr>
				                      <th>Lien youtube</th>
				                      <th>Description de la vidéo</th>
				                      <th>action</th>
				                    </tr>
				                  </thead>
				                  <tbody>			                  
								    <?php
								    	
										$live = 'SELECT * FROM lien_youtube ORDER BY id_ly ';
										$req = $db->query($live);

										while ($live = $req->fetch()) 
										{
											echo '<tr>';
											echo '<td>'. $live['lien'] . '</td>';
											echo '<td>'. $live['nom_lien'] . '</td>';
											echo '<td width=300>';			                         
				                            echo '<a class="btn " href="delete_live.php?id='.$live['id_ly'].'"> Supprimer</a>';
				                            echo '</td>';
				                            echo '</tr>';
										}
										
									?>

				                  </tbody>
				                </table>
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