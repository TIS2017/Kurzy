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
    protected $capacity;

    /**
     * @Column(type="datetime")
     * @var datetime
     */
    protected $disenrollDate;

    //vazby
    /**
     * Many CourseInstances have One Place.
     * @ManyToOne(targetEntity="Place", inversedBy="course_instances")
     * @JoinColumn(name="place", referencedColumnName="id")
     */
    protected $place;

    /**
     * One CourseInstances has Many Enrolled.
     * @OneToMany(targetEntity="Enrolled", mappedBy="course_instances")
     */
    protected $enrolleds;

     /**
     * Many Course Instances have One Course Type.
     * @ManyToOne(targetEntity="CourseType", inversedBy="course_instances")
     * @JoinColumn(name="course_type", referencedColumnName="id")
     */
    private $courseType;


    /**
     * Many Course Instances have One User(supervisor).
     * @ManyToOne(targetEntity="User", inversedBy="course_instances")
     * @JoinColumn(name="supervisor_user_id", referencedColumnName="id")
     */
    private $supervisor;

    public function __construct() {
        $this->enrolleds = new \Doctrine\Common\Collections\ArrayCollection();
    }

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

    public function setDisenrollDate($disenrollDate)
    {
        $this->disenrollDate = $disenrollDate;
    }

}