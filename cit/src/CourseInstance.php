<?php
// src/CourseInstance.php
/**
 * @Entity(repositoryClass="CourseInstance") @Table(name="course_instances")
 */
class CourseInstance
{
    /**
     * @Id @Column(type="integer") @GeneratedValue
     * @var int
     */
    protected $id;
    /**
     * @Column(type="datetime")
     * @var datetime
     */
    protected $timeStamp;
    
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $place;
    
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $capacity;

    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $courseType;

    /**
     * @Column(type="integer")          
     * @var integer
     */
    protected $supervisorUserId;

    /**
     * @Column(type="datetime")
     * @var datetime
     */
    protected $disenrollDate

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
        $this->timeStamp = $timeStamp;
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

    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;
    }

    public function getCourseType()
    {
        return $this->courseType;
    }

    public function setCourseType($courseType)
    {
        $this->courseType = $courseType;
    }

    public function getSupervisorUserId()
    {
        return $this->supervisorUserId;
    }

    public function setSupervisorUserId($supervisorUserId)
    {
        $this->supervisorUserId = $supervisorUserId;
    }

    public function getDisenrollDate()
    {
        return $this->disenrollDate;
    }

    public function setSupervisorUserId($disenrollDate)
    {
        $this->disenrollDate = $disenrollDate;
    }

}