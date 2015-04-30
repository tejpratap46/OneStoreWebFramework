<?php
 
require('astar.php');
 
$gmap = array(
array(6, 5, 6, 4, 6, 1, 2, 6, 9, 6, 6, 5, 6, 4, 6, 1, 2, 6, 9, 6),
array(8, 5, 3, 2, 9, 9, 3, 2, 4, 7, 8, 5, 3, 2, 9, 9, 3, 2, 4, 7),
array(4, 8, 7, 7, 3, 5, 2, 8, 3, 5, 4, 8, 7, 7, 3, 5, 2, 8, 3, 5),
array(7, 5, 5, 8, 7, 7, 8, 4, 8, 5, 7, 5, 5, 8, 7, 7, 8, 4, 8, 5),
array(4, 5, 1, 6, 4, 6, 9, 3, 8, 1, 4, 5, 1, 6, 4, 6, 9, 3, 8, 1),
array(4, 6, 6, 4, 2, 7, 8, 8, 2, 2, 4, 6, 6, 4, 2, 7, 8, 8, 2, 2),
array(9, 4, 4, 5, 8, 4, 9, 5, 5, 2, 9, 4, 4, 5, 8, 4, 9, 5, 5, 2),
array(2, 9, 4, 9, 4, 8, 4, 1, 4, 6, 2, 9, 4, 9, 4, 8, 4, 1, 4, 6),
array(5, 8, 1, 2, 2, 2, 9, 1, 6, 9, 5, 8, 1, 2, 2, 2, 9, 1, 6, 9),
array(8, 9, 2, 7, 5, 1, 2, 9, 8, 9, 8, 9, 2, 7, 5, 1, 2, 9, 8, 9),
array(6, 5, 6, 4, 6, 1, 2, 6, 9, 6, 6, 5, 6, 4, 6, 1, 2, 6, 9, 6),
array(8, 5, 3, 2, 9, 9, 3, 2, 4, 7, 8, 5, 3, 2, 9, 9, 3, 2, 4, 7),
array(4, 8, 7, 7, 3, 5, 2, 8, 3, 5, 4, 8, 7, 7, 3, 5, 2, 8, 3, 5),
array(7, 5, 5, 8, 7, 7, 8, 4, 8, 5, 7, 5, 5, 8, 7, 7, 8, 4, 8, 5),
array(4, 5, 1, 6, 4, 6, 9, 3, 8, 1, 4, 5, 1, 6, 4, 6, 9, 3, 8, 1),
array(4, 6, 6, 4, 2, 7, 8, 8, 2, 2, 4, 6, 6, 4, 2, 7, 8, 8, 2, 2),
array(9, 4, 4, 5, 8, 4, 9, 5, 5, 2, 9, 4, 4, 5, 8, 4, 9, 5, 5, 2),
array(2, 9, 4, 9, 4, 8, 4, 1, 4, 6, 2, 9, 4, 9, 4, 8, 4, 1, 4, 6),
array(5, 8, 1, 2, 2, 2, 9, 1, 6, 9, 5, 8, 1, 2, 2, 2, 9, 1, 6, 9),
array(8, 9, 2, 7, 5, 1, 2, 9, 8, 9, 8, 9, 2, 7, 5, 1, 2, 9, 8, 9),
array(6, 5, 6, 4, 6, 1, 2, 6, 9, 6, 6, 5, 6, 4, 6, 1, 2, 6, 9, 6),
array(8, 5, 3, 2, 9, 9, 3, 2, 4, 7, 8, 5, 3, 2, 9, 9, 3, 2, 4, 7),
array(4, 8, 7, 7, 3, 5, 2, 8, 3, 5, 4, 8, 7, 7, 3, 5, 2, 8, 3, 5),
array(7, 5, 5, 8, 7, 7, 8, 4, 8, 5, 7, 5, 5, 8, 7, 7, 8, 4, 8, 5),
array(4, 5, 1, 6, 4, 6, 9, 3, 8, 1, 4, 5, 1, 6, 4, 6, 9, 3, 8, 1),
array(4, 6, 6, 4, 2, 7, 8, 8, 2, 2, 4, 6, 6, 4, 2, 7, 8, 8, 2, 2),
array(9, 4, 4, 5, 8, 4, 9, 5, 5, 2, 9, 4, 4, 5, 8, 4, 9, 5, 5, 2),
array(2, 9, 4, 9, 4, 8, 4, 1, 4, 6, 2, 9, 4, 9, 4, 8, 4, 1, 4, 6),
array(5, 8, 1, 2, 2, 2, 9, 1, 6, 9, 5, 8, 1, 2, 2, 2, 9, 1, 6, 9),
array(8, 9, 2, 7, 5, 1, 2, 9, 8, 9, 8, 9, 2, 7, 5, 1, 2, 9, 8, 9),
array(6, 5, 6, 4, 6, 1, 2, 6, 9, 6, 6, 5, 6, 4, 6, 1, 2, 6, 9, 6),
array(8, 5, 3, 2, 9, 9, 3, 2, 4, 7, 8, 5, 3, 2, 9, 9, 3, 2, 4, 7),
array(4, 8, 7, 7, 3, 5, 2, 8, 3, 5, 4, 8, 7, 7, 3, 5, 2, 8, 3, 5),
array(7, 5, 5, 8, 7, 7, 8, 4, 8, 5, 7, 5, 5, 8, 7, 7, 8, 4, 8, 5),
array(4, 5, 1, 6, 4, 6, 9, 3, 8, 1, 4, 5, 1, 6, 4, 6, 9, 3, 8, 1),
array(4, 6, 6, 4, 2, 7, 8, 8, 2, 2, 4, 6, 6, 4, 2, 7, 8, 8, 2, 2),
array(9, 4, 4, 5, 8, 4, 9, 5, 5, 2, 9, 4, 4, 5, 8, 4, 9, 5, 5, 2),
array(2, 9, 4, 9, 4, 8, 4, 1, 4, 6, 2, 9, 4, 9, 4, 8, 4, 1, 4, 6),
array(5, 8, 1, 2, 2, 2, 9, 1, 6, 9, 5, 8, 1, 2, 2, 2, 9, 1, 6, 9),
array(8, 9, 2, 7, 5, 1, 2, 9, 8, 9, 8, 9, 2, 7, 5, 1, 2, 9, 8, 9),
);
 
$map = $queue = $visited = array();
$result = findLowest(array(0, 0, 19, 39), $gmap);
 
print_r($result);