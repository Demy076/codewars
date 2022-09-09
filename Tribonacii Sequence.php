<?php
function tribonacci($signature, $n)
{
    if ($n == 0) {
        return [];
    }
    $result = [];
    for ($i = 0; $i < $n; $i++) {
        if ($i < 3) {
            $result[] = $signature[$i];
        } else {
            $result[] = array_sum(array_slice($result, -3));
        }
    }
    return $result;
}
