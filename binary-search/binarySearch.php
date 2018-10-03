<?php

/**
 * Return an index of $needle if present, null otherwise
 *
 * @param array $haystack
 * @param $needle
 * @return int|null
 */
function binarySearch(array $haystack, $needle): ?int
{
    // Setting initial borders for the search
    $low = 0;
    $high = count($haystack) - 1;

    while ($low <= $high) {
        $mid = floor(($low + $high)/2);
        $guess = $haystack[$mid];

        // Shrinking the search scope until the $guess is right
        if ($guess === $needle) {
            return $mid;
        } elseif ($guess < $needle) {
            // Shrink the border so the lowest index is a middle of the current search scope + 1
            $low = $mid + 1;
        } else {
            // Shrink the border so the highest index is a middle of the current search scope - 1
            $high = $mid - 1;
        }
    }

    // Return null if the search item is not in the array
    return null;
}

