<?php

/**
 * Basic Quicksort algorithm. Return a sorted array
 *
 * @param array $arr
 * @return array
 */
function quickSort(array $arr): array
{
    $arrLength = count($arr);

    if ($arrLength < 2) return $arr;

    // Choosing first element as pivot
    $pivot = $arr[0];

    $lessThanPivot = [];
    $greaterThanPivot = [];

    // Fulfil lessThan and greaterThan pivot arrays
    for ($i = 1; $i < $arrLength; $i++) {
        $arr[$i] <= $pivot ? $lessThanPivot[] = $arr[$i] : $greaterThanPivot[] = $arr[$i];
    }

    return array_merge(quickSort($lessThanPivot), [$pivot], quickSort($greaterThanPivot));
}

