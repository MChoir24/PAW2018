<?php
function validateName (&$errors, $field_list, $field_name, &$error_confirm)
{
    $pattern = "/^[a-z A-Z'-]+$/"; // format surname (alfabet)
    
    if (!isset($field_list[$field_name]) || empty($field_list[$field_name]))
    {   
        $errors = "field is required";
        $error_confirm = true;
    }
    else if (!preg_match($pattern, $field_list[$field_name]))
    {
        $errors = "must contain alphabets only";
        $error_confirm = true;
    }
        
    
}

function validateEmail (&$errors, $field_list, $field_name, &$error_confirm)
{
    if (!isset($field_list[$field_name]) || empty($field_list[$field_name]))
    {   
        $errors = "field is required";
        $error_confirm = true;
    }
    else if (filter_var($field_list[$field_name], FILTER_VALIDATE_EMAIL) == false)
    {
        $errors = "invalid email address";
        $error_confirm = true;
    }   
}

function validateTelp (&$errors, $field_list, $field_name, &$error_confirm)
{
    $pattern = "/^[0-9]+$/"; // format mobile number
    
    if (!isset($field_list[$field_name]) || empty($field_list[$field_name]))
    {   
        $errors = "field is required";
        $error_confirm = true;
    }
    else if (!preg_match($pattern, $field_list[$field_name]))
    {
        $errors = "must contain numerics only";
        $error_confirm = true;
    }
    else if (strlen($field_list[$field_name]) < 10)
    {
        $errors = "mobile number is less than 10 digits long";
        $error_confirm = true;
    }     
}
function validatePassword (&$errors, $field_list, $field_name, &$error_confirm)
{
    $pattern = "/^.*(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/";// format password
    
    if (!isset($field_list[$field_name]) || empty($field_list[$field_name]))
    {   
        $errors = "field is required";
        $error_confirm = true;
    }
    else if (!preg_match($pattern, $field_list[$field_name]))
    {
        $errors = "must contain characters with alphabets (both lowercase & uppercase) & numerics ";
        $error_confirm = true;
    }
    else if (strlen($field_list[$field_name]) < 8)
    {
        $errors = "password is less than 8 character long";
        $error_confirm = true;
    } 
        
}
function validateCPassword (&$errors, $field_list, $field_name, &$error_confirm, &$password)
{ 
    if (!isset($field_list[$field_name]) || empty($field_list[$field_name]))
    {   
        $errors = "field is required";
        $error_confirm = true;
    }
    else if ( $field_list[$field_name] != $password)
    {
        $errors = "passwords do not match";
        $error_confirm = true;
    }
        
}

?>
