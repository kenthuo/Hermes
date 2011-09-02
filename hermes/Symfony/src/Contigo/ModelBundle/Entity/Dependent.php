<?php
namespace Contigo\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="Contigo\ModelBundle\Repository\DependentRepository")
 * @ORM\Table(name="dependent")
 */
class Dependent
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="bigint", nullable=false)
	 * @ORM\GeneratedValue(strategy="SEQUENCE")
	 * @ORM\SequenceGenerator(sequenceName="dependent_seq", initialValue="1", allocationSize="1")
	 */
    protected $id;   
    
    /**
     * @ORM\Column(type="string", length="20")
     */    
    protected $gender;    
    
    /**
     * @ORM\Column(name="weight_kg", type="float")
     */    
    protected $weightKg;  

    /**
     * @ORM\Column(name="weight_lb", type="float")
     */    
    protected $weightLb;    
    
    /**
     * @ORM\Column(type="string", length="20")
     */    
    protected $title;    
    
    /**
     * @ORM\Column(name="first_name", type="string", length="255")
     */    
    protected $firstName;

    /**
     * @ORM\Column(name="last_name", type="string", length="255")
     */    
    protected $lastName; 

    /**
     * @ORM\Column(type="string", length="255")
     */    
    protected $nickname;

    /**
     * @ORM\Column(name="middle_initial", type="string", length="255")
     */    
    protected $middleInitial; 

    /**
     * @ORM\Column(type="string", length="20")
     */    
    protected $suffix;    

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
     * @ORM\Column(type="datetime")
     */    
    protected $birthdate;
    
    /**
     * @ORM\Column(name="height_inches", type="float")
     */    
    protected $heightInches;

    /**
     * @ORM\Column(name="height_cm", type="float")
     */    
    protected $heightCm;   

    /**
     * @ORM\Column(name="eye_color", type="string", length="30")
     */    
    protected $eyeColor;

    /**
     * @ORM\Column(name="hair_color", type="string", length="30")
     */    
    protected $hairColor;  

    /**
     * @ORM\Column(name="unique_mark", type="string", length="255")
     */    
    protected $uniqueMark; 

    /**
     * @ORM\Column(type="string", length="255")
     */    
    protected $relationship;

    /**
     * @ORM\Column(type="string", length="255")
     */    
    protected $status;

    /**
     * @ORM\Column(name="timezone", type="float")
     */    
    protected $timezone;   

    /**
     * @ORM\Column(name="daylight_saving", type="boolean")
     */    
    protected $daylightSaving;

    /**
     * @ORM\Column(name="misc_info", type="string", length="255")
     */    
    protected $miscInfo;

    /**
     * @ORM\OneToOne(targetEntity="Icon")
     * @ORM\JoinColumn(name="icon_id", referencedColumnName="id")
     * @Assert\Type(type="Contigo\ModelBundle\Entity\Icon")
     */
    protected $icon; 
  
    /**
     * @ORM\Column(name="med_condition", type="string", length="255")
     */    
    protected $medCondition;

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
     * Set gender
     *
     * @param string $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * Get gender
     *
     * @return string $gender
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set weightKg
     *
     * @param float $weightKg
     */
    public function setWeightKg($weightKg)
    {
        $this->weightKg = $weightKg;
    }

    /**
     * Get weightKg
     *
     * @return float $weightKg
     */
    public function getWeightKg()
    {
        return $this->weightKg;
    }

    /**
     * Set weightLb
     *
     * @param float $weightLb
     */
    public function setWeightLb($weightLb)
    {
        $this->weightLb = $weightLb;
    }

    /**
     * Get weightLb
     *
     * @return float $weightLb
     */
    public function getWeightLb()
    {
        return $this->weightLb;
    }

    /**
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * Get firstName
     *
     * @return string $firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * Get lastName
     *
     * @return string $lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set nickname
     *
     * @param string $nickname
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;
    }

    /**
     * Get nickname
     *
     * @return string $nickname
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Set middleInitial
     *
     * @param string $middleInitial
     */
    public function setMiddleInitial($middleInitial)
    {
        $this->middleInitial = $middleInitial;
    }

    /**
     * Get middleInitial
     *
     * @return string $middleInitial
     */
    public function getMiddleInitial()
    {
        return $this->middleInitial;
    }

    /**
     * Set suffix
     *
     * @param string $suffix
     */
    public function setSuffix($suffix)
    {
        $this->suffix = $suffix;
    }

    /**
     * Get suffix
     *
     * @return string $suffix
     */
    public function getSuffix()
    {
        return $this->suffix;
    }

    /**
     * Set birthdate
     *
     * @param datetime $birthdate
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;
    }

    /**
     * Get birthdate
     *
     * @return datetime $birthdate
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set heightInches
     *
     * @param float $heightInches
     */
    public function setHeightInches($heightInches)
    {
        $this->heightInches = $heightInches;
    }

    /**
     * Get heightInches
     *
     * @return float $heightInches
     */
    public function getHeightInches()
    {
        return $this->heightInches;
    }

    /**
     * Set heightCm
     *
     * @param float $heightCm
     */
    public function setHeightCm($heightCm)
    {
        $this->heightCm = $heightCm;
    }

    /**
     * Get heightCm
     *
     * @return float $heightCm
     */
    public function getHeightCm()
    {
        return $this->heightCm;
    }

    /**
     * Set eyeColor
     *
     * @param string $eyeColor
     */
    public function setEyeColor($eyeColor)
    {
        $this->eyeColor = $eyeColor;
    }

    /**
     * Get eyeColor
     *
     * @return string $eyeColor
     */
    public function getEyeColor()
    {
        return $this->eyeColor;
    }

    /**
     * Set hairColor
     *
     * @param string $hairColor
     */
    public function setHairColor($hairColor)
    {
        $this->hairColor = $hairColor;
    }

    /**
     * Get hairColor
     *
     * @return string $hairColor
     */
    public function getHairColor()
    {
        return $this->hairColor;
    }

    /**
     * Set uniqueMark
     *
     * @param string $uniqueMark
     */
    public function setUniqueMark($uniqueMark)
    {
        $this->uniqueMark = $uniqueMark;
    }

    /**
     * Get uniqueMark
     *
     * @return string $uniqueMark
     */
    public function getUniqueMark()
    {
        return $this->uniqueMark;
    }

    /**
     * Set relationship
     *
     * @param string $relationship
     */
    public function setRelationship($relationship)
    {
        $this->relationship = $relationship;
    }

    /**
     * Get relationship
     *
     * @return string $relationship
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * Set status
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * Get status
     *
     * @return string $status
     */
    public function getStatus()
    {
        return $this->status;
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
     * Set miscInfo
     *
     * @param string $miscInfo
     */
    public function setMiscInfo($miscInfo)
    {
        $this->miscInfo = $miscInfo;
    }

    /**
     * Get miscInfo
     *
     * @return string $miscInfo
     */
    public function getMiscInfo()
    {
        return $this->miscInfo;
    }

    /**
     * Set medCondition
     *
     * @param string $medCondition
     */
    public function setMedCondition($medCondition)
    {
        $this->medCondition = $medCondition;
    }

    /**
     * Get medCondition
     *
     * @return string $medCondition
     */
    public function getMedCondition()
    {
        return $this->medCondition;
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