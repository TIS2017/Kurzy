<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

// src/User.php

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 * @ORM\Table(name="users")
 **/
class User
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
    protected $course_types;

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
    private $subadminWorkplaces;    //TODO takto? ci tiez do workplaces ?
    
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
        return $this->login;
    }
}