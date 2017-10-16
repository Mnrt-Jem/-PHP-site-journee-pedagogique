<?php include 'header.php'; ?>
<?php include 'db.php'; 
$requeteProg = $con->prepare('SELECT id_prog,nom_prog,img_prog,text_prog from programme');
$requeteProg->execute();
?>
<!-- Main Content -->
<div class="container">
  <div class="row">
    <?php 
    while($donnes = $requeteProg->fetch())
    {
      $titreProg = $donnes['nom_prog'];
      $idProg = $donnes['id_prog'];
      $imgProg = $donnes['img_prog'];
      $textProg = $donnes['text_prog'];
      if ($idProg%2 == 0) {?>
        <div class="col-lg-3">
        <br>
        <img class="d-block img-fluid" src="img/<?php $imgProg?>.png" alt="Second slide">   
        </div>
        <div class="col-lg-9">
          <h3><?php echo($titreProg);?></h3> 
          <p><?php echo($textProg);?></p>
        </div><?php
      }
      else
      {
        ?><div class="col-lg-9">
          <h3><?php echo($titreProg);?></h3> 
          <p><?php echo($textProg);?></p>
        </div>
        <div class="col-lg-3">
          <br>
          <img class="d-block img-fluid" src="img/<?php $imgProg?>.png" alt="Second slide">   
        </div><?php
      }
    }
    ?>
  </div>
</div>
<hr>

<?php include 'footer.php'; ?>