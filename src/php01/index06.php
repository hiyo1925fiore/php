<?php
$i = 0;
$circle = "●●●●●";

while ($i <= 10) {
    if ($i === 5) {
        break;
    }
    echo $circle . '<br>';
    $i++;
}