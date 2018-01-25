<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

// src/Enrolled.php

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EnrolledRepository")
 * @ORM\Table(name="enrolled")
 **/
class Enrolled
{
     /**
      * @ORM\Id
      * @ORM\Column(type="integer")
      * @ORM\GeneratedValue **/
    protected $id;
    

    /**
     * @ORM\Column(type="boolean")
     * @var boolean
     **/
    protected $graduated;

    /** @ORM\Column(type="string", nullable=true) **/
    protected $comment;

    /**
     * @ORM\Column(type="boolean")
     * @var boolean
     **/
    protected $attended;

    //vazby
    /**
     * Many Enrolled have One Course Instance.
     * @ORM\ManyToOne(targetEntity="CourseInstance", inversedBy="enrolleds")
     * @ORM\JoinColumn(name="course_instance_id", referencedColumnName="id")
     */
    protected $courseInstance;

    /**
     * Many Enrolled have One User.
     * @ORM\ManyToOne(targetEntity="User", inversedBy="enrolleds")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $userId;

    public function getId()
    {
        return $this->id;
    }

    public function getGraduated()
    {
        return $this->graduated;
    }

    public function setGraduated($graduated)
    {
        $this->graduated = $graduated;
    }

    public function getUserId(){
        return $this->userId;
    }

    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    public function getCourseInstance(){
        return $this->courseInstance;
    }

    public function setCourseInstance($courseInstance)
    {
        $this->courseInstance = $courseInstance;
    }

    public function getComment()
    {
        return $this->comment;
    }

    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    public function getAttended()
    {
        return $this->attended;
    }

    public function setAttended($attended)
    {
        $this->attended = $attended;
    }

    public function getEnrolled()
    {
        return $this->enrolled;
    }

    public function setEnrolled($enrolled)
    {
        $this->enrolled = $enrolled;
    }

}