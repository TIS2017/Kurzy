<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

// src/CourseType.php
/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CourseTypeRepository")
 * @ORM\Table(name="course_types")
 */
class CourseType
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * @var int
     */
    protected $id;
    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected $name;
    
    /**
     * @ORM\Column(type="text")             //TODO text?
     * @var text
     */
    protected $description;
    
    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected $softPrerequisites;      

    /**
     * @ORM\Column(type="boolean")
     * @var boolean
     */
    protected $visibility;

    /**
     * @ORM\Column(type="boolean")
     * @var boolean
     */
    protected $deleted;


    //vazby 
    /**
     * One CourseType has Many CourseSoftPrerequisites.
     * @ORM\OneToMany(targetEntity="CourseSoftPrerequisite", mappedBy="CourseType")
     */
    protected $courseSoftPrerequisites;
    
     /**
     * Many CourseTypes have One User.
     * @ORM\ManyToOne(targetEntity="User", inversedBy="course_types")
     * @ORM\JoinColumn(name="garant_id", referencedColumnName="id")
     */
    private $garantId;

    /**
     * One CourseType has Many Course Instances.
     * @ORM\OneToMany(targetEntity="CourseInstance", mappedBy="course_types")
     */
    private $courseInstances;

     /**
     * Many Course Types have Many Workplaces.
     * @ORM\ManyToMany(targetEntity="Workplace")
     * @ORM\JoinTable(name="course_workplaces",
     *      joinColumns={@ORM\JoinColumn(name="course_type_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="workplace_id", referencedColumnName="id")}
     *      )
     */
    private $workplaces;

    //TODO course_hard_prerequisites

    public function __construct() {
        $this->courseInstances = new \Doctrine\Common\Collections\ArrayCollection();
        $this->courseSoftPrerequisites = new \Doctrine\Common\Collections\ArrayCollection();
        $this->workplaces = new \Doctrine\Common\Collections\ArrayCollection();
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

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getSoftPrerequisites()
    {
        return $this->softPrerequisites;
    }

    public function setSoftPrerequisites($softPrerequisites)
    {
        $this->softPrerequisites = $softPrerequisites;
    }

    public function getVisibility()
    {
        return $this->visibility;
    }

    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;
    }

    public function getDeleted()
    {
        return $this->deleted;
    }

    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    }

    public function getGarantId()
    {
        return $this->garantId;
    }

    public function setGarantId($garantId)
    {
        $this->garantId = $garantId;
    }


    public function getWorkplaces()
    {
        return $this->workplaces;
    }

    public function setWorkplaces($workplaces)
    {
        $this->workplaces = $workplaces;
    }

    public function __toString()
    {
        return $this->name;
    }
}