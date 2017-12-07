<?php
// src/Email.php

/**
 * @Entity(repositoryClass="Email") @Table(name="emails")
 **/
class Email
{
     /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    
    /** @Column(type="string") **/
    protected $email;

    //vazby
    /**
    * Many Emails have One User.
    * @ManyToOne(targetEntity="User", inversedBy="emails")
    * @JoinColumn(name="user_id", referencedColumnName="id")
    */
    protected $user;

    /**
     * One Email is selected by One User (relation -has selected).
     * @OneToOne(targetEntity="User", inversedBy="emails")
     */
//    protected $selectedByUser; TODO nechceme to v tabulke

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