<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;

// src/Role.php

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RoleRepository")
 * @ORM\Table(name="roles")
 **/
class Role
{
     /**
      * @ORM\Id
      * @ORM\Column(type="integer")
      * @ORM\GeneratedValue
      **/
    protected $id;
    
    /** @ORM\Column(type="string") **/
    protected $name;
    
    //vazby
    /**
     * One Role has Many Users.
     * @ORM\OneToMany(targetEntity="User", mappedBy="roles")
     */
    protected $users;

    public function __construct() {
        $this->users = new ArrayCollection();
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

}