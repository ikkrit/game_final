<?php

    require "Player.php";
    require "Enemy.php";

    $enemy = new Enemy(4);

    echo $enemy->enemy_description();
?>