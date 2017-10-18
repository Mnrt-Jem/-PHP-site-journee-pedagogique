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
                <div class="col-md-4-sm-12">
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

           <section id="contact">
               <div class="container">
                   <div class="row">
                       <div class="col-lg-12 text-center">
                           <h2 class="section-heading">Contact</h2>
                       </div>
                   </div>
                   <div class="row">
                       <div class="col-lg-12">
                           <form method="post" action="js/mail/contact_me.php">
                               <div class="row">
                                   <div class="col-md-6">
                                       <div class="form-group">
                                           <input class="form-control" name="name" type="text" placeholder="Votre Nom *" required data-validation-required-message="Please enter your name.">
                                           <p class="help-block text-danger"></p>
                                       </div>
                                       <div class="form-group">
                                           <input class="form-control" name="email" type="email" placeholder="Votre Email *" required data-validation-required-message="Please enter your email address.">
                                           <p class="help-block text-danger"></p>
                                       </div>
                                       <div class="form-group">
                                           <input class="form-control" name="phone" type="tel" placeholder="Votre téléphone *" required data-validation-required-message="Please enter your phone number.">
                                           <p class="help-block text-danger"></p>
                                       </div>
                                   </div>
                                   <div class="col-md-6">
                                       <div class="form-group">
                                           <textarea class="form-control" name="message" placeholder="Votre message *" required data-validation-required-message="Please enter a message."></textarea>
                                           <p class="help-block text-danger"></p>
                                       </div>
                                   </div>
                                   <div class="clearfix"></div>
                                   <div class="col-lg-12 text-center">
                                       <button id="sendMessageButton" class="btn btn-xl" type="submit">Envoyer</button>
                                   </div>
                               </div>
                           </form>
                       </div>
                   </div>
               </div>
           </section>

           <!-- Bootstrap core JavaScript -->
           <script src="vendor/jquery/jquery.min.js"></script>
           <script src="vendor/popper/popper.min.js"></script>
           <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

           <!-- Plugin JavaScript -->
           <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

           <!-- Contact form JavaScript -->
           <script src="js/jqBootstrapValidation.js"></script>
           <script src="js/contact_me.js"></script>




           <hr>

    <?php include 'footer.php'; ?>
