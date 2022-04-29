<?php

namespace App\Database\Config;

use mysqli;

class Connection
{

    protected $DBhostName = 'localhost';
    protected $DBusername = 'root';
    protected $DBpassword = '';
    protected $DBdatabase = 'nti_ecommerce';
    protected $DBport = 3306;
    public mysqli $con;
    public function __construct()
    {
        $this->con = new mysqli(
            $this->DBhostName,
            $this->DBusername,
            $this->DBpassword,
            $this->DBdatabase,
            $this->DBport
        );
    }

    public function __destruct () {
        $this->con->close();
    }
}