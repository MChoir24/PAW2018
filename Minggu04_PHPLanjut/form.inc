<form name="formIsian" action="latihanForm3.php" method="POST">
    <div >
        <label for="surname">Nama:</label>
        <input type="text" name="surname" value="<?php if(isset($_POST["surname"])) echo
            htmlspecialchars($_POST["surname"])?>" />
    </div>
    <div >
        <label> &nbsp;</label>
        <input type="submit" name="" value="Submit" >
    </div>
</form>