<?php

    // FONCTION DE DEMARRAGE
    function choice_start($choice)
    {
        $choice = ucwords($choice);
        if($choice === "A") {
            echo PRESENT_START;
            return true;
        }
        if($choice === "B") {
            exit(PRESENT_END);
        } else {
            return false;
        }
    }

    // PSEUDO VERIF
    function pseudo_verif($pseudo)
    {
        $verif = trim($pseudo);
        if(strlen($verif) > 10) {
            echo PLAYER_CHOICE_PSEUDO_ERROR;
            return false;
        } else {
            $pseudo = $verif;
            return $pseudo;
        }
    }

?>