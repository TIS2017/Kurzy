<?php
// src/User.php

/**
 * @Entity @Table(name="users")
 **/
class User
{
     /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    
    /** @Column(type="string") **/
    protected $login;
    
    /** @Column(type="string") **/
    protected $password;

    /** @Column(type="integer") **/
    protected $role;

    /**
     * Many Users have Many Workplaces.
     * @ManyToMany(targetEntity="Workplace", inversedBy="users")
     * @JoinTable(name="user_workspaces")
     */
    protected $workplaces;

    public function __construct() {
        $this->workplaces = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;
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