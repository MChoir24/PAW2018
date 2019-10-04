<!DOCTYPE html>
<html lang=en>

<head>
    <meta charset="UTF-8">
    <link href="CSS/Style.css" rel=stylesheet type="text/css" />
    <title>Tugas Mingguan 2 PAW</title>
</head>

<body>
    <div class="form">
        <h2>Registration Form</h2>

        <?php
            $error_surname = "";
            $error_firstname = "";
            $error_email = "";
            $error_telp = "";
            $error_password = "";
            $error_cpassword = "";
            $error_confirm = false;
            
            if (isset($_POST["surname"]) || isset($_POST["firstname"]) )
            {
                require "Validate.php";
                validateName($error_surname, $_POST, "surname", $error_confirm);
                validateName($error_firstname, $_POST, "firstname", $error_confirm);
                validateEmail($error_email, $_POST, "email", $error_confirm);
                validateTelp($error_telp, $_POST, "telp", $error_confirm);
                validatePassword($error_password, $_POST, "password", $error_confirm);
                validateCPassword($error_cpassword, $_POST, "cpassword", $error_confirm, $_POST["password"]);
                if ($error_confirm)
                {
                    include "Form.php";
                }
                else
                {
                   include "TampilanSuccess.php";
                }
            }
            else
                include "Form.php";
            
        ?>
    </div>

</body>

</html>
