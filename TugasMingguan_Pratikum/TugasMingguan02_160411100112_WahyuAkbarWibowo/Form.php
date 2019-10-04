<form name="formIsian" action="TugasMingguan2.php" method="POST">
    <fieldset>
        <legend>Person Details</legend>
        <div class="row">
            <div class="column label">
                <label for="surname">Surname</label>
            </div>
            <div class="column" >
                <input id="surname" type="text" name="surname" value="<?php if(isset($_POST["surname"])) echo htmlspecialchars($_POST["surname"])?>" />
            </div>
            <div class="column teksMerah">
                <span class=""><?php echo $error_surname ?></span>
            </div>
        </div>
        <div class="row">
            <div class="column label">
                <label for="firstname">Firstname</label>
            </div>
            <div class="column" >
                <input id="firstname" type="text" name="firstname" value="<?php if(isset($_POST["firstname"])) echo htmlspecialchars($_POST["firstname"])?>" />
            </div>
            <div class="column teksMerah">
                <span class=""><?php echo $error_firstname ?></span>
            </div>
        </div>
        <div class="row">
            <div class="column label">
                <label for="email">Email address</label>
            </div>
            <div class="column" >
                <input id="email" type="text" name="email" value="<?php if(isset($_POST["email"])) echo htmlspecialchars($_POST["email"])?>" />
            </div>
            <div class="column teksMerah">
                <span class=""><?php echo $error_email ?></span>
            </div>
        </div>
        <div class="row">
            <div class="column label">
                <label for="telp">Mobile number</label>
            </div>
            <div class="column" >
                <input id="telp" type="text" name="telp" value="<?php if(isset($_POST["telp"])) echo htmlspecialchars($_POST["telp"])?>" />
            </div>
            <div class="column teksMerah">
                <span class=""><?php echo $error_telp ?></span>
            </div>
        </div>
        <div class="row">
            <div class="column label">
                <label for="password">Password</label>
            </div>
            <div class="column" >
                <input id="password" type="password" name="password" value="<?php if(isset($_POST["password"])) echo htmlspecialchars($_POST["password"])?>" />
            </div>
            <div class="column teksMerah">
                <span class=""><?php echo $error_password ?></span>
            </div>
        </div>
        <div class="row">
            <div class="column label">
                <label for="cpassword">Confirm Password</label>
            </div>
            <div class="column">
                <input id="cpassword" type="password" name="cpassword" value="<?php if(isset($_POST["cpassword"])) echo htmlspecialchars($_POST["cpassword"])?>" />
            </div>
            <div class="column teksMerah">
                <span ><?php echo $error_cpassword ?></span>
            </div>
        </div>
        <div class="row">
            <div class="column label">
                <label> &nbsp;</label>
            </div>
            <div class="column" >
                <input type="submit" name="submit" value="Registration">
                <input type="reset" name="reset" value="Reset">
            </div>
        </div>

    </fieldset>
</form>
