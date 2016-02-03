<?php

require_once('../includes/connection.php');
require_once('../includes/session.php');
require_once('../includes/functions.php');

?>
<?php require_once('../torben/templates/frontend_header.php') ?>

<div class="container mg-bottom mg-top ">
    <div class="row  bg-opacity border-yellow">

        <ul class="nav nav-tabs mg-top-none">
            <li class="active"><a data-toggle="tab" href="#sectionA">Veteran biler</a></li>
            <li><a data-toggle="tab" href="#sectionB">Bil stævner</a></li>

        </ul>
        <div class="col-md-12">
            <div class="tab-content">
                <div id="sectionA" class="tab-pane fade in active mg-top">
                    <div class="col-md-12 no-padding">

                    </div>
                </div>
                <div id="sectionB" class="tab-pane fade mg-top">
                    <div class="col-md-12 no-padding">

                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

</body>
</html>