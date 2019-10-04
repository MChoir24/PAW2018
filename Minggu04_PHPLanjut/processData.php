<?php
    require "validate.inc";
    $errors = array();
    validateName($errors, $_POST, "surname");
    if ($errors)
    {
        echo "Errors:<br/>";
        foreach ($errors as $field => $error)
            echo "$field $error <br/>";
    }
    else
        echo "Data OK!";

//    if(validateName($_POST, "surname"))
//        echo "Data OK!";
//    else
//        echo "Data invalid";
//    foreach ($_GET as $key => $value)
//    echo "$key => $value <br/>";
?>