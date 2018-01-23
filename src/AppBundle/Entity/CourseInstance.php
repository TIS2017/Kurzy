<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


// src/CourseInstance.php
/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CourseInstanceRepository")
 * @ORM\Table(name="course_instances")
 */
class CourseInstance
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * @var int
     */
    protected $id;
    /**
     * @ORM\Column(type="datetime")
     * @var datetime
     */
    protected $timeStamp;
    
    /**
     * @ORM\Column(type="integer")
     * @var integer
     */
    protected $capacity;

    /**
     * @ORM\Column(type="datetime")
     * @var datetime
     */
    protected $disenrollDate;

    //vazby
    /**
     * Many CourseInstances have One Place.
     * @ORM\ManyToOne(targetEntity="Place", inversedBy="course_instances")
     * @ORM\JoinColumn(name="place", referencedColumnName="id")
     */
    protected $place;

    /**
     * One CourseInstances has Many Enrolled.
     * @ORM\OneToMany(targetEntity="Enrolled", mappedBy="course_instances")
     */
    protected $enrolleds;

     /**
     * Many Course Instances have One Course Type.
     * @ORM\ManyToOne(targetEntity="CourseType", inversedBy="course_instances")
     * @ORM\JoinColumn(name="course_type", referencedColumnName="id")
     */
    private $courseType;


    /**
     * Many Course Instances have One User(supervisor).
     * @ORM\ManyToOne(targetEntity="User", inversedBy="course_instances")
     * @ORM\JoinColumn(name="supervisor_user_id", referencedColumnName="id")
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

    public function getSupervisor()
    {
        return $this->supervisor;
    }

    public function setSupervisor($supervisor)
    {
        $this->supervisor = $supervisor;
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