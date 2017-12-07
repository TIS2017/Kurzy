<?php
// src/CourseType.php
/**
 * @Entity(repositoryClass="CourseType") @Table(name="course_types")
 */
class CourseType
{
    /**
     * @Id @Column(type="integer") @GeneratedValue
     * @var int
     */
    protected $id;
    /**
     * @Column(type="string")
     * @var string
     */
    protected $name;
    
    /**
     * @Column(type="text")             //TODO text?
     * @var text
     */
    protected $description;
    
    /**
     * @Column(type="string")
     * @var string
     */
    protected $softPrerequisites;      

    /**
     * @Column(type="boolean")          
     * @var boolean
     */
    protected $visibility;

    /**
     * @Column(type="boolean")          
     * @var boolean
     */
    protected $deleted;


    //vazby 
    /**
     * One CourseType has Many CourseSoftPrerequisites.
     * @OneToMany(targetEntity="CourseSoftPrerequisite", mappedBy="CourseType")
     */
    protected $courseSoftPrerequisites;
    
     /**
     * Many CourseTypes have One User.
     * @ManyToOne(targetEntity="User", inversedBy="course_types")
     * @JoinColumn(name="garant_id", referencedColumnName="id")
     */
    private $garant_user_id;

    /**
     * One CourseType has Many Course Instances.
     * @OneToMany(targetEntity="CourseInstance", mappedBy="course_types")
     */
    private $courseInstances;

     /**
     * Many Course Types have Many Workplaces.
     * @ManyToMany(targetEntity="Workplace")
     * @JoinTable(name="course_workplaces",
     *      joinColumns={@JoinColumn(name="course_type_id", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="workplace_id", referencedColumnName="id")}
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

    public function getSoftPrerequisities()
    {
        return $this->softPrerequisities;
    }

    public function setSoftPrerequisities($softPrerequisities)
    {
        $this->softPrerequisities = $softPrerequisities;
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

    public function getGarantUserId()
    {
        return $this->garantUserId;
    }

    public function setGarantUserId($garantUserId)
    {
        $this->garantUserId = $garantUserId;
    }

}