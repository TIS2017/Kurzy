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

    /**
     * Many CourseSoftPrerequisites have One courseType.
     * @ORM\ManyToOne(targetEntity="CourseType", inversedBy="course_soft_prerequisites")
     * @ORM\JoinColumn(name="course_type_id", referencedColumnName="id")
     */
    private $courseType;

    public function getCourseType()
    {
        return $this->courseType;
    }

    public function setCourseType($courseType)
    {
        $this->courseType = $courseType;
    }
}