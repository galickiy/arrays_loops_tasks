<?php
/**
 * 17.Составьте массив месяцев.
 * С помощью цикла foreach выведите все месяцы, а текущий месяц выведите жирным.
 * Текущий месяц должен храниться в переменной $month.
 */

$arr = array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug',"Sep",'Oct','Nov','Dec');
$month = 'Apr';
foreach ($arr as $item){
    if($month == $item){
        echo "<b>".$item."</b>";
    }
    else {
        echo $item;
    }
}