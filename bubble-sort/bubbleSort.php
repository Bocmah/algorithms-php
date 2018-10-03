<?php

/**
 * Return a sorted array
 *
 * @param array $arr
 * @return array
 */
function bubbleSort(array $arr): array
{
    $arrLength = count($arr);

    for ($i = 0; $i <= $arrLength - 1; $i++) {
        for ($j = 0; $j < $arrLength - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j+1]) {
                // Performing the swap if the current value is greater than the next value
                $temp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $temp;
            }
        }
    }

    return $arr;
}
