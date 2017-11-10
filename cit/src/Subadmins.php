<?php
// src/SubAdmins.php

/**
 * @Entity @Table(name="subadmins")
 **/
class SubAdmins
{
     /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    

    /** @Column(type="integer") **/
    protected $userId;
    
    /** @Column(type="integer") **/
    protected $courseId;

    public function getId()
    {
        return $this->id;
    }

    public function getUserId()
    {
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