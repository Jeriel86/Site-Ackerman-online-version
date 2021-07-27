<?php
    /* définition de queldues fonctions */
    //fonction qui retourne un token au hasard (une suite de lettre et de nombres)
    function str_random($length){
        $alphabet = "0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";
        return substr(str_shuffle(str_repeat($alphabet, $length)), 0, $length);
    }


?>