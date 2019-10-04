<!DOCTYPE html>
<html lang=en>
	<head>
		<meta charset="UTF-8">
		<title>Latihan 04 Form 3</title>
	</head>
	<body>
        <h2>Form Pendaftaran</h2>
        <?php 
            $errors = array();
            if (isset($_POST["surname"]))
            {
                require "validate.inc";
                validateName($errors, $_POST, "surname");
                if ($errors)
                {
                    echo "<h1> Invalid, correct the following errors:</h1>";
                    foreach ($errors as $field => $error)
                        echo "$field $error</br>";
                    
                    include "form.inc";
                }
                else
                {
                    echo "Form submitted successfully with no errors";
                }
            }
            else
                include "form.inc";
            
        ?>
        
        
    </body>
</html>