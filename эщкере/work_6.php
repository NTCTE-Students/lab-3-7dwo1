<?php

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$uniq = array_reverse($numbers);

$blooba = array_merge($numbers, $uniq);

foreach($blooba as $number) {
    print("{$number}<br>");
}