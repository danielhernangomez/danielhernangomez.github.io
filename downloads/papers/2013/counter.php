<?php

$hit_count = @file_get_contents('count.txt');
$hit_count++;
@file_put_contents('count.txt', $hit_count);

header('Location: downloads/papers/2013/prb_2013.pdf');
?>
