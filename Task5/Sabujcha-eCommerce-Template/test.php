<?php

class mail {
    private $mailTo;
    private $subject;
    private $body;
    // public function __construct($mailTo, $subject , $body) {
    //     $this->mailTo = $mailTo;
    //     $this->subject = $subject;
    //     $this->body = $body;
    // }

   

    /**
     * Get the value of mailTo
     */ 
    public function getMailTo()
    {
        return $this->mailTo;
    }

    /**
     * Get the value of subject
     */ 
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Get the value of body
     */ 
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set the value of mailTo
     *
     * @return  self
     */ 
    public function setMailTo($mailTo)
    {
        $this->mailTo = $mailTo;

        return $this;
    }

    /**
     * Set the value of subject
     *
     * @return  self
     */ 
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Set the value of body
     *
     * @return  self
     */ 
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }
}

// new mail();