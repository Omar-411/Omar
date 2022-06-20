<?php

namespace App\Http\Requests;


// To write wards like this => "First Name Is Required", instead of this => "first_name Is Required"
class EditErrorMessage
{

    public static function Message($message)
    {
        return ucwords(str_replace('_',' ',$message));
    }
}
