<?php
include("Pages/templates/bootstrap.php");
?>

<!DOCTYPE htlm>
<html>

    <head>
        <meta charset="utf=8" />
        <title>Accueil</title>

        <?php

        session_start();
        //$_SESSION['galerie'] = 0;
        include("Pages/templates/head_bde.php");
        ?>
    </head>

    <body>
        <div id="onglet" class="col-md-12">
            <div class="row">
                <div class="col-lg-2">
                    <?php
                    include("Pages/templates/barre_nav.php");
                    ?>
                    <script>
                        $(".bar1").addClass("active");
                    </script>
                </div>


                <div class="txt_carousel col-lg-8">
                    <div class="txt">
                        <?php

                        print ("Dumque ibi diu moratur commeatus opperiens, quorum translationem ex Aquitania verni imbres solito crebriores prohibebant auctique torrentes, Herculanus advenit protector domesticus, Hermogenis ex magistro equitum filius, apud Constantinopolim, ut supra rettulimus, populari quondam turbela discerpti. quo verissime referente quae Gallus egerat, damnis super praeteritis maerens et ");

                        ?>
                    </div>

                    <?php

                    include("Pages/templates/carousel.php");

                    ?>
                </div>

                <div class="col-lg-2">
                    <?php
                    if (isset($_SESSION['id'])) {

                        if ($_SESSION['id'] != 0) {
                            echo "Bienvenue " . $_SESSION['email'];

                            include("Pages/templates/barre_deco.php");
                        }
                    }else {
                        include("Pages/templates/barre_coins.php");
                    }
                    ?>

                    <div class="bde">
                        <?php
                        print ("Dumque ibi diu moratur commeatus opperiens, quorum translationem ex Aquitania verni imbres solito crebriores prohibebant auctique torrentes, Herculanus advenit protector domesticus, Hermogenis ex magistro equitum filius, apud Constantinopolim, ut supra rettulimus, populari quondam turbela discerpti. quo verissime referente quae Gallus egerat, damnis super praeteritis maerens et futurorum timore suspensus angorem animi quam diu potuit emendabat.")
                        ?>
                    </div>
                </div>
            </div>


        </div>



    </body>



    <footer>

        <?php
                            include("Pages/templates/mention_footer.php");
        ?>
    </footer>

</html>

<?php

include("Pages/templates/style.css");
?>

