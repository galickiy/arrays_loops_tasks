<?php
/**
 * 8. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9.
 * С помощью цикла foreach создайте строку '­1­2­3­4­5­6­7­8­9­'. Циклы while и for
 */
$arr = array(1,2,3,4,5,6,7,8,9);
$str = '';
$count_arr= count($arr);
$arr = array_pad($arr,$count_arr+1,'');
foreach ($arr as $item){
    $str.='-'.$item;

}
echo $str;