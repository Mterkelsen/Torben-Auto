<?php

require_once('../includes/connection.php');
require_once('../includes/session.php');
require_once('../includes/functions.php');

?>
<?php require_once('../torben/templates/frontend_header.php') ?>

<div class="container mg-bottom">
    <div class="col-md-12 no-padding mg-bottom">
        <div class="col-md-6 bg-mek text-center mekaniker_a no-padding mg-bottom"><a href="#" class="hvr-bounce-to-bottom"><br><br>Sørg for at din bil bliver synet<br><br><br><br><button class="btn btn-default mek_read_more hvr-float-shadow" href="#"><p>Kontakt Torben her!</p></button><br><br><br><br><br></a></div>
        <div class="col-md-6 bg-vet text-center veteran_a no-padding mg-bottom"><a href="#" class="hvr-bounce-to-bottom"><br><br>Veteran bil renovation<br><br><br><br><button class="btn btn-default vet_read_more hvr-float-shadow" href="#"><p>Læs mere her!</p></button><br><br><br><br><br></a></div>
    </div>


</div>
<div class="container-fluid no-padding bg-horizontal mg-top">
<div class="container">
    <div class="col-md-12 no-padding mg-top mg-bottom">
        <div class="col-md-12 no-padding  bg-alum mg-top mg-bottom">
            <h5 class="text-center mg-top txt-shadow">NYHEDER</h5>
            <hr class="hr-news box-shadow">
            <?php

            $sql = mysqli_query($connection, "SELECT news_header, news_content, news_image FROM news ORDER BY news_date DESC LIMIT 2");


            while($NewsArray = mysqli_fetch_array($sql)){

                echo "<div class='col-md-6'>"."<h2 class='bold'>".$NewsArray['news_header']."</h2>".
                    "\n"."<p>".$stringcut = substr($NewsArray['news_content'],0,350)."..</p>"."<br>"."<button class=\"btn btn-default vet_read_more hvr-float-shadow\" href=\"#\"><p>Læs mere her!</p></button>"."</div>";

            }
            ?>
        </div>

        <div class="col-md-4 col-sm-4 newsbox">
            <div class="minibox_header">
                <h6>News</h6>
            </div>
            <div class="minibox_body bg-opacity">
                <?php

                $sql = mysqli_query($connection, "SELECT news_header, news_content, news_image FROM news ORDER BY news_date DESC LIMIT 2");


                while($NewsArray = mysqli_fetch_array($sql)){


                    echo "<h2 class='bold'>".$NewsArray['news_header']."</h2>"."<hr class='news_hr'>"."\n"."<p>".$stringcut = substr($NewsArray['news_content'],0,150)."..</p>"."<br>";}





                ?>
            </div>
            <a href="#"><div class="minibox_footer">
                    <button class="btn-success hvr-shutter-out-vertical">Read more</button>
                </div>
        </div></a>


        <div class="col-md-4 col-sm-4 weeklybox">
            <div class="minibox_header">
                <h6>Weekly Special</h6>
            </div>
            <div class="minibox_body bg-opacity">
                <?php

                $MenuSql = mysqli_query($connection, "SELECT menu_name, menu_description, menu_price FROM menus WHERE daily='1'");


                while($MenuArray = mysqli_fetch_array($MenuSql)){


                    echo "<h2 class='bold'>".$MenuArray['menu_name']."</h2>"."<hr class='news_hr'>"."\n"."<p>".$stringcut = substr($MenuArray['menu_description'],0,300)."</p>"."<br>\n"."<h2>".$MenuArray['menu_price']."</h2>";

                }





                ?>
            </div>
            <a href="#"><div class="minibox_footer">
                    <button class="btn-success hvr-shutter-out-vertical">Read more</button>

                </div></a>
        </div>


        <div class="col-md-4 col-sm-4 gamebox">
            <div class="minibox_header">
                <h6>Upcoming Events</h6>
            </div>
            <div class="minibox_body bg-opacity">
                <?php

                $EventSql = mysqli_query($connection, "SELECT news_header FROM news WHERE news_category='events' LIMIT 4");


                while($EventArray = mysqli_fetch_array($EventSql)){

                    echo "<h2 class='bold'>".$EventArray['news_header']."</h2>"."\n"."<hr  class='news_hr'>";

                }





                ?>

            </div>
            <a href="#"><div class="minibox_footer">
                    <button class="btn-success hvr-shutter-out-vertical">Read more</button>

                </div></a>
        </div>
    </div>
</div>
</div>

</body>
</html>