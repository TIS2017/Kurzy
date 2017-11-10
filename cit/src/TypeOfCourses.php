<?php
// src/TypesOfCourses.php
/**
 * @Entity(repositoryClass="TypesOfCoursesRepository") @Table(name="typesofcourses")
 */
class TypesOfCourses
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
     * @Column(type="string")
     * @var string
     */
    protected $description;
    
    /**
     * @Column(type="string")
     * @var string
     */
    protected $soft_prerequisites;      

    /**
     * @Column(type="integer")          //TODO prerobit integer->boolean
     * @var integer
     */
    protected $visibility;

    /**
     * @Column(type="integer")          //TODO prerobit integer->boolean
     * @var integer
     */
    protected $deleted;

    /**
     * @Column(type="integer")     
     * @var integer
     */
    protected $garant;

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

    public function getSoft_prerequisites()
    {
        return $this->soft_prerequisites;
    }

    public function setSoft_prerequisites(DateTime $soft_prerequisites)
    {
        $this->soft_prerequisites = $soft_prerequisites;
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

    public function getGarant()
    {
        return $this->garant;
    }

    public function setGarant($garant)
    {
        $this->garant = $garant;
    }

}