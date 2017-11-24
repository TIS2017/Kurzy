<?php
// src/UserWorkplaces.php

/**
 * @Entity @Table(name="user_workplaces")
 **/
class UserWorkplaces
{
     /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    

    /** @Column(type="integer") **/
    protected $workplaceId;
    
    /** @Column(type="integer") **/
    protected $userId;

    public function getId()
    {
        return $this->id;
    }

    public function getWorkplaceId()
    {
        return $this->workplaceId;
    }

    public function setWorkplaceId($workplaceId)
    {
        $this->workplaceId = $workplaceId;
    }

    public function getUserId(){
        return $this->userId;
    }

    public function setUserId($userId)
    {
        $this->userId = $userId;
    }
}