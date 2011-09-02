<?php
namespace Contigo\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="Contigo\ModelBundle\Repository\AssetRepository")
 * @ORM\Table(name="asset")
 */
class Asset
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="bigint", nullable=false)
	 * @ORM\GeneratedValue(strategy="SEQUENCE")
	 * @ORM\SequenceGenerator(sequenceName="asset_seq", initialValue="1", allocationSize="1")
	 */
    protected $id;   
    
    /**
     * @ORM\Column(type="string", length="100")
     */    
    protected $name;    

    /**
     * @ORM\OneToOne(targetEntity="Organization")
     * @ORM\JoinColumn(name="registered_org_id", referencedColumnName="id")
     * @Assert\Type(type="Contigo\ModelBundle\Entity\Organization")
     */
    protected $organization;

    /**
     * @ORM\OneToOne(targetEntity="Subscriber")
     * @ORM\JoinColumn(name="registered_subscriber_id", referencedColumnName="id")
     * @Assert\Type(type="Contigo\ModelBundle\Entity\Subscriber")
     */
    protected $subscriber;

    /**
     * @ORM\Column(type="text")
     */    
    protected $other;

    /**
     * @ORM\Column(name="v_zoneradius", type="bigint")
     */    
    protected $zoneRadius; 

    /**
     * @ORM\Column(name="v_zoning", type="string", length="20")
     */    
    protected $zoning; 

    /**
     * @ORM\Column(name="v_motiondetector", type="string", length="20")
     */    
    protected $motionDetector; 

    /**
     * @ORM\Column(name="serialnum", type="string", length="100")
     */    
    protected $serialNum; 

    /**
     * @ORM\Column(name="v_vin", type="string", length="50")
     */    
    protected $vin; 

    /**
     * @ORM\Column(name="v_licensenum", type="string", length="20")
     */    
    protected $licenseNum;

    /**
     * @ORM\Column(name="v_year", type="string", length="4")
     */    
    protected $year;

    /**
     * @ORM\Column(name="v_color", type="string", length="30")
     */    
    protected $color;

    /**
     * @ORM\Column(name="v_model", type="string", length="50")
     */    
    protected $model; 

    /**
     * @ORM\Column(name="v_make", type="string", length="50")
     */    
    protected $make;

    /**
     * @ORM\Column(type="string", length="20")
     */    
    protected $type;  

    /**
     * @ORM\Column(type="string", length="255")
     */    
    protected $description; 

    /**
     * @ORM\Column(name="v_state", type="string", length="255")
     */    
    protected $state; 

    /**
     * @ORM\Column(name="v_country", type="string", length="255")
     */    
    protected $country;  

    /**
     * @ORM\Column(type="float")
     */    
    protected $timezone; 

    /**
     * @ORM\Column(name="daylight_saving", type="boolean")
     */    
    protected $daylightSaving; 

    /**
     * @ORM\OneToOne(targetEntity="Icon")
     * @ORM\JoinColumn(name="icon_id", referencedColumnName="id")
     * @Assert\Type(type="Contigo\ModelBundle\Entity\Icon")
     */
    protected $icon; 

    /**
     * @ORM\Column(name="synced_mileage", type="integer")
     */    
    protected $syncedMileage;

    /**
     * @ORM\Column(name="synced_timestamp", type="bigint")
     */    
    protected $syncedTimestamp; 

    /**
     * @ORM\Column(name="synced_engine_hours", type="bigint")
     */    
    protected $syncedEngineHours;     


    /**
     * Get id
     *
     * @return bigint $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set other
     *
     * @param text $other
     */
    public function setOther($other)
    {
        $this->other = $other;
    }

    /**
     * Get other
     *
     * @return text $other
     */
    public function getOther()
    {
        return $this->other;
    }

    /**
     * Set zoneRadius
     *
     * @param bigint $zoneRadius
     */
    public function setZoneRadius($zoneRadius)
    {
        $this->zoneRadius = $zoneRadius;
    }

    /**
     * Get zoneRadius
     *
     * @return bigint $zoneRadius
     */
    public function getZoneRadius()
    {
        return $this->zoneRadius;
    }

    /**
     * Set zoning
     *
     * @param string $zoning
     */
    public function setZoning($zoning)
    {
        $this->zoning = $zoning;
    }

    /**
     * Get zoning
     *
     * @return string $zoning
     */
    public function getZoning()
    {
        return $this->zoning;
    }

    /**
     * Set motionDetector
     *
     * @param string $motionDetector
     */
    public function setMotionDetector($motionDetector)
    {
        $this->motionDetector = $motionDetector;
    }

    /**
     * Get motionDetector
     *
     * @return string $motionDetector
     */
    public function getMotionDetector()
    {
        return $this->motionDetector;
    }

    /**
     * Set serialNum
     *
     * @param string $serialNum
     */
    public function setSerialNum($serialNum)
    {
        $this->serialNum = $serialNum;
    }

    /**
     * Get serialNum
     *
     * @return string $serialNum
     */
    public function getSerialNum()
    {
        return $this->serialNum;
    }

    /**
     * Set vin
     *
     * @param string $vin
     */
    public function setVin($vin)
    {
        $this->vin = $vin;
    }

    /**
     * Get vin
     *
     * @return string $vin
     */
    public function getVin()
    {
        return $this->vin;
    }

    /**
     * Set licenseNum
     *
     * @param string $licenseNum
     */
    public function setLicenseNum($licenseNum)
    {
        $this->licenseNum = $licenseNum;
    }

    /**
     * Get licenseNum
     *
     * @return string $licenseNum
     */
    public function getLicenseNum()
    {
        return $this->licenseNum;
    }

    /**
     * Set year
     *
     * @param string $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    /**
     * Get year
     *
     * @return string $year
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set color
     *
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * Get color
     *
     * @return string $color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set model
     *
     * @param string $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * Get model
     *
     * @return string $model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set make
     *
     * @param string $make
     */
    public function setMake($make)
    {
        $this->make = $make;
    }

    /**
     * Get make
     *
     * @return string $make
     */
    public function getMake()
    {
        return $this->make;
    }

    /**
     * Set type
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Get type
     *
     * @return string $type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set description
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set state
     *
     * @param string $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * Get state
     *
     * @return string $state
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set country
     *
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * Get country
     *
     * @return string $country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set timezone
     *
     * @param float $timezone
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;
    }

    /**
     * Get timezone
     *
     * @return float $timezone
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * Set daylightSaving
     *
     * @param boolean $daylightSaving
     */
    public function setDaylightSaving($daylightSaving)
    {
        $this->daylightSaving = $daylightSaving;
    }

    /**
     * Get daylightSaving
     *
     * @return boolean $daylightSaving
     */
    public function getDaylightSaving()
    {
        return $this->daylightSaving;
    }

    /**
     * Set syncedMileage
     *
     * @param integer $syncedMileage
     */
    public function setSyncedMileage($syncedMileage)
    {
        $this->syncedMileage = $syncedMileage;
    }

    /**
     * Get syncedMileage
     *
     * @return integer $syncedMileage
     */
    public function getSyncedMileage()
    {
        return $this->syncedMileage;
    }

    /**
     * Set syncedTimestamp
     *
     * @param bigint $syncedTimestamp
     */
    public function setSyncedTimestamp($syncedTimestamp)
    {
        $this->syncedTimestamp = $syncedTimestamp;
    }

    /**
     * Get syncedTimestamp
     *
     * @return bigint $syncedTimestamp
     */
    public function getSyncedTimestamp()
    {
        return $this->syncedTimestamp;
    }

    /**
     * Set syncedEngineHours
     *
     * @param bigint $syncedEngineHours
     */
    public function setSyncedEngineHours($syncedEngineHours)
    {
        $this->syncedEngineHours = $syncedEngineHours;
    }

    /**
     * Get syncedEngineHours
     *
     * @return bigint $syncedEngineHours
     */
    public function getSyncedEngineHours()
    {
        return $this->syncedEngineHours;
    }

    /**
     * Set organization
     *
     * @param Contigo\ModelBundle\Entity\Organization $organization
     */
    public function setOrganization(\Contigo\ModelBundle\Entity\Organization $organization)
    {
        $this->organization = $organization;
    }

    /**
     * Get organization
     *
     * @return Contigo\ModelBundle\Entity\Organization $organization
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * Set subscriber
     *
     * @param Contigo\ModelBundle\Entity\Subscriber $subscriber
     */
    public function setSubscriber(\Contigo\ModelBundle\Entity\Subscriber $subscriber)
    {
        $this->subscriber = $subscriber;
    }

    /**
     * Get subscriber
     *
     * @return Contigo\ModelBundle\Entity\Subscriber $subscriber
     */
    public function getSubscriber()
    {
        return $this->subscriber;
    }

    /**
     * Set icon
     *
     * @param Contigo\ModelBundle\Entity\Icon $icon
     */
    public function setIcon(\Contigo\ModelBundle\Entity\Icon $icon)
    {
        $this->icon = $icon;
    }

    /**
     * Get icon
     *
     * @return Contigo\ModelBundle\Entity\Icon $icon
     */
    public function getIcon()
    {
        return $this->icon;
    }
}