<?php
namespace Contigo\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="Contigo\ModelBundle\Repository\MemberRepository")
 * @ORM\Table(name="member")
 */
class Member
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="bigint", nullable=false)
	 * @ORM\GeneratedValue(strategy="SEQUENCE")
	 * @ORM\SequenceGenerator(sequenceName="member_seq", initialValue="1", allocationSize="1")
	 */
    protected $id; 
    
    /**
     * @ORM\OneToOne(targetEntity="Customer")
     * @ORM\JoinColumn(name="customer_id", referencedColumnName="id")
     * @Assert\Type(type="Contigo\ModelBundle\Entity\Customer")
     * @Assert\NotBlank(groups="member", message="Please select a customer.") 
     */
    protected $customer; 
    
    /**
     * @ORM\Column(name="daylight_saving", type="boolean")
     */    
    protected $daylightSaving;

    /**
     * @ORM\Column(name="username", type="string", length="100")
     * @Assert\MaxLength(100)
     * @Assert\NotBlank(groups="member")  
     */    
    protected $username; 

    /**
     * @ORM\Column(name="password", type="string", length="100")
     * @Assert\MaxLength(100)
     */    
    protected $password;

    /**
     * @ORM\Column(name="type", type="string", length="20")
     * @Assert\MaxLength(20)
     */    
    protected $type;

    /**
     * @ORM\Column(name="firstname", type="string", length="100")
     * @Assert\MaxLength(100)
     */    
    protected $firstname;    
    
    /**
     * @ORM\Column(name="lastname", type="string", length="100")
     * @Assert\MaxLength(100)
     */    
    protected $lastname;     
    
    /**
     * @ORM\Column(name="employee_id", type="string", length="50")
     * @Assert\MaxLength(50)
     */    
    protected $employeeId;
    
    /**
     * @ORM\Column(name="ph_areacode", type="string", length="4")
     * @Assert\MaxLength(4)
     */    
    protected $phAreacode;
    
    /**
     * @ORM\Column(name="ph_number", type="string", length="20")
     * @Assert\MaxLength(20)
     */    
    protected $phNumber;    

    /**
     * @ORM\Column(name="ph_extension", type="string", length="4")
     * @Assert\MaxLength(4)
     */    
    protected $phExtension;

    /**
     * @ORM\Column(name="date_display_format", type="string", length="20")
     * @Assert\MaxLength(20)
     */    
    protected $dateDisplayFormat;  

    /**
     * @ORM\Column(type="float")
     */    
    protected $timezone;  

    protected $compositeOfNames;

    /**
     * Get id
     *
     * @return bigint 
     */
    public function getId()
    {
        return $this->id;
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
     * @return boolean 
     */
    public function getDaylightSaving()
    {
        return $this->daylightSaving;
    }

    /**
     * Set username
     *
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
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
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set employeeId
     *
     * @param string $employeeId
     */
    public function setEmployeeId($employeeId)
    {
        $this->employeeId = $employeeId;
    }

    /**
     * Get employeeId
     *
     * @return string 
     */
    public function getEmployeeId()
    {
        return $this->employeeId;
    }

    /**
     * Set phAreacode
     *
     * @param string $phAreacode
     */
    public function setPhAreacode($phAreacode)
    {
        $this->phAreacode = $phAreacode;
    }

    /**
     * Get phAreacode
     *
     * @return string 
     */
    public function getPhAreacode()
    {
        return $this->phAreacode;
    }

    /**
     * Set phNumber
     *
     * @param string $phNumber
     */
    public function setPhNumber($phNumber)
    {
        $this->phNumber = $phNumber;
    }

    /**
     * Get phNumber
     *
     * @return string 
     */
    public function getPhNumber()
    {
        return $this->phNumber;
    }

    /**
     * Set phExtension
     *
     * @param string $phExtension
     */
    public function setPhExtension($phExtension)
    {
        $this->phExtension = $phExtension;
    }

    /**
     * Get phExtension
     *
     * @return string 
     */
    public function getPhExtension()
    {
        return $this->phExtension;
    }

    /**
     * Set dateDisplayFormat
     *
     * @param string $dateDisplayFormat
     */
    public function setDateDisplayFormat($dateDisplayFormat)
    {
        $this->dateDisplayFormat = $dateDisplayFormat;
    }

    /**
     * Get dateDisplayFormat
     *
     * @return string 
     */
    public function getDateDisplayFormat()
    {
        return $this->dateDisplayFormat;
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
     * @return float 
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * Set customer
     *
     * @param Contigo\ModelBundle\Entity\Customer $customer
     */
    public function setCustomer(\Contigo\ModelBundle\Entity\Customer $customer)
    {
        $this->customer = $customer;
    }

    /**
     * Get customer
     *
     * @return Contigo\ModelBundle\Entity\Customer 
     */
    public function getCustomer()
    {
        return $this->customer;
    }
    
    /**
     * Get composition of names
     *
     * @return string composition of names
     */
    public function getCompositeOfNames()
    {
        return $this->firstname . ' ' . $this->lastname . ' (' . $this->username . ')';
    }    
}