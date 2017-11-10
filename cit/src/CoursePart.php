<?php
// src/CoursePart.php

/**
 * @Entity @Table(name="coursepart")
 **/
class CoursePart
{
     /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    

    /** @Column(type="integer") **/
    protected $partId;
    
    /** @Column(type="integer") **/
    protected $courseId;

    public function getId()
    {
        return $this->id;
    }

    public function getPartId()
    {
        return $this->partId;
    }

    public function setPartId($course)
    {
        $this->partId = $partId;
    }

    public function courseId(){
        return $this->courseId;
    }

    public function setCourseId($courseId)
    {
        $this->courseId = $courseId;
    }
}