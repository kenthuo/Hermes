<?php
namespace Contigo\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="Contigo\ModelBundle\Repository\LoginRepository")
 * @ORM\Table(name="login")
 */
class Login
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="bigint", nullable=false)
	 * @ORM\GeneratedValue(strategy="SEQUENCE")
	 * @ORM\SequenceGenerator(sequenceName="login_seq", initialValue="1", allocationSize="1")
	 */
    protected $id; 
    
    /**
     * @ORM\OneToOne(targetEntity="Subscriber")
     * @ORM\JoinColumn(name="subscriber_id", referencedColumnName="id")
     * @Assert\Type(type="Contigo\ModelBundle\Entity\Subscriber")
     */
    protected $subscriber; 
    
    /**
     * @ORM\OneToOne(targetEntity="Organization")
     * @ORM\JoinColumn(name="organization_id", referencedColumnName="id")
     * @Assert\Type(type="Contigo\ModelBundle\Entity\Organization")
     */
    protected $organization;

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
     * @ORM\Column(name="employee_num", type="string", length="50")
     * @Assert\MaxLength(50)
     */    
    protected $employeeNum;
    
    /**
     * @ORM\Column(name="username", type="string", length="200")
     * @Assert\MaxLength(200)
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
     * @ORM\Column(name="description", type="string", length="255")
     * @Assert\MaxLength(255)
     */    
    protected $description;  

    /**
     * @ORM\Column(name="email", type="string", length="150")
     * @Assert\MaxLength(150)
     */    
    protected $email;
    
    /**
     * @ORM\Column(name="is_allowed", type="boolean")
     */    
    protected $isAllowed;     

    /**
     * @ORM\Column(name="locale", type="string", length="10")
     * @Assert\MaxLength(10)
     */    
    protected $locale;    
    

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
     * Set employeeNum
     *
     * @param string $employeeNum
     */
    public function setEmployeeNum($employeeNum)
    {
        $this->employeeNum = $employeeNum;
    }

    /**
     * Get employeeNum
     *
     * @return string 
     */
    public function getEmployeeNum()
    {
        return $this->employeeNum;
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
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set isAllowed
     *
     * @param boolean $isAllowed
     */
    public function setIsAllowed($isAllowed)
    {
        $this->isAllowed = $isAllowed;
    }

    /**
     * Get isAllowed
     *
     * @return boolean 
     */
    public function getIsAllowed()
    {
        return $this->isAllowed;
    }

    /**
     * Set locale
     *
     * @param string $locale
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
    }

    /**
     * Get locale
     *
     * @return string 
     */
    public function getLocale()
    {
        return $this->locale;
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
     * @return Contigo\ModelBundle\Entity\Subscriber 
     */
    public function getSubscriber()
    {
        return $this->subscriber;
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
     * @return Contigo\ModelBundle\Entity\Organization 
     */
    public function getOrganization()
    {
        return $this->organization;
    }
}