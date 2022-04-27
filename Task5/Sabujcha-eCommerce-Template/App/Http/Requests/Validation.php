<?php

namespace App\Http\Requests;


use App\Http\Requests\GetErrorMessage;


class Validation
{

    private array $errors = [];

    private $value;
    private $name;

    // Check if Inputs are empty. 
    public function required()
    {
        if (empty($this->value)) {

            $this->errors[$this->name][__FUNCTION__] = GetErrorMessage::Message("{$this->name} Is Required");
        }
        return $this;
    }


    // Check maximum characters. 
    public function max($max)
    {
        if (strlen($this->value) >= $max) {
            $this->errors[$this->name][__FUNCTION__] = GetErrorMessage::Message("{$this->name} Must be less than {$max} characters");
        }
        return $this;
    }


    // Password Confirmation. 
    public function confirmation($confirmation)
    {
        if ($this->value != $confirmation) {
            $this->errors[$this->name][__FUNCTION__] = GetErrorMessage::Message("{$this->name} is not equal to the added password");
        }
        return $this;
    }


    //Rergular expression.
    public function regEx($regEx, $message ="Invalid"){
        if(!preg_match($regEx,$this->value)){
            $this->errors[$this->name][__FUNCTION__] = GetErrorMessage::Message("{$message} {$this->name}");

        }
        return $this;

    }

    //Check Gender that it's must be Male or Female.
    public function in ($array){

        if(!in_array($this->value,$array)){
            $this->errors[$this->name][__FUNCTION__] = GetErrorMessage::Message("{$this->name} Must Be ".implode(' Or ',$array));

        }

    }

    
    //Phone Must Be Inetger.
    public function integer()
    {
        if(!ctype_digit($this->value)){
            $this->errors[$this->name][__FUNCTION__] = GetErrorMessage::Message("{$this->name} must be ". __FUNCTION__);
        }
        return $this;
    }



    //Must Be Unique
    public function unique()
    {
    
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



