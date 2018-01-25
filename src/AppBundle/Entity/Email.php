<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

// src/Email.php

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EmailRepository")
 * @ORM\Table(name="emails")
 **/
class Email
{
     /**
      * @ORM\Id
      * @ORM\Column(type="integer")
      * @ORM\GeneratedValue **/
    protected $id;
    
    /** @ORM\Column(type="string") **/
    protected $email;

    //vazby
    /**
    * Many Emails have One User.
    * @ORM\ManyToOne(targetEntity="User", inversedBy="emails")
    * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
    */
    protected $user;

    /**
     * One Email is selected by One User (relation -has selected).
     * @ORM\OneToOne(targetEntity="User", inversedBy="selectedEmail")
     */
    protected $selectedByUser; //TODO nechceme to v tabulke

    public function getId()
    {
        return $this->id;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function __toString()
    {
        return (string) $this->email;
    }
}