<?php
namespace Contigo\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="Contigo\ModelBundle\Repository\MakeRepository")
 * @ORM\Table(name="make")
 */
class Make
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="bigint", nullable=false)
	 * @ORM\GeneratedValue(strategy="SEQUENCE")
	 * @ORM\SequenceGenerator(sequenceName="make_seq", initialValue="1", allocationSize="1")
	 */
    protected $id;
    
    /**
     * @ORM\OneToOne(targetEntity="Manufacturer")
     * @ORM\JoinColumn(name="manufacturer_id", referencedColumnName="id")
     * @Assert\Type(type="Contigo\ModelBundle\Entity\Manufacturer")
     * @Assert\NotBlank(groups="make", message="Please select a manufacturer.")
     */
    protected $manufacturer;    
    
    /**
     * @ORM\Column(type="string", length="50")
     * @Assert\NotBlank(groups="make", message="Name cannot be blank.")
     */    
    protected $name;
    
    /**
     * @ORM\Column(type="string", length="20")
     * @Assert\NotBlank(groups="make", message="Version cannot be blank.")
     */    
    protected $version;

    /**
     * @ORM\Column(name="sim_required", type="boolean")
     * @Assert\NotBlank(groups="make", message="Please select if SIM card is required.")
     */    
    protected $simRequired;
    
    protected $compositeOfNameVersion;
    
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
     * Set version
     *
     * @param string $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * Get version
     *
     * @return string $version
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set simRequired
     *
     * @param boolean $simRequired
     */
    public function setSimRequired($simRequired)
    {
        $this->simRequired = $simRequired;
    }

    /**
     * Get simRequired
     *
     * @return boolean $simRequired
     */
    public function getSimRequired()
    {
        return $this->simRequired;
    }

    /**
     * Set manufacturer
     *
     * @param Contigo\ModelBundle\Entity\Manufacturer $manufacturer
     */
    public function setManufacturer(\Contigo\ModelBundle\Entity\Manufacturer $manufacturer)
    {
        $this->manufacturer = $manufacturer;
    }

    /**
     * Get manufacturer
     *
     * @return Contigo\ModelBundle\Entity\Manufacturer $manufacturer
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }
    
    /**
     * Get composition of name and version
     *
     * @return string composition of name and version
     */
    public function getCompositeOfNameVersion()
    {
        return $this->name . ' V' . $this->version;
    }    
}