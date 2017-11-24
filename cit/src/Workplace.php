<?php
// src/Workplace.php

/**
 * @Entity @Table(name="workplaces")
 **/
class Workplace
{
     /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    

    /** @Column(type="string") **/
    protected $name;
    
    /** @Column(type="integer") **/
    protected $parent;

    /**
     * Many Workplaces have Many Users.
     * @ManyToMany(targetEntity="User", mappedBy="workplaces")
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