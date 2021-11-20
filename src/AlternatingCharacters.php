<?php

/*
 * Complete the 'alternatingCharacters' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts STRING s as parameter.
 */

function alternatingCharacters($s) {
    $chars = str_split($s);
    $last = $chars[0];
    $deletions = 0;
    for($i = 1 ; $i < sizeof($chars); $i++) {
        $current = $chars[$i];
        if ($current === $last) {
            $deletions++;
        } else {
            $last = $current;
        }
    }
    return $deletions;

}

echo alternatingCharacters("AAABBB");

?>
