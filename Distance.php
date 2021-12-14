<?php
class Distance {

    function euclideanDistance($pointX1, $pointX2, $pointY1, $pointY2) {
        echo "Euclidean distance is : " . sqrt(pow($pointX2 - $pointX1, 2) + pow($pointY2 - $pointY1, 2));
    }
}

$distance = new Distance();
$distance->euclideanDistance(2,9,3,7);
?>