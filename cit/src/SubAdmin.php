<?php
// src/SubAdmin.php

/**
 * @Entity @Table(name="subadmins")
 **/
class SubAdmin
{
     /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    

    /** @Column(type="integer") **/
    protected $userId;
    
    /** @Column(type="integer") **/
    protected $partId;

    public function getId()
    {
        return $this->id;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    public function getPartId(){
        return $this->partId;
    }

    public function setPartId($partId)
    {
        $this->partId = $partId;
    }
}