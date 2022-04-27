<?php

namespace App\Database\Config;

use mysqli;

class Connection
{

    protected $hostname = 'localhost';
    protected $username = 'root';
    protected $password = '';
    protected $database = 'nti_ecommerce';
    protected $port = 3306;

    public function __construct()
    {
        $con = new mysqli(
            $this->hostname,
            $this->username,
            $this->password,
            $this->database,
            $this->port
        );


        // // Check  Databese Connection 
        // if ($con->connect_error) {
        //     echo "Connection Filed :" . $con->connect_error;
        //     die;
        // }
        // echo "Connected Successfully";
    }
}
