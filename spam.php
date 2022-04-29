<?php

function spame($int){
    for ($i=1; $i <= $int ; $i++) {
        if(!file_exists("$i.txt") || !file_exists($i)){
            mkdir($i);
            $fp = fopen("$i.txt", "w");
            fwrite($fp,"$i\n");
            fclose($fp);
            opendir($i);
            echo "[$i] à été créer\n";
            usleep(900);
        } else {
            // echo "Déjà crée\n";
            continue;
        }
    }
}

spame(100);
?>