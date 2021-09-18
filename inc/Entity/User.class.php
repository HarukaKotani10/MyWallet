<?php

class User
{

    private $UserID;
    private $Email;
    private $Password;
    private $UserName;

    /**
     * Get the value of UserID
     */
    public function getUserID()
    {
        return $this->UserID;
    }

    /**
     * Set the value of UserID
     */
    public function setUserID($UserID): self
    {
        $this->UserID = $UserID;

        return $this;
    }

    /**
     * Get the value of Email
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * Set the value of Email
     */
    public function setEmail($Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    /**
     * Get the value of Password
     */
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * Set the value of Password
     */
    public function setPassword($Password): self
    {
        $this->Password = $Password;

        return $this;
    }

    /**
     * Get the value of UserName
     */
    public function getUserName()
    {
        return $this->UserName;
    }

    /**
     * Set the value of UserName
     */
    public function setUserName($UserName): self
    {
        $this->UserName = $UserName;

        return $this;
    }
}
