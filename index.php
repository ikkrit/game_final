<?php

    require "Function.php";
    require "constants/constPresent.php";
    require "constants/constGame.php";
    require "constants/constFinal.php";

    // START GAME

    $line = "-----------------------------------------------------------------------------\n";

    echo $line;
    echo PRESENT_01;
    echo $line;
    echo PRESENT_02;
    echo PRESENT_CHOICE_01;
    echo PRESENT_OR;
    echo PRESENT_CHOICE_02;
    $choice = readline();
    choice_start($choice);
    echo $line;
    echo PLAYER_CHOICE_PRESENT;
    echo PLAYER_CHOICE_NAME;
    $name = readline();
    echo PLAYER_CHOICE_PSEUDO;
    $pseudo = readline();
    pseudo_verif($pseudo);
?>