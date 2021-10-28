<?php

$fruit = ['Apple', 'Orange'];
$fruit2 = ['Apple', 'Orange'];

// echo $fruit;

// $string = 'Hmm,sasd,adsasd';

$bool = array_search('Apple', $fruit);

$new = [...$fruit, ...$fruit2];


sort($new);


var_dump($new);

$bool ??  $fruit = $fruit2;


echo ($fruit2);
