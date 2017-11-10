<?php
// src/Enrolled.php

/**
 * @Entity @Table(name="enrolled")
 **/
class Enrolled
{
     /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    

    /** @Column(type="integer") **/             //TODO prerobit integer->boolean
    protected $graduated;
    
    /** @Column(type="integer") **/
    protected $userId;

    /** @Column(type="integer") **/
    protected $courseId;


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

    public function getCourseId(){
        return $this->courseId;
    }

    public function setCourseId($courseId)
    {
        $this->courseId = $courseId;
    }

}