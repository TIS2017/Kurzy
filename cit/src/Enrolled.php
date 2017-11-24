<?php
// src/Enrolled.php

/**
 * @Entity @Table(name="enrolled")
 **/
class Enrolled
{
     /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    

    /** @Column(type="boolean") **/
    protected $graduated;
    
    /** @Column(type="integer") **/
    protected $userId;

    /** @Column(type="integer") **/
    protected $courseInstanceId;


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

    public function getCourseInstanceId(){
        return $this->courseInstanceId;
    }

    public function setCourseInstanceId($courseInstanceId)
    {
        $this->courseInstanceId = $courseInstanceId;
    }

}