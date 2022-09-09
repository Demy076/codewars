<?php
function solution($roman)
{
    $roman = strtoupper($roman);
    $numbers = array("M" => 1000, "CM" => 900, "D" => 500, "CD" => 400, "C" => 100, "XC" => 90, "L" => 50, "XL" => 40, "X" => 10, "IX" => 9, "V" => 5, "IV" => 4, "I" => 1);
    $result = 0;
    foreach ($numbers as $rom => $arb) {
        while (strpos($roman, $rom) === 0) {
            $result += $arb;
            $roman = substr($roman, strlen($rom));
        }
    }
    return $result;
}
