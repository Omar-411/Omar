<?php

namespace App\Http\Requests;

use App\Database\Config\Connection;
use App\Database\Models\User;
use App\Http\Requests\EditErrorMessage;


class Validation
{

    private array $errors = [];

    private $value;
    private $name;

    // Check if Inputs are empty. 
    public function required()
    {
        if (empty($this->value)) {

            $this->errors[$this->name][__FUNCTION__] = EditErrorMessage::Message("{$this->name} Is Required");
        }
        return $this;
    }


    // Check maximum characters. 
    public function max($max)
    {
        if (strlen($this->value) >= $max) {
            $this->errors[$this->name][__FUNCTION__] = EditErrorMessage::Message("{$this->name} Must be less than {$max} characters");
        }
        return $this;
    }


    // Password Confirmation. 
    public function confirmation($confirmation)
    {
        if ($this->value != $confirmation) {
            $this->errors[$this->name][__FUNCTION__] = EditErrorMessage::Message("{$this->name} is not equal to the added password");
        }
        return $this;
    }


    //Rergular Expression.
    public function regEx($regEx, $message = "invalid")
    {
        if (!preg_match($regEx, $this->value)) {
            $this->errors[$this->name][__FUNCTION__] = EditErrorMessage::Message("Your {$this->name} Is {$message} ");
        }
        return $this;
    }

    //Check Gender that it's must be Male or Female.
    public function in($array)
    {

        if (!in_array($this->value, $array)) {
            $this->errors[$this->name][__FUNCTION__] = EditErrorMessage::Message("{$this->name} Must Be " . implode(' Or ', $array));
        }
    }


    //Phone Must Be Inetger.
    public function integer()
    {
        if (!ctype_digit($this->value)) {
            $this->errors[$this->name][__FUNCTION__] = EditErrorMessage::Message("{$this->name} Must Be " . __FUNCTION__);
        }
        return $this;
    }


    // Must Be equal the required digits number
public function digits($digits)
    {
        if(strlen($this->value) != $digits){
            $this->errors[$this->name][__FUNCTION__] = EditErrorMessage::Message("{$this->name} must be {$digits} digits");
        }
        return $this;
    }
    //Must Be Equal To What is In The User Table .

    public function exists(string $tableName,string $column = "")
    {
        if (!$column) {
            $column = $this->name;
        }
        $connection = new Connection;
        $query="SELECT * FROM `{$tableName}` WHERE {$column} = ?";
        $stmt = $connection->con->prepare($query);
        $stmt->bind_param('s', $this->value);
        $stmt->execute();
        if ($stmt->get_result()->fetch_object() == null) {
            $this->errors[$this->name][__FUNCTION__] = EditErrorMessage::Message("No {$this->name} With This Value  <a href='signup.php' class='bg-warning'>  Signup </a>");

        }
        return $this;    }

    //Must Be Unique.

    public function unique( string $tableName,string $column = "")
    {
        if (!$column) {
            $column = $this->name;
        }
        $connection = new Connection;
        $query="SELECT * FROM `{$tableName}` WHERE {$column} = ?";
        $stmt = $connection->con->prepare($query);
        $stmt->bind_param('s', $this->value);
        $stmt->execute();
        if ($stmt->get_result()->fetch_object() != null) {
            $this->errors[$this->name][__FUNCTION__] = EditErrorMessage::Message("Your {$this->name} Already Added Before  <a href='login.php' class='bg-warning'>  Login </a>_ ");

        }
        return $this;
    }








    // Get Above errors.

    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Set the value of value
     *
     * @return  self
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
