<!DOCTYPE html>
<html lang="en">
    <body>
       <?php
            $dbc = new PDO("mysql:host=localhost;dbname=customerdb","root","");
            
            $statement = $dbc->query("select firstname, address from customer where balance>0");
        
            foreach ($statement as $row)
            {
                echo "<h1>{$row['firstname']}</h1>";
                echo "<h3>{$row['address']}</h3>";

            }
        ?>
        <form action="latihan01_05.php" name="inputan" method="get">
            <label for="inputcustomerid" >Customer ID:</label>
            <input type="text" name="inputcustomerid"/>
            <input type="submit" name="" value="Find">
        </form>
    </body>
</html>