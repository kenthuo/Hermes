<?php
namespace Contigo\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="Contigo\ModelBundle\Repository\PictureRepository")
 * @ORM\Table(name="picture")
 */
class Picture
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="bigint", nullable=false)
	 * @ORM\GeneratedValue(strategy="SEQUENCE")
	 * @ORM\SequenceGenerator(sequenceName="picture_seq", initialValue="1", allocationSize="1")
	 */
    protected $id;
    
    /**
     * @ORM\OneToOne(targetEntity="Asset")
     * @ORM\JoinColumn(name="asset_id", referencedColumnName="id")
     * @Assert\Type(type="Contigo\ModelBundle\Entity\Asset")
     */
    protected $asset;

    /**
     * @ORM\OneToOne(targetEntity="Beaconmodel")
     * @ORM\JoinColumn(name="beaconmodel_id", referencedColumnName="id")
     * @Assert\Type(type="Contigo\ModelBundle\Entity\Beaconmodel")
     */
    protected $beaconmodel; 

    /**
     * @ORM\OneToOne(targetEntity="Dependent")
     * @ORM\JoinColumn(name="dependent_id", referencedColumnName="id")
     * @Assert\Type(type="Contigo\ModelBundle\Entity\Dependent")
     */
    protected $dependent;    
    
    /**
     * @ORM\Column(type="string", length="255")
     */    
    protected $description;
    
    /**
     * @ORM\Column(type="datetime")
     */    
    protected $datetime;
    
    /**
     * @ORM\Column(type="blob")
     */    
    protected $data;
    
    /**
     * @ORM\Column(type="string", length="50")
     */    
    protected $filesize;

    /**
     * @ORM\Column(type="string", length="50")
     */    
    protected $filetype;    


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
     * Set datetime
     *
     * @param datetime $datetime
     */
    public function setDatetime($datetime)
    {
        $this->datetime = $datetime;
    }

    /**
     * Get datetime
     *
     * @return datetime $datetime
     */
    public function getDatetime()
    {
        return $this->datetime;
    }

    /**
     * Set data
     *
     * @param blob $data
     */
    public function setData(\blob $data)
    {
        $this->data = $data;
    }

    /**
     * Get data
     *
     * @return blob $data
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set filesize
     *
     * @param string $filesize
     */
    public function setFilesize($filesize)
    {
        $this->filesize = $filesize;
    }

    /**
     * Get filesize
     *
     * @return string $filesize
     */
    public function getFilesize()
    {
        return $this->filesize;
    }

    /**
     * Set filetype
     *
     * @param string $filetype
     */
    public function setFiletype($filetype)
    {
        $this->filetype = $filetype;
    }

    /**
     * Get filetype
     *
     * @return string $filetype
     */
    public function getFiletype()
    {
        return $this->filetype;
    }

    /**
     * Set asset
     *
     * @param Contigo\ModelBundle\Entity\Asset $asset
     */
    public function setAsset(\Contigo\ModelBundle\Entity\Asset $asset)
    {
        $this->asset = $asset;
    }

    /**
     * Get asset
     *
     * @return Contigo\ModelBundle\Entity\Asset $asset
     */
    public function getAsset()
    {
        return $this->asset;
    }

    /**
     * Set beaconModelBundle
     *
     * @param Contigo\ModelBundle\Entity\BeaconModelBundle $beaconModelBundle
     */
    public function setBeaconModelBundle(\Contigo\ModelBundle\Entity\BeaconModelBundle $beaconModelBundle)
    {
        $this->beaconModelBundle = $beaconModelBundle;
    }

    /**
     * Get beaconModelBundle
     *
     * @return Contigo\ModelBundle\Entity\BeaconModelBundle $beaconModelBundle
     */
    public function getBeaconModelBundle()
    {
        return $this->beaconModelBundle;
    }

    /**
     * Set dependent
     *
     * @param Contigo\ModelBundle\Entity\Dependent $dependent
     */
    public function setDependent(\Contigo\ModelBundle\Entity\Dependent $dependent)
    {
        $this->dependent = $dependent;
    }

    /**
     * Get dependent
     *
     * @return Contigo\ModelBundle\Entity\Dependent $dependent
     */
    public function getDependent()
    {
        return $this->dependent;
    }
}