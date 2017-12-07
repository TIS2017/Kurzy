<?php
// src/Workplace.php

/**
 * @Entity(repositoryClass="Workplace") @Table(name="workplaces")
 **/
class Workplace
{
     /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    

    /** @Column(type="string") **/
    protected $name;
    
    /** @Column(type="integer") **/
    protected $parent;

    //vazby
    /**
     * Many Workplaces have Many Users.
     * @ManyToMany(targetEntity="User", mappedBy="workplaces")
     */
    protected $users;       // TODO

    /**
     * One Workplace has Many Places.
     * @OneToMany(targetEntity="Place", mappedBy="workplaces")
     */
    private $places;

    /**
     * Many Workplaces have Many Users(subadmins).
     * @ManyToMany(targetEntity="User", mappedBy="workplaces")
     */
    protected $subadmins;       // TODO

    /**
     * Many Workplaces have Many Course Types.
     * @ManyToMany(targetEntity="CourseType", mappedBy="workplaces")
     */
    private $courseTypes;



    public function __construct() {
        $this->places = new \Doctrine\Common\Collections\ArrayCollection();
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
        $this->subadmins = new \Doctrine\Common\Collections\ArrayCollection();
        $this->courseTypes = new \Doctrine\Common\Collections\ArrayCollection();
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