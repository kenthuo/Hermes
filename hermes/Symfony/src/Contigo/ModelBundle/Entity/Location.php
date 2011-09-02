<?php
namespace Contigo\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="Contigo\ModelBundle\Repository\LocationRepository")
 * @ORM\Table(name="location")
 */
class Location
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="bigint", nullable=false)
	 * @ORM\GeneratedValue(strategy="SEQUENCE")
	 * @ORM\SequenceGenerator(sequenceName="location_seq", initialValue="1", allocationSize="1")
	 */
    protected $id;
    
    /**
     * @ORM\Column(type="string", length="50")
     * @Assert\NotBlank(groups="location", message="Name cannot be blank.")  
     * @Assert\MaxLength(50)
     */    
    protected $name;
    
    /**
     * @ORM\Column(type="string", length="100")
     * @Assert\NotBlank(groups="location", message="Address cannot be blank.") 
     * @Assert\MaxLength(100)
     */    
    protected $address;

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
     * Set address
     *
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * Get address
     *
     * @return string $address
     */
    public function getAddress()
    {
        return $this->address;
    }
}