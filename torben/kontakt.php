<?php

require_once('includes/connection.php');
require_once('includes/session.php');
require_once('includes/functions.php');
require_once('includes/openinghours.php')

?>
<?php require_once('../torben/templates/frontend_header.php') ?>


<div class="container mg-top">
        <div class="col-md-12 bg-opacity border-yellow">
            <div class="col-md-12 mg-top">
                <section id="contact">


                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-12 text-center"">

                                        <h5 class="text-center txt-shadow h5transform">Kontakt</h5>
                                            <hr class="hr-news box-shadow">
                                    </div>
                                </div>
                                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                                <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                                <form name="sentMessage" id="contactForm" novalidate="">
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 floating-label-form-group controls">
                                            <label>Navn</label>
                                            <input aria-invalid="false" class="form-control2" placeholder="Navn" id="navn" required="" data-validation-required-message="Indtast dit navn." type="text">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 floating-label-form-group controls ">
                                            <label>E-mail adresse</label>
                                            <input class="form-control2 border-yellow" placeholder="E-mail adresse" id="email" required="" data-validation-required-message="Indtast din e-mail adresse." type="email">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 floating-label-form-group controls">
                                            <label>Telefonnr.</label>
                                            <input class="form-control2 border-yellow" placeholder="Telefonnummer" id="telefon" required="" data-validation-required-message="Indtast dit telefonnummer." type="tel">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 floating-label-form-group controls">
                                            <label>Besked</label>
                                            <textarea rows="5" class="form-control2" placeholder="Besked" id="besked" required="" data-validation-required-message="Indtast din besked."></textarea>
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
            <div class="col-md-12">

                <h5 class="text-center txt-shadow h5transform">Åbningstider</h5>
                <hr class="hr-news box-shadow">
                    <div class="col-md-12">

                        <?php
                        $HoursQuery =  "SELECT * FROM openinghours";

                        $LoadHours = mysqli_query($connection, $HoursQuery);

                        while($HoursView = mysqli_fetch_array($LoadHours)){
                            echo "<h2 class='text-center h2transform'>Mandag: ".$HoursView['Mandag']."</h2>".
                                "<h2 class='text-center h2transform'>Tirsdag: ".$HoursView['Tirsdag']."</h2>".
                                "<h2 class='text-center h2transform'>Onsdag: ".$HoursView['Onsdag']."</h2>".
                                "<h2 class='text-center h2transform'>Torsdag: ".$HoursView['Torsdag']."</h2>".
                                "<h2 class='text-center h2transform'>Fredag: ".$HoursView['Fredag']."</h2>".
                                "<h2 class='text-center h2transform'>Lørdag: ".$HoursView['Lørdag']."</h2>".
                                "<h2 class='text-center h2transform'>Søndag: ".$HoursView['Søndag']."</h2>"."</br>";
                        }
                        ?>

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <h2 class="text-center h2transform mg-bottom">Telefon: </br>75398506 / 21645106</br></br> E-mail: </br>Torren2708@hotmail.com </br></br> Adresse: </br>Bobøl-Foldingbrovej 11</br> Bobøl, 6683 Føvling</h2>
                        </div>

                    </div>
             </div>

                <h5 class="text-center txt-shadow h5transform mg-top">Kørselsvejledning</h5>
                    <hr class="hr-news box-shadow mg-bottom">
                        <div class="col-md-12 center-block mg-bot"><iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d3917.9877066892777!2d8.916957302634483!3d55.43949695331402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d55.4399173!2d8.919628399999999!5e0!3m2!1sda!2sdk!4v1454501055905" width="100%" height="500px" frameborder="0" style="border:0; z-index:-1;"></iframe></div>
                        </div>


<style>
    .h2transform {
        font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;
        text-transform: uppercase;
        font-weight: 600;
    }
    .h5transform {
        font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;
        text-transform: uppercase;
        font-weight: 600;
    }
    .form-control2 {
        display: block;
        width: 100%;
        height: 40px;
        font-size: 1em;
        line-height: 1.76471em;
        color: white;
        border: 0;
        font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif !important;
        text-transform: none;
        font-weight: 500;
        margin-top: 0;
        padding-left: 10px !important;
    }
    .form-control2:focus {
        border-color: whitesmoke;
        outline: 0;

    }
    .form-control2::-moz-placeholder {
        color: white;
        opacity: 1;
    }
    .form-control2:-ms-input-placeholder {
        color: white;
    }
    .form-control2::-webkit-input-placeholder {
        color: white;
    }
    .form-control2[disabled],
    .form-control2[readonly],
    fieldset[disabled] .form-control2 {
        opacity 1;

    }
    textarea.form-control2 {
        height: auto;
    }

    .floating-label-form-group {
        position: relative;
        margin-bottom: 0;
        padding-bottom: 0.5em;
        border-bottom: 1px solid white;
    }
    .floating-label-form-group input,
    .floating-label-form-group textarea {
        z-index: 0;
        position: relative;
        padding-right: 0;
        padding-left: 0;
        border: none;
        border-radius: 0;
        font-size: 1.5em;
        background: none;
        box-shadow: none !important;
        resize: none;
    }
    .floating-label-form-group label {
        display: block;
        z-index: 0;
        position: relative;
        top: 2em;
        margin: 0;
        font-size: 0.85em;
        line-height: 1.564705882em;
        opacity: 0;
        -webkit-transition: top 0.3s ease,opacity 0.3s ease;
        -moz-transition: top 0.3s ease,opacity 0.3s ease;
        transition: top 0.3s ease,opacity 0.3s ease;

    }
    .floating-label-form-group-with-value label {
        top: 0;
        opacity: 1;
    }
    .floating-label-form-group:not(:first-child) {
        padding-left: 14px;
        border-left: 1px solid #FCD432;
    }
    .floating-label-form-group-with-value label {
        top: 0;
        opacity: 1;
    }
    .floating-label-form-group-with-focus label {
        color: #18bc9c;
    }
    form .row:first-child .floating-label-form-group {
        border-top: 1px solid white;
    }

</style>
</body>
</html>
