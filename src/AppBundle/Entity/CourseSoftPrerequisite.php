<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

// src/CourseSoftPrerequisite.php

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CourseSoftPrerequisiteRepository")
 * @ORM\Table(name="course_soft_prerequisites")
 **/
class CourseSoftPrerequisite
{
    /** @ORM\Id
     *  @ORM\Column(type="integer")
     *  @ORM\GeneratedValue **/
    protected $id;

    /** @ORM\Column(type="string") **/
    protected $value;

    public function getId()
    {
        return $this->id;
    }

    public function getValue(){
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * Many courseSoftPrerequisites have Many CourseTypes.
     * @ORM\ManyToMany(targetEntity="CourseType", mappedBy="softPrerequisites")
     */
    protected $softPrerequisiteTo;

    public function __construct()
    {
        $this->softPrerequisiteTo= new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getSoftPrerequisiteTo(){
        return $this->softPrerequisiteTo;
    }

    public function setSoftPrerequisiteTo($softPrerequisiteTo){
        $this->softPrerequisiteTo = $softPrerequisiteTo;
    }


    public function getCourseType()
    {
        return $this->courseType;
    }

    public function setCourseType($courseType)
    {
        $this->courseType = $courseType;
    }

    public function __toString()
    {
        return (string) $this->value;
    }


}