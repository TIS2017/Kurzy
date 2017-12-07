<?php
// src/Role.php

/**
 * @Entity(repositoryClass="Role") @Table(name="roles")
 **/
class Role
{
     /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    
    /** @Column(type="string") **/
    protected $name;
    
    //vazby
    /**
     * One Role has Many Users.
     * @OneToMany(targetEntity="User", mappedBy="roles")
     */
    protected $users;

    public function __construct() {
        $this->users = new ArrayCollection();
    }
    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

}