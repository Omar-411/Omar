<?php

use App\Helpers\PrepareErrorMessage;


function getError(string $key)
{
    return PrepareErrorMessage::get($key) ?? null;
}

function getSuccess(string $key)
{
    return $_SESSION['getSuccess'][$key] ?? null;
}

function getAllErrors()
{
    return PrepareErrorMessage::showAll() ?? null;
}

function oldData(string $key)
{
    return $_SESSION['oldData'][$key] ?? null;
}


