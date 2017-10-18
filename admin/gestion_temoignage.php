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
							<h1><strong>Administration page Témoignages</strong><a href="index.php" class="btn" style="margin-left: 65px;"><span class="glyphicon glyphicon-arrow-left"></span> Retour</a></h1>
			                <table class="table table-striped table-bordered table-hover">
			                  <thead>
			                    <tr>
			                      <th>Numéro photo</th>
			                      <th>Photo</th>
			                      <th>action</th>
			                    </tr>
			                  </thead>
			                  <tbody>			                  
							    <?php
							    	
									$temoignage = 'SELECT * FROM temoignage ORDER BY id_temoignage ';
									$req = $db->query($temoignage);

									while ($temoignage = $req->fetch()) 
									{
										echo '<tr>';
										echo '<td>'. $temoignage['id_temoignage'] . '</td>';
										echo '<td><img src="../img/temoignage/'.$temoignage['img_temoignage'].'" alt="" width="120" height="120"></td>';
										echo '<td width=300>';			                         
			                            echo ' ';
			                            echo '<a class="btn " href="delete_temoignage.php?id='.$temoignage['id_temoignage'].'"><span class="glyphicon glyphicon-pencil"></span> Modifier</a>';
			                            echo ' ';
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
							</div>			
						</div>					
					</div>
				</div>
			</div>			
		</footer>
	</body>
</html>