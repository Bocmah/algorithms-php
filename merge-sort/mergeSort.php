<?php

/**
 * Return a sorted array
 *
 * @param array $arr
 * @return array
 */
function mergeSort(array $arr): array
{
    // Base case
    if (count($arr) === 1) {
        return $arr;
    }

    // Middle of the $arr
    $mid = floor(count($arr)/2);

    // Sub-array consisting of elements to the left of $mid
    $leftSubArray =  array_slice($arr, 0, $mid);

    // Sub-array consisting of elements to the right of $mid
    $rightSubArray = array_slice($arr, $mid);


    // Recursively sort the arrays
    $leftSubArray = mergeSort($leftSubArray);
    $rightSubArray = mergeSort($rightSubArray);

    return merge($leftSubArray, $rightSubArray);
}

// Merge $left array with $right array
function merge(array $left, array $right): array
{
    $resultArray = [];

    while (count($left) > 0 && count($right) > 0) {
        if ($left[0] > $right[0]) {
            $resultArray[] = $right[0];
            $right = array_slice($right, 1);
        } else {
            $resultArray[] = $left[0];
            $left = array_slice($left, 1);
        }
    }

    while (count($left) > 0) {
        $resultArray[] = $left[0];
        $left = array_slice($left, 1);
    }

    while (count($right) > 0) {
        $resultArray[] = $right[0];
        $right = array_slice($right, 1);
    }

    return $resultArray;
}

