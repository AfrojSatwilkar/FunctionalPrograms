<?php
function isPrime($num) {
    for($x = 2; $x < $num; $x++) {
        if($num % $x == 0) {
		    return 0;
		}
    }
    return 1;
}
$a = isPrime(51);
if ($a == 0)
    echo "This is not a Prime Number";
else
    echo "This is a Prime Number";
?>