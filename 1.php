<?php
/**
 * 1. Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'.
 * С помощью цикла foreach выведите эти слова в столбик.
 */

$arr = array('html', 'css', 'php', 'js', 'jq');
    foreach($arr as $item){
    echo $item."<br>";
    }