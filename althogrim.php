<?php
$arr = explode(' ',readline());
$max = max($arr);
$min = min($arr);
$sum = array_sum($arr);
echo $sum - $max, " " ,$sum - $min;