<?php
// src/User.php

/**
 * @Entity(repositoryClass="User") @Table(name="users")
 **/
class User
{
     /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    
    /** @Column(type="string", name="login") **/
    protected $login;
    
    /** @Column(type="string") **/
    protected $password;

    //vazby
    /**
     * Many Users have Many Workplaces.
     * @ManyToMany(targetEntity="Workplace", inversedBy="users")
     * @JoinTable(name="user_workplaces")
     */ 
    protected $workplaces;

    /**
     * One User has Many Enrolled.
     * @OneToMany(targetEntity="Enrolled", mappedBy="users")
     */
    protected $enrolleds;

    /**
     * One User has Many Emails.
     * @OneToMany(targetEntity="Email", mappedBy="users")
     */
    protected $emails;

    /**
     * Many Users have One Role.
     * @ManyToOne(targetEntity="Role", inversedBy="users")
     * @JoinColumn(name="role", referencedColumnName="id")
     */
    protected $role;

    /**
     * One User(garant) has Many Course Types.
     * @OneToMany(targetEntity="CourseType", mappedBy="users")
     */
    protected $course_types;

    /**
    * One User(supervisor) has Many Course Instances.
    * @OneToMany(targetEntity="CourseInstance", mappedBy="users")
     */
    protected $courseInstances;

    /**
     * Many Users(subadmins) have Many Workplaces.
     * @ManyToMany(targetEntity="Workplace")
     * @JoinTable(name="subadmins",
     *      joinColumns={@JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="workplace_id", referencedColumnName="id")}
     *      )
     */
    private $subadminWorkplaces;    //TODO takto? ci tiez do workplaces ?
    
    /**
     * One User has one Active email (relation - hasselected).
     * @OneToOne(targetEntity="Email", mappedBy="users")
     * @JoinColumn(name="selected_email", referencedColumnName="id")
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
        $this->userId = $userId;
    }

	public function getSelectedEmailInteger($selectedEmailInteger){
        return $this->selectedEmailInteger;
    }

    public function setSelectedEmailInteger($selectedEmailInteger)
    {
        $this->selectedEmailInteger = $selectedEmailInteger;
    }

    public function getRole() 
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }

}