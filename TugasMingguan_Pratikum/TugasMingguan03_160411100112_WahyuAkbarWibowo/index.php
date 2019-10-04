<!DOCTYPE html>
<html lang=en>

<head>
    <meta charset="UTF-8">
    <link href="CSS/Style.css" rel=stylesheet type="text/css" />
    <title>Tugas Mingguan 3 PAW</title>
    <?php
        $konektor = new PDO("mysql:host=localhost;dbname=puppies","root","");
    ?>
</head>

<body>
    <div class="content">
        <h2>Puppies Data</h2>
        <div class="puppy-list">
            <table class="">
                <tr>
                    <th style="width:15%;">Puppy Name</th>
                    <th style="width:15%;">Breed Name</th>
                    <th style="width:30%;">Description</th>
                    <th style="width:20%;">Price</th>
                    <th style="width:20%;">Picture</th>
                </tr>
                <?php 
        
                    $kueri = $konektor->query("SELECT a.PuppyName, b.BreedName, a.Description, a.Price, a.Picture FROM animals a, breeds b WHERE a.BreedID = b.Breed;");
                    foreach ($kueri as $statement)
                    {
                        echo "<tr>";
                        echo "<td>{$statement['PuppyName']}</td>";
                        echo "<td>{$statement['BreedName']}</td>";
                        echo "<td>{$statement['Description']}</td>";
                        echo "<td>$".$statement['Price']."</td>";
                        echo "<td><img src=\"puppies_images/{$statement['Picture']}\" alt=\"Gambar Puppy\"/></td>";
                        echo "</tr>";
                    }
        
                ?>
            </table>
        </div>
        <div class="">
            <a href="addPuppy.php" >Tambah Data Puppy</a>
        </div>
    </div>
    <?php 
        
//        $kueri = $konektor->query("SELECT a.PuppyName, b.Breed, a.Description, a.Price, a.Picture FROM animals a, breeds b WHERE a.BreedID = b.Breed;");
        
    ?>


</body>

</html>
