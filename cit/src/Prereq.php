<?php
// src/Prereq.php

/**
 * @Entity @Table(name="prereq")
 **/
class Prereq
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;


    /** @Column(type="integer") **/
    protected $course;
    
    /** @Column(type="integer") **/
    protected $prerequisite;

    public function getId()
    {
        return $this->id;
    }

    public function getCourse()
    {
        return $this->course;
    }

    public function setCourse($course)
    {
        $this->course = $course;
    }

    public function getPrerequisite(){
        return $this->prerequisite;
    }

    public function setPrerequisite($prerequisite)
    {
        $this->prerequisite = $prerequisite;
    }
}