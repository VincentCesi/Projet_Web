<div id="bde">
<?php



    echo $_SESSION['id'];
    include('connexiondb.php');
    $requeteUsers = $bdd->prepare('SELECT * FROM users WHERE ID = :id');
    $requeteUsers->bindValue(':id', $id, PDO::PARAM_STR);
    $requeteUsers->execute();
    $userinfo = $requeteUsers->fetch();
    echo $userinfo['Email'];



?>

            <img src="images/logos/ExiaLogo.png" class="img" />

            <div>
                <h1>BDE Exia PAU</h1>
                <input class="imagef" type="image" alt="facebook" src="images/logos/facebook-770688_960_720.png">
                <input class="imaget" type="image" alt="twitter" src="images/logos/Twitter_Bird.svg.png">
                <input class="imaged" type="image" alt="discord" src="images/logos/discord-new-logo.png">
            </div>

            <img src="images/logos/LogoBDExiaBlack_2.png" class="img" />
</div>
