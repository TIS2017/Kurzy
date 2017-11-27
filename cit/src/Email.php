<?php
// src/Email.php

/**
 * @Entity @Table(name="emails")
 **/
class Email
{
     /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    
    /** @Column(type="integer") **/
    protected $userId;
    
    /** @Column(type="string") **/
    protected $email;

    public function getId()
    {
        return $this->id;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
}