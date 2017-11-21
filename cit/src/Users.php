<?php
// src/Users.php

/**
 * @Entity @Table(name="users")
 **/
class Users
{
     /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    
    /** @Column(type="string") **/
    protected $userName;
    
    /** @Column(type="string") **/
    protected $password;

    /** @Column(type="integer") **/
    protected $role;

    /**
     * Many Users have Many Parts.
     * @ManyToMany(targetEntity="Parts", inversedBy="users")
     * @JoinTable(name="usersparts")
     */
    protected $parts;

    public function __construct() {
        $this->parts = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getUserName()
    {
        return $this->userName;
    }

    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->userId = $userId;
    }

    public function getRole() 
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }

}