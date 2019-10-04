<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Tugas Mingguan 1 PAW</title>
    <link href="CSS/style.css" rel=stylesheet type="text/css" />
    <?php
            include "fungsiDisplayMonth.php";
        ?>
</head>

<body>
    <table>
        <tr>
            <th colspan="3">
                <p class="judul" style="font-size:30px">2019 CALENDER</p>
            </th>
        </tr>
        <tr>
            <td>
                <?php display_month(1, 2019) ?>
            </td>
            <td>
                <?php display_month(2, 2019) ?>
            </td>
            <td>
                <?php display_month(3, 2019) ?>
            </td>
        </tr>

        <tr>
            <td>
                <?php display_month(4, 2019) ?>
            </td>
            <td>
                <?php display_month(5, 2019) ?>
            </td>
            <td>
                <?php display_month(6, 2019) ?>
            </td>
        </tr>

        <tr>
            <td>
                <?php display_month(7, 2019) ?>
            </td>
            <td>
                <?php display_month(8, 2019) ?>
            </td>
            <td>
                <?php display_month(9, 2019) ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php display_month(10, 2019) ?>
            </td>
            <td>
                <?php display_month(11, 2019) ?>
            </td>
            <td>
                <?php display_month(12, 2019) ?>
            </td>
        </tr>

    </table>

    <div style="background-color:#80ced6;font-family:sans-serif;border:1px solid #80ced6;border-radius:5px;width:63%;">
        <h2 >National Holidays 2019:</h2>
        <table>
            <?php
                foreach ($national_holiday_2019 as $date=>$day)
                {
                    echo "<tr><td >$date</td><td>:</td><td>$day</td></tr>";
                }
            ?>
        </table>
    </div>
</body>

</html>
