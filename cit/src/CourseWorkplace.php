<?php
// src/CourseWorkplace.php

/**
 * @Entity @Table(name="course_workplaces")
 **/
class CourseWorkplace
{
     /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    
    /** @Column(type="integer") **/
    protected $workplaceId;
    
    /** @Column(type="integer") **/
    protected $courseType;

    public function getId()
    {
        return $this->id;
    }

    public function getWorkplaceId()
    {
        return $this->workplaceId;
    }

    public function setWorkplaceId($workplaceId)
    {
        $this->workplaceId = $workplaceId;
    }

    public function getCourseType(){
        return $this->courseType;
    }

    public function setCourseType($courseType)
    {
        $this->courseType = $courseType;
    }
}