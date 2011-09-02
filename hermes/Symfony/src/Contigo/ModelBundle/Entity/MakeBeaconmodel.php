<?php
namespace Contigo\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="make_beaconmodel")
 */
class MakeBeaconmodel
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="bigint", nullable=false)
	 * @ORM\GeneratedValue(strategy="SEQUENCE")
	 * @ORM\SequenceGenerator(sequenceName="make_beaconmodel_seq", initialValue="1", allocationSize="1")
	 */
    protected $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="Make")
     * @ORM\JoinColumn(name="make_id", referencedColumnName="id")
     * @Assert\Type(type="Contigo\ModelBundle\Entity\Make")
     */
    protected $make;  

    /**
     * @ORM\ManyToOne(targetEntity="Beaconmodel")
     * @ORM\JoinColumn(name="beaconmodel_id", referencedColumnName="id")
     * @Assert\Type(type="Contigo\ModelBundle\Entity\Beaconmodel")
     */
    protected $beaconmodel;    
    
    
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
     * Set make
     *
     * @param Contigo\ModelBundle\Entity\Make $make
     */
    public function setMake(\Contigo\ModelBundle\Entity\Make $make)
    {
        $this->make = $make;
    }

    /**
     * Get Make
     *
     * @return Contigo\ModelBundle\Entity\Make $make
     */
    public function getMake()
    {
        return $this->make;
    }
    
    /**
     * Set beaconmodel
     *
     * @param Contigo\ModelBundle\Entity\Beaconmodel $beaconmodel
     */
    public function setBeaconmodel(\Contigo\ModelBundle\Entity\Beaconmodel $beaconmodel)
    {
        $this->beaconmodel = $beaconmodel;
    }

    /**
     * Get Beaconmodel
     *
     * @return Contigo\ModelBundle\Entity\Beaconmodel $beaconmodel
     */
    public function getBeaconmodel()
    {
        return $this->beaconmodel;
    }    
        
}