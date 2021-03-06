<?php

require_once('includes/connection.php');
require_once('includes/session.php');
require_once('includes/functions.php');
require_once('includes/openinghours.php')

?>
<?php require_once('../torben/templates/frontend_header.php') ?>

<div class="container mg-top">
        <div class="col-md-12 bg-opacity border-yellow">
            <div class="col-md-8">
                <section id="contact">

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <h2>Kontakt</h2>
                                    </div>
                                </div>
                                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                                <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                                <form name="sentMessage" id="contactForm" novalidate="">
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 floating-label-form-group controls">

                                            <input aria-invalid="false" class="form-control" placeholder="Navn" id="name" required="" data-validation-required-message="Indtast dit navn." type="text">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 floating-label-form-group controls">

                                            <input class="form-control" placeholder="Email Address" id="email" required="" data-validation-required-message="Indtast din e-mail-adresse." type="email">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 floating-label-form-group controls">

                                            <input class="form-control" placeholder="Phone Number" id="phone" required="" data-validation-required-message="Indtast dit telefonnummer." type="tel">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 floating-label-form-group controls">

                                            <textarea rows="5" class="form-control" placeholder="Message" id="message" required="" data-validation-required-message="Indtast din besked."></textarea>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <br>
                                    <div id="success"></div>
                                    <div class="row">
                                        <div class="form-group col-xs-12">
                                            <button type="submit" class="btn btn-danger btn-lg">Send</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
            <div class="col-md-6">
                <h3 class="text-center">Åbningstider</h3>
                    <div class="col-md-6">

                        <?php
                        $HoursQuery =  "SELECT * FROM openinghours";

                        $LoadHours = mysqli_query($connection, $HoursQuery);

                        while($HoursView = mysqli_fetch_array($LoadHours)){
                            echo "<h2 class='text-left'>Mandag - ".$HoursView['Mandag']."</h2>"."</br>".
                                "<h2 class='text-left'>Tirsdag - ".$HoursView['Tirsdag']."</h2>"."</br>".
                                "<h2 class='text-left'>Onsdag - ".$HoursView['Onsdag']."</h2>"."</br>".
                                "<h2 class='text-left'>Torsdag - ".$HoursView['Torsdag']."</h2>"."</br>".
                                "<h2 class='text-left'>Fredag - ".$HoursView['Fredag']."</h2>"."</br>".
                                "<h2 class='text-left'>Lørdag - ".$HoursView['Lørdag']."</h2>"."</br>".
                                "<h2 class='text-left'>Søndag - ".$HoursView['Søndag']."</h2>"."</br>";
                        }
                        ?>
                        <div class="col-md-6 col-sm-6 col-xs-6"><h2 class="text-left">Telefon:</br> E-mail: </br> Adresse:</h2></div>
                        <div class="col-md-6 col-sm-6 col-xs-6"><h2 class="text-left">75 39 85 06 / 21 64 51 06  </br> Torren2708@hotmail.com </br> Bobøl-Foldingbrovej 11, Bobøl, 6683 Føvling</h2> </div>
                    </div>
             </div>

            <div class="col-md-12 center-block mg-bot"><iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d3917.9877066892777!2d8.916957302634483!3d55.43949695331402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d55.4399173!2d8.919628399999999!5e0!3m2!1sda!2sdk!4v1454501055905" width="100%" height="500px" frameborder="0" style="border:0; z-index:-1; pointer-event:none;"></iframe></div>
        </div>
    </div>


</body>
</html>