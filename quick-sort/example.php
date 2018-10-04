<?php

require "quickSort.php";

$array = [5, 98, 54, 4, 1, 25, 76, 45, 34, 23];

echo implode(", ", quickSort($array));