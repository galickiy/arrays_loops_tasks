<?php
/**
 * 19. Составьте массив дней недели.
 * С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом.
 * Текущий день должен храниться в переменной $day.
 */

$arr = array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday');
$day = 'Friday';

foreach ($arr as $item){
    if($day == $item){
        echo "<i>".$item."</i>";
    }
    else{
        echo $item;
    }
}
