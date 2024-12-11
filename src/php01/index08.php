<?php
$array = [
    ["Taro",25,"men"],
    ["Jiro",20,"men"],
    ["hanako",16,"women"]
];

foreach ($array as $person) {
    echo $person[0] . '('. $person[1] .'歳' .$person[2] .')';
    echo '<br>';
}