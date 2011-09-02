<?php
namespace Contigo\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="Contigo\ModelBundle\Repository\BeaconmodelRepository")
 * @ORM\Table(name="beaconmodel")
 */
class Beaconmodel
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="bigint", nullable=false)
	 * @ORM\GeneratedValue(strategy="SEQUENCE")
	 * @ORM\SequenceGenerator(sequenceName="beaconmodel_seq", initialValue="1", allocationSize="1")
	 */
    protected $id;   
    
    /**
     * @ORM\Column(type="string", length="100")
     * @Assert\NotBlank(groups="beaconmodel", message="Name cannot be blank.")
     */    
    protected $name;
    
    /**
     * @ORM\Column(type="text")
     */    
    protected $notes; 

    /**
     * @ORM\Column(type="string", length="100")
     * @Assert\NotBlank(groups="beaconmodel", message="Model cannot be blank.")
     */    
    protected $model;  

    /**
     * @ORM\Column(type="string", length="20")
     * @Assert\NotBlank(groups="beaconmodel", message="Type cannot be blank.")
     */    
    protected $type;  

    /**
     * @ORM\Column(type="string", length="255")
     * @Assert\NotBlank(groups="beaconmodel", message="Description cannot be blank.")
     */    
    protected $description;  

    /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank(groups="beaconmodel", message="Height cannot be blank.")
     */    
    protected $height; 

    /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank(groups="beaconmodel", message="Width cannot be blank.")
     */    
    protected $width; 

    /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank(groups="beaconmodel", message="Depth cannot be blank.")
     */    
    protected $depth; 

    /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank(groups="beaconmodel", message="Weight cannot be blank.")
     */    
    protected $weight;   

    /**
     * @ORM\Column(type="string", length="100")
     * @Assert\NotBlank(groups="beaconmodel", message="Color cannot be blank.")
     */    
    protected $color;

    /**
     * @ORM\Column(name="device_table_name", type="string", length="100")
     * @Assert\NotBlank(groups="beaconmodel", message="Beacon manager cannot be blank.")
     */    
    protected $deviceTableName;

    /**
     * @ORM\Column(type="string", length="15")
     */    
    protected $version;      
    
    /**
     * @ORM\Column(name="gmms_cost", type="float")
     * @Assert\NotBlank(groups="beaconmodel", message="Contigo cost cannot be blank.")
     */    
    protected $gmmsCost;
        
    /**
     * @ORM\Column(name="gmms_cost_currency", type="string", length="5")
     * @Assert\NotBlank(groups="beaconmodel", message="The currency of Contigo cost cannot be blank.")
     */    
    protected $gmmsCostCurrency;
    
    /**
     * @ORM\Column(name="p2p_cost", type="float")
     * @Assert\NotBlank(groups="beaconmodel", message="Partner cost cannot be blank.")
     */    
    protected $p2pCost;
        
    /**
     * @ORM\Column(name="p2p_cost_currency", type="string", length="5")
     * @Assert\NotBlank(groups="beaconmodel", message="The currency of partner cost cannot be blank.")
     */    
    protected $p2pCostCurrency;     

    /**
     * @ORM\Column(name="max_overlapping_sen", type="integer")
     * @Assert\NotBlank(groups="beaconmodel", message="Max overlapping cannot be blank.")
     */    
    protected $maxOverlappingSen; 

    /**
     * @ORM\Column(name="output_count", type="integer")
     * @Assert\NotBlank(groups="beaconmodel", message="# of Outputs cannot be blank.")
     */    
    protected $outputCount;  

    /**
     * @ORM\Column(name="input_count", type="integer")
     * @Assert\NotBlank(groups="beaconmodel", message="# of Inputs cannot be blank.")
     */    
    protected $inputCount;     

    /**
     * @ORM\Column(name="is_locate_track", type="boolean")
     * @Assert\NotBlank(groups="beaconmodel", message="Please select if the beacon model can be tracked.")
     */    
    protected $isLocateTrack;
    
    /**
     * @ORM\Column(name="is_visible_map", type="boolean")
     * @Assert\NotBlank(groups="beaconmodel", message="Please select if the beacon model is visible on the map.")
     */    
    protected $isVisibleMap;
    
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="Beaconmodelmake", mappedBy="beaconmodel", cascade={"persist"})
     */
    protected $makes; 

    /**
     * @ORM\OneToOne(targetEntity="Picture")
     * @Assert\Type(type="Contigo\ModelBundle\Entity\Picture")
     */    
    protected $picture; 
    
 	public function __construct()
    {
        $this->makes = new \Doctrine\Common\Collections\ArrayCollection();
    }    

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
     * @return text $notes
     */
    public function getNotes()
    {
        return $this->notes;
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
     * Set height
     *
     * @param float $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * Get height
     *
     * @return float $height
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set width
     *
     * @param float $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * Get width
     *
     * @return float $width
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set depth
     *
     * @param float $depth
     */
    public function setDepth($depth)
    {
        $this->depth = $depth;
    }

    /**
     * Get depth
     *
     * @return float $depth
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * Set weight
     *
     * @param float $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * Get weight
     *
     * @return float $weight
     */
    public function getWeight()
    {
        return $this->weight;
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
     * Set deviceTableName
     *
     * @param string $deviceTableName
     */
    public function setDeviceTableName($deviceTableName)
    {
        $this->deviceTableName = $deviceTableName;
    }

    /**
     * Get deviceTableName
     *
     * @return string $deviceTableName
     */
    public function getDeviceTableName()
    {
        return $this->deviceTableName;
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
     * Set maxOverlappingSen
     *
     * @param integer $maxOverlappingSen
     */
    public function setMaxOverlappingSen($maxOverlappingSen)
    {
        $this->maxOverlappingSen = $maxOverlappingSen;
    }

    /**
     * Get maxOverlappingSen
     *
     * @return integer $maxOverlappingSen
     */
    public function getMaxOverlappingSen()
    {
        return $this->maxOverlappingSen;
    }

    /**
     * Set outputCount
     *
     * @param integer $outputCount
     */
    public function setOutputCount($outputCount)
    {
        $this->outputCount = $outputCount;
    }

    /**
     * Get outputCount
     *
     * @return integer $outputCount
     */
    public function getOutputCount()
    {
        return $this->outputCount;
    }

    /**
     * Set inputCount
     *
     * @param integer $inputCount
     */
    public function setInputCount($inputCount)
    {
        $this->inputCount = $inputCount;
    }

    /**
     * Get inputCount
     *
     * @return integer $inputCount
     */
    public function getInputCount()
    {
        return $this->inputCount;
    }

    /**
     * Set isLocateTrack
     *
     * @param boolean $isLocateTrack
     */
    public function setIsLocateTrack($isLocateTrack)
    {
        $this->isLocateTrack = $isLocateTrack;
    }

    /**
     * Get isLocateTrack
     *
     * @return boolean $isLocateTrack
     */
    public function getIsLocateTrack()
    {
        return $this->isLocateTrack;
    }

    /**
     * Set isVisibleMap
     *
     * @param boolean $isVisibleMap
     */
    public function setIsVisibleMap($isVisibleMap)
    {
        $this->isVisibleMap = $isVisibleMap;
    }

    /**
     * Get isVisibleMap
     *
     * @return boolean $isVisibleMap
     */
    public function getIsVisibleMap()
    {
        return $this->isVisibleMap;
    }
    
    /**
     * Set the collection of related makes
     *
     * @param \Doctrine\Common\Collections\ArrayCollection $makes
     */
    public function setMakes(\Doctrine\Common\Collections\ArrayCollection $makes)
    {
        $this->makes = $makes;
    }    
    
    /**
     * Get the collection of related makes
     *
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getMakes()
    {
        return $this->makes;
    }
    
    /**
     * Set picture
     *
     * @param string $picture
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }     

    /**
     * Get picture
     *
     * @return string $picture
     */
    public function getPicture()
    {
        return $this->picture;
    }    
}