<?php

// Middleware GET Method
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    http_response_code(405);
    header('location:../../../layouts/errors/405.php');
    die;

}