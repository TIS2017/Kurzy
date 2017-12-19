<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

// src/Place.php
/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PlaceRepository")
 * @ORM\Table(name="places")
 */
class Place
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * @var int
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected $name;
    
    /**
     * @ORM\Column(type="integer")
     * @var integer
     */
    protected $buildingId;      

    /**
     * @ORM\Column(type="datetime")
     * @var datetime
     */
    protected $created;

    /**
     * @ORM\Column(type="datetime")
     * @var datetime
     */
    protected $updated;

    /**
     * @ORM\Column(type="boolean")
     * @var boolean
     */
    protected $deleted;

    //vazby
    /**
     * One Place has Many course instances.
     * @ORM\OneToMany(targetEntity="CourseInstance", mappedBy="places")
     */
    protected $course_instances;

    /**
     * Many Places have One workplace.
     * @ORM\ManyToOne(targetEntity="Workplace", inversedBy="places")
     * @ORM\JoinColumn(name="workplace_id", referencedColumnName="id")
     */
    protected $workplace;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getWorkplace()
    {
        return $this->workplace;
    }

    public function setWorkplace($workplace)
    {
        $this->workplace = $workplace;
    }

    public function getBuildingId()
    {
        return $this->buildingId;
    }

    public function setBuildingId($buildingId)
    {
        $this->buildingId = $buildingId;
    }

    public function getCreated()
    {
        return $this->created;
    }

    public function setCreated($created)
    {
        $this->created = $created;
    }

    public function getUpdated()
    {
        return $this->updated;
    }

    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    public function getDeleted()
    {
        return $this->deleted;
    }

    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    }

}