<?php
namespace Contigo\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="Contigo\ModelBundle\Repository\ManufacturerRepository")
 * @ORM\Table(name="manufacturer")
 */
class Manufacturer
{
	/**
	 * @var integer
	 * 
	 * @ORM\Id
	 * @ORM\Column(type="bigint", nullable=false)
	 * @ORM\GeneratedValue(strategy="SEQUENCE")
	 * @ORM\SequenceGenerator(sequenceName="manufacturer_seq", initialValue="1", allocationSize="1")
	 */
    protected $id;
    
    /**
     * @var string
     * 
     * @ORM\Column(type="string", length="50")
     * @Assert\NotBlank(groups="manufacturer", message="Name cannot be blank.")
     * @Assert\MaxLength(50) 
     */    
    protected $name;
    
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
}