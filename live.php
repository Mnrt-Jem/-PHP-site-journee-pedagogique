<?php include 'db.php'; ?>
<?php include 'header.php'; ?>
<hr>


    <!-- Main Content -->
    <?php 
      $live=$con->prepare('SELECT * from live');
      $live->execute();
    ?>
    <div class="container">

      <div class="row">
        <div class="col-lg-9">
          <p>Reportages, interviews et synthèse du World Café. Revivez et commentez les moments forts de la journée.</p>
        </div>
        <div class="col-lg-9">
          <?php while ($donnees=$live->fetch()) { ?>
            <div class="col-lg-3 col-lg-offset-1" style="display: inline-block;">
            <iframe width="175" height="150" src="<?= $donnees['lien_vid']; ?>" frameborder="0" allowfullscreen></iframe>
            </div>
          <?php } ?>
        </div>
        <div class="col-lg-3" style="float: right;">
                    <a class="twitter-timeline"  href="https://twitter.com/hashtag/SaintVincent" data-widget-id="907288860698320896">Tweets sur #SaintVincent</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          
        </div>
    </div>
    </div>

    <hr>

    <?php include 'footer.php'; ?>
