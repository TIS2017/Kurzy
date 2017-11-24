<?php
// src/Place.php
/**
 * @Table(name="places")
 */
class Place
{
    /**
     * @Id @Column(type="integer") @GeneratedValue
     * @var int
     */
    protected $id;
    
    /**
     * @Column(type="string")
     * @var string
     */
    protected $name;
    
    /**
     * @Column(type="integer")             
     * @var integer
     */
    protected $workplaceId;
    
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $buildingId;      

    /**
     * @Column(type="datetime")          
     * @var datetime
     */
    protected $created;

    /**
     * @Column(type="datetime")          
     * @var datetime
     */
    protected $updated;

    /**
     * @Column(type="boolean")
     * @var boolean
     */
    protected $deleted;

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

    public function getWorkplaceId()
    {
        return $this->workplaceId;
    }

    public function setWorkplaceId($workplaceId)
    {
        $this->workplaceId = $workplaceId;
    }

    public function getBuildingId()
    {
        return $this->buildingId;
    }

    public function setBuildingId($buildingId)
    {
        $this->buildingId = $buildingId;
    }

    public function getCreated()
    {
        return $this->created;
    }

    public function setCreated($created)
    {
        $this->created = $created;
    }

    public function getUpdated()
    {
        return $this->updated;
    }

    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    public function getDeleted()
    {
        return $this->deleted;
    }

    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    }

}