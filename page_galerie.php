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
        <title>Boîte à idée</title>
        <?php
        include("Pages/templates/head_bde.php");
        ?>
    </head>


    <body>
        <?php
        if (isset($_POST['id_evenement']))
        {
            $idEvent = (int)$_POST['id_evenement'];

        }
        include('connexiondb.php');
        ?>

        <div id="onglet" class="col-lg-12">
            <div class="row">
                <div class="col-sm-2">
                    <?php
                    include("Pages/templates/barre_nav.php");
                    ?>
                    <script>
                        $(".bar6").addClass("active");
                    </script>
                </div>

                <div class="col-sm-8">
                    <div class="conteneur">
                        <div class="row">
                            <div class="gallery">
                                <h1 class="gallery-title">Galerie</h1>
                            </div>
                            <!------ à modifier pour afficher les images depuis la bdd ---------->
                            <div>
                                <?php

                                if (isset($_POST['id_evenement']))
                                {
                                    $requeteSQl = "SELECT UrlImage FROM images WHERE ID_EventValidated = '$idEvent'";

                                }else{
                                    $requeteSQl = "SELECT UrlImage FROM images";

                                }
                                $requete_url = $bdd->query($requeteSQl);
                                $requete = $requete_url->fetch();

                                if(!$requete==NULL)
                                {
                                    do
                                    {
                                ?>
                                <div class="col-sm-6">

                                    <img src="script_transfert_image/<?php echo $requete['UrlImage'];  ?>" style="height:200px;margin:1%;"/>
                                    <?php
                                        if (isset($_SESSION['role'])) {
                                            if ($_SESSION['role'] == 3) { ?>
                                    <form action="Pages/templates/delete_image.php" method="post">
                                        <input type="hidden" name="del" value="<?php  echo $requete['UrlImage'] ?>"/>
                                        <input type="submit" value="delete"/>
                                    </form>
                                    <?php
                                                                        }}?>

                                </div>

                                <?php
                                    } while($requete = $requete_url->fetch());
                                }
                                else
                                {

                                    do
                                    {

                                ?>
                                <div>
                                    <img src="script_transfert_image/<?php echo $requete['UrlImage'];  ?>"  style="height:200px;margin:1%;"/>
                                    <?php
                                        if (isset($_SESSION['role'])) {
                                            if ($_SESSION['role'] == 3) { ?>
                                    <form action="Pages/templates/delete_image.php" method="post">
                                        <input type="hidden" name="del" value="<?php  echo $requete['UrlImage'] ?>"/>
                                        <input type="submit" value="delete"/>
                                    </form>
                                    <?php
                                                                        }}?>
                                </div>
                                <?php

                                    } while($requete = $requete_url->fetch());
                                }
                                ?>
                            </div>
                        </div>
                    </div>
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
