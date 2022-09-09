<?php
function getCount($str)
{
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if (in_array($str[$i], $vowels)) {
            $count++;
        }
    }
    return $count;
}
