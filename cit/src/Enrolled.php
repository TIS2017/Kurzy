<?php
// src/Enrolled.php

/**
 * @Entity(repositoryClass="Enrolled") @Table(name="enrolled")
 **/
class Enrolled
{
     /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    

    /** @Column(type="boolean") **/
    protected $graduated;

    /**
     * Many Enrolled have One User.
     * @ORM\ManyToOne(targetEntity="User", inversedBy="enrolleds")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $userId;

    /** @Column(type="string") **/
    protected $comment;

    /** @Column(type="boolean") **/
    protected $attended;

    //vazby
    /**
     * Many Enrolled have One Course Instance.
     * @ManyToOne(targetEntity="CourseInstance", inversedBy="enrolleds")
     * @JoinColumn(name="course_instance_id", referencedColumnName="id")
     */
    protected $courseInstance;

    public function getId()
    {
        return $this->id;
    }

    public function getGraduated()
    {
        return $this->graduated;
    }

    public function setName($graduated)
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

}