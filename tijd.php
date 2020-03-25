<?php

$tijd = readline("");
$letter = strpos($tijd, "s");

if ($letter) {
    echo str_replace("s", "seconde", $tijd);
}else{
    echo "geen tijd gevonden";
}

