<?php
// src/CourseSoftPrerequisite.php

/**
 * @Entity @Table(name="course_soft_prerequisites")
 **/
class CourseSoftPrerequisite
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;

    /** @Column(type="integer") **/
    protected $courseTypeId;
    
    /** @Column(type="string") **/
    protected $value;

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

    public function getValue(){
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }
}