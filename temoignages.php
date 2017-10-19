<?php 
  include 'header.php';
  include 'admin/database.php';

?>


    <!-- Main Content -->
    <hr>
    <div class="container" style="margin-left: 180px;">
      <div class="row">
        <div class="col-lg3 col-md-3 col-sm-3 col-xs-3" style="margin-right:-30px;">
          <?php 
            $statement = $db->query('SELECT img_temoignage FROM temoignage WHERE id_temoignage = 1');
            $photo1 = $statement -> fetch();

            $statement = $db->query('SELECT img_temoignage FROM temoignage WHERE id_temoignage = 2');
            $photo2 = $statement -> fetch();

            $statement = $db->query('SELECT img_temoignage FROM temoignage WHERE id_temoignage = 3');
            $photo3 = $statement -> fetch();

            $statement = $db->query('SELECT img_temoignage FROM temoignage WHERE id_temoignage = 4');
            $photo4 = $statement -> fetch();

            $statement = $db->query('SELECT img_temoignage FROM temoignage WHERE id_temoignage = 5');
            $photo5 = $statement -> fetch();

            $statement = $db->query('SELECT img_temoignage FROM temoignage WHERE id_temoignage = 6');
            $photo6 = $statement -> fetch();

            $statement = $db->query('SELECT img_temoignage FROM temoignage WHERE id_temoignage = 7');
            $photo7 = $statement -> fetch();

            $statement = $db->query('SELECT img_temoignage FROM temoignage WHERE id_temoignage = 8');
            $photo8 = $statement -> fetch();

            $statement = $db->query('SELECT img_temoignage FROM temoignage WHERE id_temoignage = 9');
            $photo9 = $statement -> fetch();

            $statement = $db->query('SELECT img_temoignage FROM temoignage WHERE id_temoignage = 10');
            $photo10 = $statement -> fetch();

            $statement = $db->query('SELECT img_temoignage FROM temoignage WHERE id_temoignage = 11');
            $photo11 = $statement -> fetch();
          ?>
          <img src="img/temoignage/<?php echo $photo1['img_temoignage'] ?>" style="width: 150px; padding-bottom: 50px;">
          <img src="img/temoignage/<?php echo $photo2['img_temoignage'] ?>" style="width: 150px;padding-bottom: 50px;">
          <img src="img/temoignage/<?php echo $photo3['img_temoignage'] ?>" style="width: 150px;padding-bottom: 50px;">
          <img src="img/temoignage/<?php echo $photo4['img_temoignage'] ?>" style="width: 150px;padding-bottom: 50px;">       
        </div>          
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
          <!-- <img src="img/fraction-vierge-f.jpeg" style="width: 380px; margin-left: 50px; margin-bottom: 210px;  "> -->
          <p style="font-family: 'Source Sans Pro'; margin: 95px 0px;" >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <img src="img/temoignage/<?php echo $photo5['img_temoignage'] ?>" style="width: 150px; margin-left: -30px; margin-right: 40px;">
          <img src="img/temoignage/<?php echo $photo6['img_temoignage'] ?>" style="width: 150px; margin-right: 40px;">
          <img src="img/temoignage/<?php echo $photo7['img_temoignage'] ?>" style="width: 150px;">          
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
          <img src="img/temoignage/<?php echo $photo8['img_temoignage'] ?>" style="width: 150px;padding-bottom: 50px;">
          <img src="img/temoignage/<?php echo $photo9['img_temoignage'] ?>" style="width: 150px;padding-bottom: 50px;">
          <img src="img/temoignage/<?php echo $photo10['img_temoignage'] ?>" style="width: 150px;padding-bottom: 50px;">
          <img src="img/temoignage/<?php echo $photo11['img_temoignage'] ?>" style="width: 150px;padding-bottom: 50px;">          
        </div>
      </div>
    </div>

    <hr>

<?php include 'footer.php'; ?>

