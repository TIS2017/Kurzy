<?php
// src/UserParts.php

/**
 * @Entity @Table(name="userparts")
 **/
class UserParts
{
     /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    

    /** @Column(type="integer") **/
    protected $partId;
    
    /** @Column(type="integer") **/
    protected $userId;

    public function getId()
    {
        return $this->id;
    }

    public function getPardId()
    {
        return $this->partId;
    }

    public function setPartId($partId)
    {
        $this->partId = $partId;
    }

    public function getUserId(){
        return $this->userId;
    }

    public function setUserId($userId)
    {
        $this->userId = $userId;
    }
}