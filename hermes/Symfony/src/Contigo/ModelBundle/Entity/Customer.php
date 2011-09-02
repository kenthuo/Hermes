<?php
namespace Contigo\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="Contigo\ModelBundle\Repository\CustomerRepository")
 * @ORM\Table(name="customer")
 */
class Customer
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="bigint", nullable=false)
	 * @ORM\GeneratedValue(strategy="SEQUENCE")
	 * @ORM\SequenceGenerator(sequenceName="customer_seq", initialValue="1", allocationSize="1")
	 */
    protected $id;   
    
    /**
     * @ORM\OneToMany(targetEntity="Customer", mappedBy="parent")
     */
    private $children;    
    
    /**
     * @ORM\ManyToOne(targetEntity="Customer")
     * @ORM\JoinColumn(name="parent_customer_id", referencedColumnName="id")
     * @Assert\Type(type="Contigo\ModelBundle\Entity\Customer")
     */
    protected $parent; 

    /**
     * @ORM\Column(name="daylight_saving", type="boolean")
     */    
    protected $daylightSaving;    
    
    /**
     * @ORM\Column(type="float")
     */    
    protected $timezone;     
    
    /**
     * @ORM\Column(type="text")
     */    
    protected $notes; 

    /**
     * @ORM\Column(type="string", length="20")
     * @Assert\MaxLength(20)
     */    
    protected $status;    
    
    /**
     * @ORM\Column(name="street_address", type="string", length="100")
     * @Assert\MaxLength(100)
     */    
    protected $streetAddress;     
    
    /**
     * @ORM\Column(name="city", type="string", length="100")
     * @Assert\MaxLength(100)
     */    
    protected $city;
    
    /**
     * @ORM\Column(name="state", type="string", length="100")
     * @Assert\MaxLength(100)
     */    
    protected $state;
    
    /**
     * @ORM\Column(name="country", type="string", length="100")
     * @Assert\MaxLength(100)
     */    
    protected $country;    

    /**
     * @ORM\Column(name="zip_code", type="string", length="10")
     * @Assert\MaxLength(10)
     */    
    protected $zipCode;

    /**
     * @ORM\Column(name="contact_name", type="string", length="100")
     * @Assert\MaxLength(100)
     */    
    protected $contactName;  

    /**
     * @ORM\Column(name="contact_number", type="string", length="20")
     * @Assert\MaxLength(20)
     */    
    protected $contactNumber;

    /**
     * @ORM\Column(name="contact_email", type="string", length="100")
     * @Assert\MaxLength(100)
     */    
    protected $contactEmail;    
    
    /**
     * @ORM\Column(type="string", length="255")
     * @Assert\MaxLength(100) 
     */    
    protected $name;

    /**
     * @ORM\Column(type="string", length="20")
     * @Assert\MaxLength(20) 
     */    
    protected $type;    

    /**
     * @ORM\Column(name="refresh_freq", type="bigint")
     */  
    protected $refreshFreq;
    
    /**
     * @ORM\Column(name="subdomain_name", type="string", length="255")
     * @Assert\MaxLength(255)
     */    
    protected $subdomainName;

    /**
     * @ORM\Column(name="notification_email", type="string", length="100")
     * @Assert\MaxLength(100)
     */    
    protected $notificationEmail;

    /**
     * @ORM\Column(name="cust_service_email", type="string", length="100")
     * @Assert\MaxLength(100)
     */    
    protected $custServiceEmail; 

    /**
     * @ORM\Column(name="dealer_pricing", type="string", length="20")
     * @Assert\MaxLength(20)
     */    
    protected $dealerPricing;

    /**
     * @ORM\Column(name="dp_expiry", type="bigint")
     */  
    protected $dpExpiry;

    /**
     * @ORM\Column(name="sp_expiry", type="bigint")
     */  
    protected $spExpiry; 

    /**
     * @ORM\Column(name="shortname", type="string", length="255")
     * @Assert\MaxLength(255)
     */    
    protected $shortname;  
    
    /**
     * @ORM\Column(name="allow_account_login", type="boolean")
     */    
    protected $allowAccountLogin; 

    /**
     * @ORM\Column(name="alert_email", type="string", length="255")
     * @Assert\MaxLength(255)
     */    
    protected $alertEmail;

    /**
     * @ORM\Column(name="is_subscriber_unique", type="boolean")
     */    
    protected $isSubscriberUnique;

    /**
     * @ORM\Column(name="is_dealer_unique", type="boolean")
     */    
    protected $isDealerUnique;

    /**
     * @ORM\Column(name="dealer_unique_id", type="string", length="25")
     * @Assert\MaxLength(25)
     */    
    protected $dealerUniqueId;

    /**
     * @ORM\Column(name="is_ticket_master", type="boolean")
     */    
    protected $isTicketMaster; 

    /**
     * @ORM\Column(name="ticket_counter", type="bigint")
     */  
    protected $ticketCounter;  

    /**
     * @ORM\Column(name="support_notes", type="text")
     */    
    protected $supportNotes;    

    /**
     * @ORM\Column(name="next_bill_cycle", type="boolean")
     */    
    protected $nextBillCycle;

    /**
     * @ORM\Column(name="cust_service_email_cc", type="text")
     */    
    protected $custServiceEmailCc;    
    

    public function __construct() 
    {
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
    }    

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
     * Set notes
     *
     * @param text $notes
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
    }

    /**
     * Get notes
     *
     * @return text 
     */
    public function getNotes()
    {
        return $this->notes;
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
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set streetAddress
     *
     * @param string $streetAddress
     */
    public function setStreetAddress($streetAddress)
    {
        $this->streetAddress = $streetAddress;
    }

    /**
     * Get streetAddress
     *
     * @return string 
     */
    public function getStreetAddress()
    {
        return $this->streetAddress;
    }

    /**
     * Set city
     *
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
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
     * @return string 
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
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set zipCode
     *
     * @param string $zipCode
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
    }

    /**
     * Get zipCode
     *
     * @return string 
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Set contactName
     *
     * @param string $contactName
     */
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;
    }

    /**
     * Get contactName
     *
     * @return string 
     */
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * Set contactNumber
     *
     * @param string $contactNumber
     */
    public function setContactNumber($contactNumber)
    {
        $this->contactNumber = $contactNumber;
    }

    /**
     * Get contactNumber
     *
     * @return string 
     */
    public function getContactNumber()
    {
        return $this->contactNumber;
    }

    /**
     * Set contactEmail
     *
     * @param string $contactEmail
     */
    public function setContactEmail($contactEmail)
    {
        $this->contactEmail = $contactEmail;
    }

    /**
     * Get contactEmail
     *
     * @return string 
     */
    public function getContactEmail()
    {
        return $this->contactEmail;
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
     * @return string 
     */
    public function getName()
    {
        return $this->name;
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
     * Set refreshFreq
     *
     * @param bigint $refreshFreq
     */
    public function setRefreshFreq($refreshFreq)
    {
        $this->refreshFreq = $refreshFreq;
    }

    /**
     * Get refreshFreq
     *
     * @return bigint 
     */
    public function getRefreshFreq()
    {
        return $this->refreshFreq;
    }

    /**
     * Set subdomainName
     *
     * @param string $subdomainName
     */
    public function setSubdomainName($subdomainName)
    {
        $this->subdomainName = $subdomainName;
    }

    /**
     * Get subdomainName
     *
     * @return string 
     */
    public function getSubdomainName()
    {
        return $this->subdomainName;
    }

    /**
     * Set notificationEmail
     *
     * @param string $notificationEmail
     */
    public function setNotificationEmail($notificationEmail)
    {
        $this->notificationEmail = $notificationEmail;
    }

    /**
     * Get notificationEmail
     *
     * @return string 
     */
    public function getNotificationEmail()
    {
        return $this->notificationEmail;
    }

    /**
     * Set custServiceEmail
     *
     * @param string $custServiceEmail
     */
    public function setCustServiceEmail($custServiceEmail)
    {
        $this->custServiceEmail = $custServiceEmail;
    }

    /**
     * Get custServiceEmail
     *
     * @return string 
     */
    public function getCustServiceEmail()
    {
        return $this->custServiceEmail;
    }

    /**
     * Set dealerPricing
     *
     * @param string $dealerPricing
     */
    public function setDealerPricing($dealerPricing)
    {
        $this->dealerPricing = $dealerPricing;
    }

    /**
     * Get dealerPricing
     *
     * @return string 
     */
    public function getDealerPricing()
    {
        return $this->dealerPricing;
    }

    /**
     * Set dpExpiry
     *
     * @param bigint $dpExpiry
     */
    public function setDpExpiry($dpExpiry)
    {
        $this->dpExpiry = $dpExpiry;
    }

    /**
     * Get dpExpiry
     *
     * @return bigint 
     */
    public function getDpExpiry()
    {
        return $this->dpExpiry;
    }

    /**
     * Set spExpiry
     *
     * @param bigint $spExpiry
     */
    public function setSpExpiry($spExpiry)
    {
        $this->spExpiry = $spExpiry;
    }

    /**
     * Get spExpiry
     *
     * @return bigint 
     */
    public function getSpExpiry()
    {
        return $this->spExpiry;
    }

    /**
     * Set shortname
     *
     * @param string $shortname
     */
    public function setShortname($shortname)
    {
        $this->shortname = $shortname;
    }

    /**
     * Get shortname
     *
     * @return string 
     */
    public function getShortname()
    {
        return $this->shortname;
    }

    /**
     * Set allowAccountLogin
     *
     * @param boolean $allowAccountLogin
     */
    public function setAllowAccountLogin($allowAccountLogin)
    {
        $this->allowAccountLogin = $allowAccountLogin;
    }

    /**
     * Get allowAccountLogin
     *
     * @return boolean 
     */
    public function getAllowAccountLogin()
    {
        return $this->allowAccountLogin;
    }

    /**
     * Set alertEmail
     *
     * @param string $alertEmail
     */
    public function setAlertEmail($alertEmail)
    {
        $this->alertEmail = $alertEmail;
    }

    /**
     * Get alertEmail
     *
     * @return string 
     */
    public function getAlertEmail()
    {
        return $this->alertEmail;
    }

    /**
     * Set isSubscriberUnique
     *
     * @param boolean $isSubscriberUnique
     */
    public function setIsSubscriberUnique($isSubscriberUnique)
    {
        $this->isSubscriberUnique = $isSubscriberUnique;
    }

    /**
     * Get isSubscriberUnique
     *
     * @return boolean 
     */
    public function getIsSubscriberUnique()
    {
        return $this->isSubscriberUnique;
    }

    /**
     * Set isDealerUnique
     *
     * @param boolean $isDealerUnique
     */
    public function setIsDealerUnique($isDealerUnique)
    {
        $this->isDealerUnique = $isDealerUnique;
    }

    /**
     * Get isDealerUnique
     *
     * @return boolean 
     */
    public function getIsDealerUnique()
    {
        return $this->isDealerUnique;
    }

    /**
     * Set dealerUniqueId
     *
     * @param string $dealerUniqueId
     */
    public function setDealerUniqueId($dealerUniqueId)
    {
        $this->dealerUniqueId = $dealerUniqueId;
    }

    /**
     * Get dealerUniqueId
     *
     * @return string 
     */
    public function getDealerUniqueId()
    {
        return $this->dealerUniqueId;
    }

    /**
     * Set isTicketMaster
     *
     * @param boolean $isTicketMaster
     */
    public function setIsTicketMaster($isTicketMaster)
    {
        $this->isTicketMaster = $isTicketMaster;
    }

    /**
     * Get isTicketMaster
     *
     * @return boolean 
     */
    public function getIsTicketMaster()
    {
        return $this->isTicketMaster;
    }

    /**
     * Set ticketCounter
     *
     * @param bigint $ticketCounter
     */
    public function setTicketCounter($ticketCounter)
    {
        $this->ticketCounter = $ticketCounter;
    }

    /**
     * Get ticketCounter
     *
     * @return bigint 
     */
    public function getTicketCounter()
    {
        return $this->ticketCounter;
    }

    /**
     * Set supportNotes
     *
     * @param text $supportNotes
     */
    public function setSupportNotes($supportNotes)
    {
        $this->supportNotes = $supportNotes;
    }

    /**
     * Get supportNotes
     *
     * @return text 
     */
    public function getSupportNotes()
    {
        return $this->supportNotes;
    }

    /**
     * Set nextBillCycle
     *
     * @param boolean $nextBillCycle
     */
    public function setNextBillCycle($nextBillCycle)
    {
        $this->nextBillCycle = $nextBillCycle;
    }

    /**
     * Get nextBillCycle
     *
     * @return boolean 
     */
    public function getNextBillCycle()
    {
        return $this->nextBillCycle;
    }

    /**
     * Set custServiceEmailCc
     *
     * @param text $custServiceEmailCc
     */
    public function setCustServiceEmailCc($custServiceEmailCc)
    {
        $this->custServiceEmailCc = $custServiceEmailCc;
    }

    /**
     * Get custServiceEmailCc
     *
     * @return text 
     */
    public function getCustServiceEmailCc()
    {
        return $this->custServiceEmailCc;
    }

    /**
     * Set parentCustomer
     *
     * @param Contigo\ModelBundle\Entity\Customer $parentCustomer
     */
    public function setParentCustomer(\Contigo\ModelBundle\Entity\Customer $parentCustomer)
    {
        $this->parentCustomer = $parentCustomer;
    }

    /**
     * Get parentCustomer
     *
     * @return Contigo\ModelBundle\Entity\Customer 
     */
    public function getParentCustomer()
    {
        return $this->parentCustomer;
    }
}