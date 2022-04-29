<?php


namespace App\Helpers;

class PrepareErrorMessage
{


    // Get Error Message
    public static function get(string $key): ?string
    {
        if (isset($_SESSION['errorsArray'][$key])) {
            foreach ($_SESSION['errorsArray'][$key] as $value) {
                return PrepareErrorMessage::model($value);
            }
        }
        return "";
    }


    // Error Message Model
    public static function model(string $value): string
    {
        return "<div class='alert alert-danger' role='alert'>{$value}</div>";
    }


    // Get All Error Messages Together
    public static function showAll(): ?string
    {
        $message = "";
        if (isset($_SESSION['errorsArray'])) {
            foreach ($_SESSION['errorsArray'] as $errors) {
                foreach ($errors as $error) {
                    $message .= PrepareErrorMessage::model($error);
                    break;
                }
            }
        }
        return $message;
    }
}

// PrepareErrorMessage::get('first_name');
// $v->get('first_name');
// print_r($v);    
// echo(PrepareErrorMessage::model('m m' ));    
