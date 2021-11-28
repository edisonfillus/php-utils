<?php

function rotateLeft(array $a, int $d): array {

    return [
        ...array_slice($a, ($d % sizeof($a)), sizeof($a)),
        ...array_slice($a, 0, ($d % sizeof($a)))
    ];
}

echo print_r(rotateLeft([1,2,3,4,5], 2));

?>
