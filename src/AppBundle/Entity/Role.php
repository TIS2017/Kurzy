<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\Role\RoleHierarchyInterface;
use Symfony\Component\Security\Core\Role\RoleInterface;

// src/Role.php

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RoleRepository")
 * @ORM\Table(name="roles")
 **/
class Role implements RoleHierarchyInterface
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
     * @ORM\OneToMany(targetEntity="User", mappedBy="role")
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

    public function __toString()
    {
        return (string) $this->name;
    }

    /**
     * Returns an array of all reachable roles by the given ones.
     *
     * Reachable roles are the roles directly assigned but also all roles that
     * are transitively reachable from them in the role hierarchy.
     *
     * @param RoleInterface[] $roles An array of directly assigned roles
     *
     * @return RoleInterface[] An array of all reachable roles
     */
    public function getReachableRoles(array $roles)
    {
        // TODO: Implement getReachableRoles() method.
    }
}