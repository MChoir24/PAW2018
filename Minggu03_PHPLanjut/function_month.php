<?php
function display_month($month, $year)
{
    $first_day_of_the_month = mktime(0, 0, 0, $month, 1, $year);
    echo "$first_day_of_the_month<br>";
    $first_day_of_week = date("w", $first_day_of_the_month);
    echo "$first_day_of_week<br>";
    $days_in_month = date("t", $first_day_of_the_month);
    echo "$days_in_month</br>";
    $month_name = date("F", $first_day_of_the_month);
    echo "$month_name</br>";
    $today = date("d");
    echo "$today</br>";
    $month_now = date("m");
    echo "$month_now</br>";
    $year_now = date("Y");
    echo "$year_now</br>";
}
?>
