<!DOCTYPE html>
<html lang=en>

<head>
    <meta charset="UTF-8">
    <link href="CSS/Style.css" rel=stylesheet type="text/css" />
    <title>Tugas Mingguan 3 PAW</title>
    <?php
        $konektor = new PDO("mysql:host=localhost;dbname=puppies","root","");
    
        if(isset($_POST["Submit"]))
        {
            $kueri = $konektor->prepare("INSERT INTO animals (PuppyName, BreedID, Description, Price, Picture) VALUES (:puppyname, :breedid, :description, :price, :picture)");
            $kueri->bindValue(":puppyname",$_POST["PuppyName"]);
            $kueri->bindValue(":breedid",$_POST["BreedID"]);
            $kueri->bindValue(":description",$_POST["Description"]);
            $kueri->bindValue(":price",$_POST["Price"]);
            $kueri->bindValue(":picture",$_POST["Picture"]);
            $kueri->execute();
            header("Location: http://localhost/PAW2018/TugasMingguan_Pratikum/TugasMingguan03/TampilSuccess.php");
            exit();
        }
    ?>
</head>

<body>
    <div class="content">
        <form method="POST" action="addPuppy.php" name="formAddPuppy">
            <fieldset>
                <legend>Animals Details</legend>
                <div class="row">
                    <div class="column">
                        <label for="PuppyName">Puppy Name</label>
                    </div>
                    <div class="column">
                        <input type="text" id="PuppyName" name="PuppyName" value="<?php if(isset($_POST["PuppyName"])) echo htmlspecialchars($_POST["PuppyName"])?>" />
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <label for="BreedID">Breed ID</label>
                    </div>
                    <div class="column">
                        <select  id="BreedID" name="BreedID">
                            <?php
                                $kueri = $konektor->query("SELECT Breed, BreedName FROM breeds");
                                foreach ($kueri as $stt)
                                {
                                    echo "<option value=\"{$stt['Breed']}\">{$stt['BreedName']}</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <label for="Description">Description</label>
                    </div>
                    <div class="column">
                        <input type="text" id="Description" name="Description" value="<?php if(isset($_POST["Description"])) echo htmlspecialchars($_POST["Description"])?>">
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <label for="Price">Price</label>
                    </div>
                    <div class="column">
                        <input type="text" id="Price" name="Price" value="<?php if(isset($_POST["Price"])) echo htmlspecialchars($_POST["Price"])?>">
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <label for="Picture">Picture</label>
                    </div>
                    <div class="column">
                        <input type="text" id="Picture" name="Picture" value="<?php if(isset($_POST["Picture"])) echo htmlspecialchars($_POST["Picture"])?>">
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        &nbsp;
                    </div>
                    <div class="column">
                        <input type="submit" value="Submit" name="Submit">
                        <input type="reset" value="Reset" name="Reset">
                    </div>
                    
                </div>
            </fieldset>
        </form>
    </div>
</body>
