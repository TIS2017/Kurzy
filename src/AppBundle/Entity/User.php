<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\Role\RoleHierarchyInterface;
use Symfony\Component\Security\Core\User\UserInterface;

// src/User.php

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 * @ORM\Table(name="users")
 **/
class User implements UserInterface, \Serializable
{
     /**
      * @ORM\Id
      * @ORM\Column(type="integer")
      * @ORM\GeneratedValue **/
    protected $id;
    
    /** @ORM\Column(type="string", name="login") **/
    protected $login;
    
    /** @ORM\Column(type="string") **/
    protected $password;

    //vazby
    /**
     * Many Users have Many Workplaces.
     * @ORM\ManyToMany(targetEntity="Workplace", inversedBy="users")
     * @ORM\JoinTable(name="user_workplaces")
     */ 
    protected $workplaces;

    /**
     * One User has Many Enrolled.
     * @ORM\OneToMany(targetEntity="Enrolled", mappedBy="users")
     */
    protected $enrolleds;

    /**
     * One User has Many Emails.
     * @ORM\OneToMany(targetEntity="Email", mappedBy="users")
     */
    protected $emails;

    /**
     * Many Users have One Role.
     * @ORM\ManyToOne(targetEntity="Role", inversedBy="users")
     * @ORM\JoinColumn(name="role", referencedColumnName="id")
     */
    protected $role;

    /**
     * One User(garant) has Many Course Types.
     * @ORM\OneToMany(targetEntity="CourseType", mappedBy="users")
     */
    protected $courseTypes;

    /**
    * One User(supervisor) has Many Course Instances.
    * @ORM\OneToMany(targetEntity="CourseInstance", mappedBy="users")
     */
    protected $courseInstances;

    /**
     * Many Users(subadmins) have Many Workplaces.
     * @ORM\ManyToMany(targetEntity="Workplace")
     * @ORM\JoinTable(name="subadmins",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="workplace_id", referencedColumnName="id")}
     *      )
     */
    private $subadminWorkplaces;
    
    /**
     * One User has one Active email (relation - hasselected).
     * @ORM\OneToOne(targetEntity="Email", mappedBy="users")
     * @ORM\JoinColumn(name="selected_email", referencedColumnName="id")
     */
    private $selectedEmail;


    public function __construct() {
        $this->workplaces = new \Doctrine\Common\Collections\ArrayCollection();
        $this->enrolleds = new \Doctrine\Common\Collections\ArrayCollection();
        $this->emails = new \Doctrine\Common\Collections\ArrayCollection();
        $this->courseTypes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->courseInstances = new \Doctrine\Common\Collections\ArrayCollection();
        $this->subadminWorkplaces = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

	public function getSelectedEmail(){
        return $this->selectedEmail;
    }

    public function setSelectedEmail($selectedEmail)
    {
        $this->selectedEmail = $selectedEmail;
    }

    public function getRole() 
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }

    public function getWorkplaces()
    {
        return $this->workplaces;
    }

    public function setWorkplaces($workplaces)
    {
        $this->workplaces = $workplaces;
    }

    public function getSubadminWorkplaces()
    {
        return $this->subadminWorkplaces;
    }

    public function setSubadminWorkplaces($subadminWorkplaces)
    {
        $this->subadminWorkplaces = $subadminWorkplaces;
    }

    public function __toString()
    {
        return (string) $this->login;
    }

    public function getCourseTypes()
    {
        return $this->courseTypes;
    }

    public function setCourseTypes($courseTypes)
    {
        $this->courseTypes = $courseTypes;
    }

    /**
     * String representation of object
     * @link http://php.net/manual/en/serializable.serialize.php
     * @return string the string representation of the object or null
     * @since 5.1.0
     */
    public function serialize()
    {
        // TODO: Implement serialize() method.
    }

    /**
     * Constructs the object
     * @link http://php.net/manual/en/serializable.unserialize.php
     * @param string $serialized <p>
     * The string representation of the object.
     * </p>
     * @return void
     * @since 5.1.0
     */
    public function unserialize($serialized)
    {
        // TODO: Implement unserialize() method.
    }

    /**
     * Returns the roles granted to the user.
     *
     * <code>
     * public function getRoles()
     * {
     *     return array('ROLE_USER');
     * }
     * </code>
     *
     * Alternatively, the roles might be stored on a ``roles`` property,
     * and populated in any number of different ways when the user object
     * is created.
     *
     * @return (Role|string)[] The user roles
     */
    public function getRoles()
    {
        $nameOfRole = (string) $this->getRole();
        return array($nameOfRole);
    }

    /**
     * Returns the salt that was originally used to encode the password.
     *
     * This can return null if the password was not encoded using a salt.
     *
     * @return string|null The salt
     */
    public function getSalt()
    {
        return null;
    }

    /**
     * Returns the username used to authenticate the user.
     *
     * @return string The username
     */
    public function getUsername()
    {
        // TODO: Implement getUsername() method.
    }

    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }
}