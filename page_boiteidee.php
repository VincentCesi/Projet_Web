<?php
    include("Pages/templates/bootstrap.php");
?>


<!DOCTYPE htlm>
<html>

    <script type="text/javascript">


    </script>
    <?php
    session_start();
        if (!isset($_SESSION['id'])) {
            header("Location: index.php");
        }
    ?>
    <head>
        <meta charset="utf=8" />
        <title>Accueil</title>
        <?php
            include("Pages/templates/head_bde.php");
        ?>
    </head>


    <body>
        <div id="onglet" class="col-lg-12">

            <div class="col-sm-2">
                <?php
                include("Pages/templates/barre_nav.php");
                ?>
                <script>
                    $(".bar3").addClass("active");
                </script>
            </div>




            <div class="col-sm-8">
                <h3>allouibonjouretlkzbneknjb fg brb jb rbngrzbznztrnbrt"irtfbvbvhfbvbvzovrijvnnv   rfvv</h3>

            </div>








            <div class="col-sm-2">
                <ul>
                    <li><a href="soumissionEvenementUser.php">Proposer un évènement</a></li>
                    <?php
                        if (isset($_SESSION['role'])) {
                            if ($_SESSION['role'] == 4){?>
                            <li><a href="soumissionEvenementAdmin.php">Proposer un évènement validé</a></li>
                            <?php
                        }
                    }
                    ?>
                </ul>
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
