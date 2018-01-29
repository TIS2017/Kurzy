<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

// src/Workplace.php

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\WorkplaceRepository")
 * @ORM\Table(name="workplaces")
 **/
class Workplace
{
     /**
      * @ORM\Id
      * @ORM\Column(type="integer")
      * @ORM\GeneratedValue
      **/
    protected $id;
    

    /** @ORM\Column(type="string") **/
    protected $name;

    /**
     * Many Workplaces have One Workplace (parent).
     * @ORM\ManyToOne(targetEntity="Workplace")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id", nullable=true, onDelete="CASCADE")
     *
     */
    protected $parent;

    //vazby
    /**
     * Many Workplaces have Many Users.
     * @ORM\ManyToMany(targetEntity="User", mappedBy="workplaces")
     */
    protected $users;

    /**
     * One Workplace has Many Places.
     * @ORM\OneToMany(targetEntity="Place", mappedBy="workplace")
     */
    private $places;

    /**
     * Many Workplaces have Many Users(subadmins).
     * @ORM\ManyToMany(targetEntity="User", mappedBy="subadminWorkplaces")
     */
    protected $subadmins;

    /**
     * Many Workplaces have Many Course Types.
     * @ORM\ManyToMany(targetEntity="CourseType", mappedBy="workplaces")
     */
    private $courseTypes;



    public function __construct() {
        $this->places = new \Doctrine\Common\Collections\ArrayCollection();
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
        $this->subadmins = new \Doctrine\Common\Collections\ArrayCollection();
        $this->courseTypes = new \Doctrine\Common\Collections\ArrayCollection();
    }

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

    public function getParent(){
        return $this->parent;
    }

    public function setParent($parent)
    {
        $this->parent = $parent;
    }


    public function getUsers(){
        return $this->users;
    }

    public function setUsers($users)
    {
        $this->users = $users;
    }


    public function getSubadmins(){
        return $this->subadmins;
    }

    public function setSubadmins($subadmins)
    {
        $this->subadmins = $subadmins;
    }

    public function getCourseTypes(){
        return $this->courseTypes;
    }

    public function setCourseTypes($courseTypes)
    {
        $this->courseTypes = $courseTypes;
    }

    public function __toString()
    {
        return $this->name;
    }
}