<?php

    function display_month($month, $year)
    {
        $first_day_of_the_month = mktime(0, 0, 0, $month, 1, $year);
        echo($first_day_of_the_month."</br>");
        $first_day_of_week = date("w", $first_day_of_the_month);
        echo "$first_day_of_week</br>";
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
        $color = "white";
        echo "$color";

        echo "<h2>$month_name $year</h2>";
//        $bulan = array("Januari", "Februari","Maret","April","Mei", "Juni","Juli","Agustus","September", "Oktober", "November", "Desember");
//        echo "<h2>".$bulan[$month-1]." ".$year."</h2>";
        echo "
            <table border=\"1\">
            <tr>
                <th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th>
            </tr>
        ";
        if ($first_day_of_week > 0)
        {
            echo "<td colspan=\"$first_day_of_week\">&nbsp;</td>";
        }
        for ($day_of_month=$first_day_of_week; $day_of_month <= ($days_in_month+$first_day_of_week-1); $day_of_month++)
        {
            if ((($day_of_month-$first_day_of_week+1) == $today) and ($month == $month_now) and ($year_now == $year))
            {
                $color = "yellow";
            }
            else
            {
                $color = "white";
            }
            if ($day_of_month % 7 == 0)
            {
                echo "<tr><td bgcolor=\"$color\">".($day_of_month-$first_day_of_week+1)."</td>";
            }
            else
            {
                 echo "<td bgcolor=\"$color\">".($day_of_month-$first_day_of_week+1)."</td>";
            }
        }
        echo "</table>";

    }
?>
