
            <div class="nav">

                <ul>

                <li class="bar1"><a href="index.php">Accueil</a></li>
                <li class="bar2"><a href="page_evenement.php">Evènements</a></li>
                <li class="bar3"><a href="page_boiteidee.php">Boîte à idée</a></li>
                <li class="bar4"><a href="#association">Associations</a></li>
                <li class="bar5"><a href="#bde">BDE</a></li>
                <li class="bar6"><a href="#galerie">Galerie</a></li>
                <?php
                    if (isset($_SESSION['id'])) {
                    if ($_SESSION['id'] == 3) { ?>
                <li><a href="formereport.php">Signaler</a></li>
                   <?php
                                              }}?>
            </ul>
            </div>
