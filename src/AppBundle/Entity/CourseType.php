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
     * Many Course Types have Many Course Soft Prerequisites.
     * @ORM\ManyToMany(targetEntity="CourseSoftPrerequisite", inversedBy="softPrerequisiteTo")
     * @ORM\JoinTable(name="course_type_course_soft_prerequisites",
     *      joinColumns={@ORM\JoinColumn(name="course_type_id", referencedColumnName="id", onDelete="CASCADE")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="course_soft_prerequisite_id", referencedColumnName="id", onDelete="CASCADE")}
     *      )
     */
    protected $softPrerequisites;
    
     /**
     * Many CourseTypes have One User.
     * @ORM\ManyToOne(targetEntity="User", inversedBy="courseTypes")
     * @ORM\JoinColumn(name="garant_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $garantId;

    /**
     * One CourseType has Many Course Instances.
     * @ORM\OneToMany(targetEntity="CourseInstance", mappedBy="courseType")
     */
    private $courseInstances;

     /**
     * Many Course Types have Many Workplaces.
     * @ORM\ManyToMany(targetEntity="Workplace", inversedBy="courseTypes")
     * @ORM\JoinTable(name="course_workplaces",
     *      joinColumns={@ORM\JoinColumn(name="course_type_id", referencedColumnName="id", onDelete="CASCADE")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="workplace_id", referencedColumnName="id", onDelete="CASCADE")}
     *      )
     */
    private $workplaces;

    /**
     * Many CourseTypes have Many Hard Prerequisites.
     * @ORM\ManyToMany(targetEntity="CourseType", inversedBy="hardPrerequisitesOf")
     * @ORM\JoinTable(name="course_hard_prerequisites",
     *      joinColumns={@ORM\JoinColumn(name="course_type_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="required_type_of_course_id", referencedColumnName="id")}
     *      )
     *  //TODO on delete do?
     */
    private $hardPrerequisites;

    /**
     * Many CourseTypes are hard prerequisites of Many CourseTypes.
     * @ORM\ManyToMany(targetEntity="CourseType", mappedBy="hardPrerequisites")
     */
    private $hardPrerequisitesOf;


    public function __construct() {
        $this->courseInstances = new \Doctrine\Common\Collections\ArrayCollection();
        $this->softPrerequisites = new \Doctrine\Common\Collections\ArrayCollection();
        $this->hardPrerequisitesOf = new \Doctrine\Common\Collections\ArrayCollection();
        $this->hardPrerequisites = new \Doctrine\Common\Collections\ArrayCollection();
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


    public function getHardPrerequisites()
    {
        return $this->hardPrerequisites;
    }

    public function setHardPrerequisites($hardPrerequisites)
    {
        $this->hardPrerequisites = $hardPrerequisites;
    }


    public function getHardPrerequisitesOf()
    {
        return $this->hardPrerequisitesOf;
    }

    public function setHardPrerequisitesOf($hardPrerequisitesOf)
    {
        $this->hardPrerequisitesOf = $hardPrerequisitesOf;
    }

    public function getWorkplaces()
    {
        return $this->workplaces;
    }

    public function setWorkplaces($workplaces)
    {
        $this->workplaces = $workplaces;
    }

    public function getCourseInstances(){
        return $this->courseInstances;
    }

    public function setCourseInstances($courseInstances){
        $this->courseInstances = $courseInstances;
    }

    public function __toString()
    {
        return $this->name;
    }

    /**
     * Returns an array of workplaces of logged user.
     * @return array
     */
    public function usersWorkplaces($user)
    {
        $workplaces = array();

        foreach ($user->getWorkplaces() as $workplace) {
            $parent = $workplace->getParent();
            while ($parent != NULL) {
                if (!in_array($workplace, $workplaces)) {
                    array_push($workplaces, $workplace);
                }
                $workplace = $parent;
                $parent = $workplace->getParent();
            }
            if ($parent == NULL) {
                if (!in_array($workplace, $workplaces)) {
                    array_push($workplaces, $workplace);
                }
            }
        }

        return $workplaces;
    }
}