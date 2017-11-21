<?php
// src/Parts.php

/**
 * @Entity @Table(name="parts")
 **/
class Parts
{
     /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    

    /** @Column(type="integer") **/
    protected $name;
    
    /** @Column(type="integer") **/
    protected $parent;

    /**
     * Many Parts have Many Users.
     * @ManyToMany(targetEntity="User", mappedBy="parts")
     */
    protected $users;

    public function __construct() {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
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

    public function getParent(){
        return $this->parent;
    }

    public function setParent($parent)
    {
        $this->parent = $parent;
    }
}