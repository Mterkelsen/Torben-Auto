<?php

require_once('../includes/connection.php');
require_once('../includes/session.php');
require_once('../includes/functions.php');

?>
<?php require_once('../torben/templates/frontend_header.php') ?>

<div class="container-fluid no-padding">
    <div class="container no-padding mg-top">
        <div class="col-md-12 bg-opacity border-yellow">
            <div class="col-md-6">
            <h3  class="text-center">Kom i kontakt med Torben</h3>
                <form action="includes/kontaktform.php" method="post" id="kontaktform" name="kontaktform" class="loginform">
                    <input type="text" id="navn" name="navn" class="form-control2 form-control form-margin" required="" placeholder="Fulde navn.."/>
                    <input type="email" id="email" name="email" class="form-control2 form-control form-margin" required="" placeholder="Email.."/>
                    <input type="number" id="tlf" name="tlf" class="form-control2 form-control form-margin" required="" placeholder="Telefon nummer.."/>
                    <input type="text" id="biltype" name="biltype" class="form-control2 form-control form-margin" required="" placeholder="Bilen det omhandler.."/>
                    <input type="text" id="besked" name="besked" class="form-control2 form-control form-margin" required="" placeholder="Besked.."/>

                    <input type="submit" id="submitKontakt" name="submitKontakt" class="btn btn-danger form-margin" value="Indsend">


                </form>
            </div>
            <div class="col-md-6">
                <h3  class="text-center">Åbningstider</h3>
            </div>
        </div>
    </div>
</div>

</body>
</html>