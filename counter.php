<?php

function dateDiff($time_1, $time_2)
{
    $temp = explode(' ', $time_1);
    $temp1 = explode('-', $temp[0]);
    $temp2 = explode(':', $temp[1]);
    $time_1 = mktime($temp2[0], $temp2[1], $temp2[2], $temp1[1], $temp1[2], $temp1[0]);

    $temp = explode(' ', $time_2);
    $temp1 = explode('-', $temp[0]);
    $temp2 = explode(':', $temp[1]);
    $time_2 = mktime($temp2[0], $temp2[1], $temp2[2], $temp1[1], $temp1[2], $temp1[0]);

    $sec = ($time_2 - $time_1);
    $min = ($sec / 60);
    return floor($min / 60);
}

$file = file("counter.txt");
$num = $file[0];
$date_start_str = $file[1];

$fp = fopen('counter.txt', 'r+');

//$str = strtotime( $date_start_str ) + 2 * 86400;
//$date_end = date("Y-m-d H:i:s", $str);

if (date("Y-m-d H:i:s") < $date_start_str) {
    echo date("Y-m-d H:i:s").' - '.$date_start_str.' = '.dateDiff(date("Y-m-d H:i:s"), $date_start_str).' hours';
    $num = round(dateDiff(date("Y-m-d H:i:s"), $date_start_str) * (200 / 48));
} else $num = 0;

if ($num <= 0) {
    $new_num = '200';
    $new_date = date("Y-m-d H:i:s", strtotime("+2 day"));
} else {
    $new_num = $num;
    $new_date = $date_start_str;
}
echo $num;
fseek($fp, 0);
fwrite($fp, $new_num . "\r\n");
fwrite($fp, $new_date);
fclose($fp);

?>