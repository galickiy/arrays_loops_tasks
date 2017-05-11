<?php
/**
 * 18. Составьте массив дней недели.
 * С помощью цикла foreach выведите все дни недели, выходные дни следует вывести жирным.
 */

$arr = array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday');
$sat = 'Saturday';
$sun = 'Sunday';

foreach ($arr as $item){
    if($sat == $item || $sun == $item){
        echo "<b>".$item."</b>";
    }
    else{
        echo $item;
    }
}


