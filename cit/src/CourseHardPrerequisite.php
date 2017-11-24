<?php
// src/CourseHardPrerequisite.php

/**
 * @Entity @Table(name="course_hard_prerequisites")
 **/
class CourseHardPrerequisite
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;

    /** @Column(type="integer") **/
    protected $courseTypeId;
    
    /** @Column(type="integer") **/
    protected $prerequisite;

    public function getId()
    {
        return $this->id;
    }

    public function getCourseTypeId()
    {
        return $this->courseTypeId;
    }

    public function setCourseTypeId($courseTypeId)
    {
        $this->courseTypeId = $courseTypeId;
    }

    public function getPrerequisite(){
        return $this->prerequisite;
    }

    public function setPrerequisite($prerequisite)
    {
        $this->prerequisite = $prerequisite;
    }
}