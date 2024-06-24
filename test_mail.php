<?php

    if(mail("mail destination","sujet test","message test ")){
        echo("Mail envoyé");
    } else {
        echo("Mail non envoyé");
    }

?>