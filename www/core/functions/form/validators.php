<?php

function validate_not_empty($field_value, &$field)
{
    if (strlen($field_value) == 0) {
        $field['error'] = 'Field is empty';
    } else {
        return true;
    }
}

function validate_is_number($field_value, &$field)
{
    if (!is_numeric($field_value)) {
        $field['error'] = 'Numbers only!';
    } else {
        return true;
    }
}

function validate_no_space($field_value, &$field)
{
    if (preg_match('/\s/', $field_value)) {
        $field['error'] = 'Laukelyje neturi buti tarpo';
    } else {
        return true;
    }
}

function validate_login_mail($field_value, &$field) {
    $modelUser = new \App\Users\Model();
    $users = $modelUser->get(['email' => $field_value]);
    if ($users) {
        $field['error'] = 'User with this email already exists!';
        return false;
    }

    return true;
}
