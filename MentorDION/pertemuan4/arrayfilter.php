<?php
$array = [1,2,3,4,5,6,7,8,9,0];

// array filter
// yang di return harus false/true
$arrayterfilter = array_filter($array, fn ($elemenArray) => $elemenArray > 4);
$arrayterfilterRIBET = array_filter($array, function ($elemenArray){
    return $elemenArray > 4 && $elemenArray <8;
});

echo "<pre>" .print_r($array, 1). "</pre>";
echo "<pre>" .print_r($arrayterfilter, 1). "</pre>";
echo "<pre>" .print_r($arrayterfilterRIBET, 1). "</pre>";

// array map
// yang di return selain true/false
$array_map = array_map(function ($elemenArray) {
    return $elemenArray * 2;
}, $array);

echo "<pre>" .print_r($array_map, true), "<pre>";
?>