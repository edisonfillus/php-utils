<?php

require_once 'vendor/autoload.php';

use Ds\Vector;

$vector = new Vector([1, 2, 3, 4, 5, 6]);
print_r(
    $vector
        ->filter(fn ($elem) => $elem % 2 == 0) // only even
        ->map(fn ($elem) => $elem * 2) // multiply by 2
        ->reduce(fn ($elem, $acc) => $elem + $acc, 0) // sum, can also use ->sum()
);
