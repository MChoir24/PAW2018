<!DOCTYPE html>
<html lang=en>
	<head>
		<meta charset="UTF-8">
		<title>Latihan 01</title>
	</head>
	<body>
		<p><?php echo'<b>Hello World</b>'; ?> </p>
		<table border=1>
			<?php
				echo "<tr><td ></td>";
				for ($i=1; $i<=20; $i++)
				{
					echo "<td bgcolor=yellow align=center>",$i,"</td>";
				}
				echo "</tr>";
				
				for ($i=1; $i<=20; $i++)
				{
                    $color = "yellow";
					echo "<tr><td bgcolor=yellow align=center>",$i,"</td>";
					for ($j=1; $j<=20; $j++)
					{
                        if ($i*$j % 2 == 0){
                                $color="pink";
                            }else{
                                $color="yellow";
                            }
                        
						if ($i==$j)
						{
							echo "<td bgcolor=",$color," align=center>",$i*$j,"</td>";
						}else{
							echo "<td align=center bgcolor=",$color,">",$i*$j,"</td>";
						}
                       
					}
					echo "</tr>";
				}
			?>
            
		</table>
        <?php
            
        ?>
	</body>
</html>
	