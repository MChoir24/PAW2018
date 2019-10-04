
<?php
    $national_holiday_2018 = array("2018-1-1"=>"New Year's Day" ,
                                      "2018-2-16"=>"Chinesse Lunar New Year's Daya",
                                       "2018-3-17"=>"Bali's Day of Silence and Hindu New Year",
                                       "2018-3-30"=>"Good Friday",
                                       "2018-4-13"=>"Ascension of the Prophet Muhammad",
                                       "2018-5-1"=>"International Labor Day",
                                       "2018-5-10"=>"Ascension of Jesus Christ",
                                       "2018-5-29"=>"Waisak Day(Buddha's Anniversary)",
                                       "2018-6-1"=>"Pancasila Day",
                                       "2018-6-11"=>"First Joint Holiday before Idul Fitri",
                                       "2018-6-12"=>"Second Joint Holiday before Idul Fitri",
                                       "2018-6-13"=>"Third Joint Holiday before Idul Fitri",
                                       "2018-6-14"=>"Fourth Joint Holiday before Idul Fitri",
                                       "2018-6-15"=>"Idul Fitri Day 1",
                                       "2018-6-16"=>"Idul Fitri Day 2",
                                       "2018-6-18"=>"First Joint Holiday after Idul Fitri",
                                       "2018-6-19"=>"Second Joint Holiday after Idul Fitri",
                                       "2018-6-20"=>"Third Joint Holiday after Idul Fitri",
                                       "2018-6-27"=>"Regional Election Day",
                                       "2018-8-17"=>"Indonesian Independence Day",
                                       "2018-8-22"=>"Eid al-Adha",
                                       "2018-9-11"=>"Muharram/Islamic New Year",
                                       "2018-11-20"=>"The Prophet Muhammad's Birthday",
                                       "2018-12-24"=>"Chirsmas Eve",
                                       "2018-12-25"=>"Chrismas Day");
    function display_month($month, $year)
    {
        $first_day_of_the_month = mktime(0, 0, 0, $month, 1, $year);
        $first_day_of_week = date("w", $first_day_of_the_month);
        $days_in_month = date("t", $first_day_of_the_month);
        $month_name = date("F", $first_day_of_the_month);
        $today = date("d");
        $month_now = date("m");
        $year_now = date("Y");
        $color = "white";
        global $national_holiday_2018;
        
        
        
        echo "<h3 class=\"judul\">$month_name $year </h3>";
        echo "
            <table style=\"border: 1px solid #80ced6\"> 
            <tr>
                <th class=\"bordergray\">Sun</th><th class=\"bordergray\">Mon</th><th class=\"bordergray\">Tue</th><th class=\"bordergray\">Wed</th><th class=\"bordergray\">Thu</th><th class=\"bordergray\">Fri</th><th class=\"bordergray\">Sat</th>
            </tr>
        ";
        if ($first_day_of_week > 0)
        {
            echo "<tr><td class=\"bordergray\" colspan=\"$first_day_of_week\">&nbsp;</td>";
        }
        else
        {
            echo "<tr><td style=\"border: 1px solid #80ced6;background-color:red\">1</td>";
        }
        for ($day_of_month=$first_day_of_week; $day_of_month <= ($days_in_month+$first_day_of_week-1); $day_of_month++)
        {   
            if ((($day_of_month-$first_day_of_week+1) == $today) and ($month == $month_now) and ($year_now == $year))
            {
                $color = "yellow";
            }
            else
            {
                if ($day_of_month % 7 == 0)$color = "red"; 
                else
                {
                   
                    foreach ($national_holiday_2018 as $date => $day)
                     {
                        $date_now = $day_of_month-$first_day_of_week+1;
                         if ( strtotime($date) == strtotime("$year-$month-$date_now"))
                         {
                             $color="red";
                             break;

                         }
                         else $color="white";

                     }                      
                }     
            }
            if ($day_of_month % 7 == 0)
            {
                if ($day_of_month )
                echo "<tr><td class=\"bordergray teks\" style=\"background-color:$color\">".($day_of_month-$first_day_of_week+1)."</td>";
            }
            else if($day_of_month % 7 == 6)
            {
                 echo "<td class=\"bordergray teks\" style=\"background-color:$color\">".($day_of_month-$first_day_of_week+1)."</td></tr>";
            }
            else 
            {
                echo "<td class=\"bordergray teks\" style=\"background-color:$color\">".($day_of_month-$first_day_of_week+1)."</td>";
            }
            if (($days_in_month+$first_day_of_week-1) == $day_of_month and $day_of_month % 7 != 6)
            {
                $sisa = 6 - (($days_in_month+$first_day_of_week-1) % 7);
                echo "<td class=\"bordergray teks\" colspan=\"$sisa\">&nbsp;</td></tr>";
            }
        }
       
        echo "</table>";
        
        
    }
?>
