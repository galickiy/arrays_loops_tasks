<?php
/**
 * 26. Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand).
 * Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные
 * индексы.
 * После вывести на экран элементы, которые больше ноля и у которых не парный индекс.
 */

$arr = array();
for($i=0;$i<50;$i++){
    $arr[$i] = rand(1,100);
}
$sum_par = 0; // сумма парных чисел
$sum_n_par = 0; // сумма не парных чисел
$arr_par = array(); // массив парных чисел
$arr_n_par = array(); // массив не парных чисел

foreach ($arr as $key => $item){
    if((($key%2)==0) && ($key != 0)){
    echo $sum_par+=$item;
    echo $arr_par[$key] = $item;
    }
    else{
        $sum_n_par+=$item;
        $arr_n_par[$key] = $item;
    }
}
