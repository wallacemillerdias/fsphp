<?php

namespace Source\interpretation;

class User
{
    private $firtName;
    private $lastName;
    private $email;

    /**
     * user contructor.
     * @param $firtName
     * @param $lastName
     * @param $email
     */
    public function __construct($firtName, $lastName, $email)
    {
        $this->firtName = $firtName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    public function __clone()
    {
        $this->firtName = null;
        $this->lastName = null;
        echo "<p class='trigger'>Clonou! </p>";
    }

    public function __destruct()
    {
        var_dump($this);
        echo "<p class='trigger accept'>O objeto {$this->firtName} foi destruído!</p>";
    }


    /**
     * @param mixed $firtName
     */
    public function setFirtName($firtName)
    {
        $this->firtName = $firtName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }


    /**
     * @return mixed
     */
    public function getFirtName()
    {
        return $this->firtName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }


}