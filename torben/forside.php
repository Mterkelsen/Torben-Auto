<?php

require_once('../includes/connection.php');
require_once('../includes/session.php');
require_once('../includes/functions.php');

?>
<?php require_once('../torben/templates/frontend_header.php') ?>

<div class="container">
    <div class="col-md-12 no-padding bg-white">
        <div class="col-md-6 bg-mek text-center mekaniker_a no-padding"><a href="#" class="hvr-bounce-to-bottom"><br><br>Sørg for at din bil bliver synet<br><br><br><br><button class="btn btn-default mek_read_more hvr-float-shadow" href="#"><p>Kontakt Torben her!</p></button><br><br><br><br><br></a></div>
        <div class="col-md-6 bg-vet text-center veteran_a no-padding"><a href="#" class="hvr-bounce-to-bottom"><br><br>Veteran bil renovation<br><br><br><br><button class="btn btn-default vet_read_more hvr-float-shadow" href="#"><p>Læs mere her!</p></button><br><br><br><br><br></a></div>
    </div>
    <div class="col-md-12 no-padding bg-opacity-darker bg-cars">
        <h5 class="text-center mg-top">NYHEDER</h5>
        <hr class="hr-news"> <i class="fa fa-newspaper-o fa-3x hr-newsicon bg-opacity-darker bg-cars cl-yellow"></i> </hr>
        <?php

        $sql = mysqli_query($connection, "SELECT news_header, news_content, news_image FROM news ORDER BY news_date DESC LIMIT 2");


        while($NewsArray = mysqli_fetch_array($sql)){

            echo "<div class='col-md-6'>"."<h2 class='bold'>".$NewsArray['news_header']."</h2>".
                "\n"."<p>".$stringcut = substr($NewsArray['news_content'],0,350)."..</p>"."<br>"."<button class=\"btn btn-default vet_read_more hvr-float-shadow\" href=\"#\"><p>Læs mere her!</p></button>"."</div>";

        }
        ?>
    </div>
</div>

</body>
</html>