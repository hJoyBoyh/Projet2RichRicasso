<?php

?>
<div id="user-parametre">
    <div class="user-connexion">
        <li class="exit-parametre">X(close)</li>
        <?php
        if (!isset($_SESSION['authentifie'])) {
            echo '<li><a href="connexion.php">Connection</a></li>';
        } else {
            echo '<li><a href="logout.php">Deconnection</a></li>';
        }
        ?>

    </div>
    <div class="user-panel">



        <?php


        if (isset($_SESSION['authentifie']) && isset($_SESSION['user'])) {
            $users = $_SESSION['user'];
            echo '
                <div class="user-face">
                <img src="./img/user2.png" alt="user" class="user-icon">
                </div>
                <div class="user-info">
                <p class="user-name">' . $users['nom'] . '</p>
                <p class="user-email">' . $users['courriel'] . '</p>
                <p class="user-profil"><a href="profil.php">Mon profil</a></p>
                </div>
                ';
        }
        ?>


    </div>
</div>