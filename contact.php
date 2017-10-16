<?php
    include 'header.php';
 ?>

    <!-- Main Content -->
       <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>Lycée Saint Vincent</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2606.835887247322!2d2.5862843203064156!3d49.20367274679404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e630cfeb73f31d%3A0x48c819ca44bf7503!2sLyc%C3%A9e+Priv%C3%A9+Saint+Vincent!5e0!3m2!1sfr!2sfr!4v1505133146617" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-md-4">
                    <p>Téléphone:
                        <strong>03.44.53.96.40</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:contact@lyceestvincent.fr">contact@lyceestvincent.fr</a></strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        <br>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Envoyer un message
                        <strong></strong>
                    </h2>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, vitae, distinctio, possimus repudiandae cupiditate ipsum excepturi dicta neque eaque voluptates tempora veniam esse earum sapiente optio deleniti consequuntur eos voluptatem.</p>
                    <form role="form">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Nom</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Adresse Email</label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Numéro de Téléphone</label>
                                <input type="tel" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Message</label>
                                <textarea class="form-control" rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" class="btn btn-default">Envoyer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>


    <hr>

    <?php include 'footer.php'; ?>
