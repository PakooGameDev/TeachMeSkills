<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $errors = [];

    $firstName = validateText('firstName', $errors);
    $secondName = validateText('secondName', $errors);
    $email = validateEmail('email', $errors);
    $checkbox = validateCheckbox('checkbox', $errors);

    if(!empty($errors)){
        foreach($errors as $err){
            echo "<span style='color:red;'>$err</span>" . "</br>";
        };
    } else {
        echo "$firstName, $secondName, $email, $checkbox";
    }
}

function validateText($fieldName, &$errors)
{
    if (empty(trim($_POST[$fieldName])) && isset($_POST[$fieldName])) {
        $errors[] = "$fieldName: Field is invaled";
        return false;
    } elseif (!preg_match('/^[a-zA-Z]{2,25}$/',$_POST[$fieldName])) {
        $errors[] = "$fieldName: Only letters allowed and the length should be from 2 to 25";
        return false;
    }
    return $_POST[$fieldName];
}

function validateEmail($fieldName,  &$errors)
{
    return filter_var($_POST[$fieldName], FILTER_VALIDATE_EMAIL) ? $_POST[$fieldName] : false;
    if (empty($_POST["email"])) {
        $errors[] = "$fieldName: Email is required";
        return false;
    } elseif (!filter_var($_POST[$fieldName], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "$fieldName: Invalid email format";
        return false;
    }
}

function validateCheckbox($fieldName, &$errors)
{
    return isset($_POST[$fieldName]) ? true : $errors[] = "Accept the agreement"; false;
}


