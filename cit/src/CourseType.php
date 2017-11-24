<?php
// src/CourseType.php
/**
 * @Entity(repositoryClass="CourseTypesRepository") @Table(name="course_types")
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
    protected $softPrerequisities;      

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

    /**
     * @Column(type="integer")     
     * @var integer
     */
    protected $garantUserId;

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