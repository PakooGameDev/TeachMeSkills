<?php
    function validateText($fieldName)
    {
        return isset($_POST[$fieldName]) && !empty(trim($_POST[$fieldName])) ? $_POST[$fieldName] : false;
    }
    function validateEmail($fieldName)
    {
        return isset($_POST[$fieldName]) && filter_var($_POST[$fieldName], FILTER_VALIDATE_EMAIL) ? $_POST[$fieldName] : false;
    }
?>