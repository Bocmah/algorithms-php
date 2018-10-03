<?php

/**
 * Return a sorted array
 *
 * @param array $arr
 * @return array
 */
function selectionSort(array $arr): array
{
    $arrLength = count($arr);

    for ($i = 0; $i < $arrLength - 1; $i++) {

        $minIndex = $i;

        // Looking for new $minIndex
        for ($j = $i + 1; $j < $arrLength; $j++) {
            if ($arr[$j] < $arr[$minIndex]) {
                $minIndex = $j;
            }
        }

        // If found swap the new $minIndex with the old one
        if ($minIndex !== $i) {
            $temp = $arr[$minIndex];
            $arr[$minIndex] = $arr[$i];
            $arr[$i] = $temp;
        }
    }

    return $arr;
}