<?php
function getTriangleArea($baseline,$height)
{
    $total = ($baseline * $height) /2;
    echo "三角形の面積は" . $total . "です";
}

function getSquareArea($baseline,$height)
{
    $total = $baseline * $height;
    echo "四角形の面積は" . $total . "です";
}

function getTrapezoidArea($overline,$underline,$height)
{
    $total = ($overline + $underline) * $height /2;
    echo "台形の面積は" . $total . "です";
}

echo getTriangleArea(4,6) . '<br>';
echo getSquareArea(4,6) . '<br>';
echo getTrapezoidArea(4,6,4) . '<br>';