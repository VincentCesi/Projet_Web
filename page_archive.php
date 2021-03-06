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
        <title>Archive boîte</title>
        <?php
        include("Pages/templates/head_bde.php");
        ?>
    </head>


    <body>
        <div id="onglet" class="col-lg-12">
            <div class="row">
                <div class="col-sm-2">
                    <?php
                    include("Pages/templates/barre_nav.php");
                    ?>
                    <script>
                        $(".bar7").addClass("active");
                    </script>
                </div>




                <div class="col-sm-8">
                    <?php
                    include('connexiondb.php');
                    $requeteEvent = $bdd->query('SELECT * FROM ideabox WHERE Validation = 1 ORDER BY ID_Idea');
                    while ($event = $requeteEvent->fetch())
                    {
                    ?>
                    <div class="table_event row">
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-12">
                                    <form method="post" action="page_boiteidee_info.php" >
                                        <div class="Titre"  id="titre"><?= $event['Title']; ?></div>
                                        <br>
                                        <div class="Description"  id="description"><?= $event['Description']; ?></div>
                                        <br>
                                        <div class="Auteur"   id="auteur"><?= $event['Author']; ?></div>
                                        <input type='hidden' name="id_evenement" id="id_evenement" value="<?= $event['ID_Idea']; ?>"/>

                                        <div class="col-sm-2" >
                                            <button type="submit" name="information" value="information">Voir les informations sur cet évènement</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>



                    </div>
                    <?php
                    }
                    ?>
                </div>

                <div class="col-sm-2">
                    <?php
                    if (isset($_SESSION['id'])) {

                        if ($_SESSION['id'] != 0) {
                            echo "Bienvenue " . $_SESSION['email'];

                            include("Pages/templates/barre_deco.php");
                        }

                    }
                    ?>

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
