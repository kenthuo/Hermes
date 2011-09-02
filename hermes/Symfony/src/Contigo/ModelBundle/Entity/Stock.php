<?php
namespace Contigo\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Contigo\ModelBundle\Repository\StockRepository")
 * @ORM\Table(name="stock")
 */
class Stock
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="bigint", nullable=false)
	 * @ORM\GeneratedValue(strategy="SEQUENCE")
	 * @ORM\SequenceGenerator(sequenceName="stock_seq", initialValue="1", allocationSize="1")
	 */
    protected $id;
    
    /**
     * @ORM\OneToOne(targetEntity="Make")
     * @ORM\JoinColumn(name="make_id", referencedColumnName="id")
     */
    protected $make;

    /**
     * @ORM\OneToOne(targetEntity="KoreSim")
     * @ORM\JoinColumn(name="kore_sim_id", referencedColumnName="id")
     */
    protected $koreSim;

    /**
     * @ORM\OneToOne(targetEntity="Location")
     * @ORM\JoinColumn(name="location_id", referencedColumnName="id")
     */
    protected $location;    
    
    /**
     * @ORM\Column(type="string", length="50")
     */    
    protected $esn;
    
    /**
     * @ORM\Column(name="serial_number", type="string", length="50")
     */    
    protected $serialNumber;  

    /**
     * @ORM\Column(name="received_date", type="date")
     */    
    protected $receivedDate;    
        
    /**
     * @ORM\Column(name="gmms_cost", type="float")
     */    
    protected $gmmsCost;
        
    /**
     * @ORM\Column(name="gmms_cost_currency", type="string", length="5")
     */    
    protected $gmmsCostCurrency;
    
    /**
     * @ORM\Column(name="p2p_cost", type="float")
     */    
    protected $p2pCost;
        
    /**
     * @ORM\Column(name="p2p_cost_currency", type="string", length="5")
     */    
    protected $p2pCostCurrency;    

    /**
     * @ORM\Column(name="enfora_activation_code", type="string", length="50")
     */    
    protected $enforaActivationCode;

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
     * Set esn
     *
     * @param string $esn
     */
    public function setEsn($esn)
    {
        $this->esn = $esn;
    }

    /**
     * Get esn
     *
     * @return string $esn
     */
    public function getEsn()
    {
        return $this->esn;
    }

    /**
     * Set serialNumber
     *
     * @param string $serialNumber
     */
    public function setSerialNumber($serialNumber)
    {
        $this->serialNumber = $serialNumber;
    }

    /**
     * Get serialNumber
     *
     * @return string $serialNumber
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    /**
     * Set receivedDate
     *
     * @param date $receivedDate
     */
    public function setReceivedDate($receivedDate)
    {
        $this->receivedDate = $receivedDate;
    }

    /**
     * Get receivedDate
     *
     * @return date $receivedDate
     */
    public function getReceivedDate()
    {
        return $this->receivedDate;
    }

    /**
     * Set gmmsCost
     *
     * @param float $gmmsCost
     */
    public function setGmmsCost($gmmsCost)
    {
        $this->gmmsCost = $gmmsCost;
    }

    /**
     * Get gmmsCost
     *
     * @return float $gmmsCost
     */
    public function getGmmsCost()
    {
        return $this->gmmsCost;
    }

    /**
     * Set gmmsCostCurrency
     *
     * @param string $gmmsCostCurrency
     */
    public function setGmmsCostCurrency($gmmsCostCurrency)
    {
        $this->gmmsCostCurrency = $gmmsCostCurrency;
    }

    /**
     * Get gmmsCostCurrency
     *
     * @return string $gmmsCostCurrency
     */
    public function getGmmsCostCurrency()
    {
        return $this->gmmsCostCurrency;
    }

    /**
     * Set p2pCost
     *
     * @param float $p2pCost
     */
    public function setP2pCost($p2pCost)
    {
        $this->p2pCost = $p2pCost;
    }

    /**
     * Get p2pCost
     *
     * @return float $p2pCost
     */
    public function getP2pCost()
    {
        return $this->p2pCost;
    }

    /**
     * Set p2pCostCurrency
     *
     * @param string $p2pCostCurrency
     */
    public function setP2pCostCurrency($p2pCostCurrency)
    {
        $this->p2pCostCurrency = $p2pCostCurrency;
    }

    /**
     * Get p2pCostCurrency
     *
     * @return string $p2pCostCurrency
     */
    public function getP2pCostCurrency()
    {
        return $this->p2pCostCurrency;
    }

    /**
     * Set enforaActivationCode
     *
     * @param string $enforaActivationCode
     */
    public function setEnforaActivationCode($enforaActivationCode)
    {
        $this->enforaActivationCode = $enforaActivationCode;
    }

    /**
     * Get enforaActivationCode
     *
     * @return string $enforaActivationCode
     */
    public function getEnforaActivationCode()
    {
        return $this->enforaActivationCode;
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
     * Get make
     *
     * @return Contigo\ModelBundle\Entity\Make $make
     */
    public function getMake()
    {
        return $this->make;
    }

    /**
     * Set koreSim
     *
     * @param Contigo\ModelBundle\Entity\KoreSim $koreSim
     */
    public function setKoreSim(\Contigo\ModelBundle\Entity\KoreSim $koreSim)
    {
        $this->koreSim = $koreSim;
    }

    /**
     * Get koreSim
     *
     * @return Contigo\ModelBundle\Entity\KoreSim $koreSim
     */
    public function getKoreSim()
    {
        return $this->koreSim;
    }

    /**
     * Set location
     *
     * @param Contigo\ModelBundle\Entity\Location $location
     */
    public function setLocation(\Contigo\ModelBundle\Entity\Location $location)
    {
        $this->location = $location;
    }

    /**
     * Get location
     *
     * @return Contigo\ModelBundle\Entity\Location $location
     */
    public function getLocation()
    {
        return $this->location;
    }
}