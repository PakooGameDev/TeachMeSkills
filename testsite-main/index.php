<?php
function getMax(float $a, float $b)
{
    switch ($a) {
        case $a > $b:
            return $a;
        case $a < $b:
            return $b;
        default:
            return $a;
    }
}

echo getMax(6.5, 6.1)
?>