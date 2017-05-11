<?php
/**
 * 22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.
 *
 * xx
 * xxxx
 * xxxxxx
 * xxxxxxxx
 * xxxxxxxxxx
 */

$x=1;
$str='x';
while($x<=5){
    $str.="xx";
    echo $str."<br>";
    $x++;
}
