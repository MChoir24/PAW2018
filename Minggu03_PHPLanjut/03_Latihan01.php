<!DOCTYPE html>
<html lang=en>
	<head>
		<meta charset="UTF-8">
		<title>Latihan 03</title>
	</head>
	<body>
        <h1>Daftar Buah:</h1>
        <ul>
          <?php
            $buah = array('A' => 'Apel', 'J'=>'Jeruk', 'P'=>'Pisang');
            foreach($buah as $indeks => $b)
            {
                echo "<li> $indeks untuk $b </li>";
            }
            ?>  
        </ul>
        
    </body>
</html>