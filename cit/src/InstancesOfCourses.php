<?php
// src/InstancesOfCourses.php
/**
 * @Entity(repositoryClass="InstancesOfCourses") @Table(name="instancesofcourses")
 */
class InstancesOfCourses
{
    /**
     * @Id @Column(type="integer") @GeneratedValue
     * @var int
     */
    protected $id;
    /**
     * @Column(type="datetime")             //TODO datetime?
     * @var datetime
     */
    protected $timeStamp;
    
    /**
     * @Column(type="string")
     * @var string
     */
    protected $place;
    
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $capacity;      

    /**
     * @Column(type="integer")          //TODO prerobit integer->boolean
     * @var integer
     */
    protected $typeOfCourse;

    /**
     * @Column(type="integer")          //TODO prerobit integer->boolean
     * @var integer
     */
    protected $supervisor;


    public function getId()
    {
        return $this->id;
    }

    public function getTimeStamp()
    {
        return $this->timeStamp;
    }

    public function setTimeStamp($timeStamp)
    {
        $this->timeStamp = $name;
    }

    public function getPlace()
    {
        return $this->place;
    }

    public function setPlace($place)
    {
        $this->place = $place;
    }

    public function getCapacity()
    {
        return $this->capacity;
    }

    public function setCapacity(DateTime $capacity)
    {
        $this->capacity = $capacity;
    }

    public function getTypeOfCourse()
    {
        return $this->typeOfCourse;
    }

    public function setTypeOfCourse($typeOfCourse)
    {
        $this->typeOfCourse = $typeOfCourse;
    }

    public function getDeleted()
    {
        return $this->deleted;
    }

    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    }

    public function getSupervisor()
    {
        return $this->supervisor;
    }

    public function setSupervisor($supervisor)
    {
        $this->supervisor = $supervisor;
    }

}