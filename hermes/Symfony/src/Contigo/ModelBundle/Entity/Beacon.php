<?php
namespace Contigo\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="Contigo\ModelBundle\Repository\BeaconRepository")
 * @ORM\Table(name="beacon")
 */
class Beacon
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="bigint", nullable=false)
	 * @ORM\GeneratedValue(strategy="SEQUENCE")
	 * @ORM\SequenceGenerator(sequenceName="beacon_seq", initialValue="1", allocationSize="1")
	 */
    protected $id;   
    
    /**
     * @ORM\Column(type="string", length="40")
     */    
    protected $name; 
    
    /**
     * @ORM\OneToOne(targetEntity="Beaconmodel")
     * @ORM\JoinColumn(name="beaconmodel_id", referencedColumnName="id")
     * @Assert\Type(type="Contigo\ModelBundle\Entity\Beaconmodel")
     */
    protected $beaconmodel;     
    
    /**
     * @ORM\OneToOne(targetEntity="Asset")
     * @ORM\JoinColumn(name="asset_id", referencedColumnName="id")
     * @Assert\Type(type="Contigo\ModelBundle\Entity\Asset")
     */
    protected $asset; 

    /**
     * @ORM\OneToOne(targetEntity="Dependent")
     * @ORM\JoinColumn(name="dependent_id", referencedColumnName="id")
     * @Assert\Type(type="Contigo\ModelBundle\Entity\Dependent")
     */
    protected $dependent;   

    /**
     * @ORM\OneToOne(targetEntity="Plan")
     * @ORM\JoinColumn(name="plan_id", referencedColumnName="id")
     * @Assert\Type(type="Contigo\ModelBundle\Entity\Plan")
     */
    protected $plan;

    /**
     * @ORM\OneToOne(targetEntity="Organization")
     * @ORM\JoinColumn(name="registered_org_id", referencedColumnName="id")
     * @Assert\Type(type="Contigo\ModelBundle\Entity\Organization")
     */
    protected $organization;

    /**
     * @ORM\OneToOne(targetEntity="Subscriber")
     * @ORM\JoinColumn(name="registered_subscriber_id", referencedColumnName="id")
     * @Assert\Type(type="Contigo\ModelBundle\Entity\Subscriber")
     */
    protected $subscriber;

    /**
     * @ORM\OneToOne(targetEntity="Customer")
     * @ORM\JoinColumn(name="owner_customer_id", referencedColumnName="id")
     * @Assert\Type(type="Contigo\ModelBundle\Entity\Customer")
     */
    protected $owner;

    /**
     * @ORM\OneToOne(targetEntity="Icon")
     * @ORM\JoinColumn(name="icon_id", referencedColumnName="id")
     * @Assert\Type(type="Contigo\ModelBundle\Entity\Icon")
     */
    protected $icon; 

    /**
     * @ORM\OneToOne(targetEntity="Stock")
     * @ORM\JoinColumn(name="stock_id", referencedColumnName="id")
     * @Assert\Type(type="Contigo\ModelBundle\Entity\Stock")
     */
    protected $stock;
    
    /**
     * @ORM\Column(name="can_notify_station", type="boolean")
     * @Assert\NotBlank(groups="beacon", message="Please select if the beacon can notify monitoring station.")
     */    
    protected $canNotifyStation;


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
     * Set canNotifyStation
     *
     * @param boolean $canNotifyStation
     */
    public function setCanNotifyStation($canNotifyStation)
    {
        $this->canNotifyStation = $canNotifyStation;
    }

    /**
     * Get canNotifyStation
     *
     * @return boolean $canNotifyStation
     */
    public function getCanNotifyStation()
    {
        return $this->canNotifyStation;
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
     * Get beaconmodel
     *
     * @return Contigo\ModelBundle\Entity\Beaconmodel $beaconmodel
     */
    public function getBeaconmodel()
    {
        return $this->beaconmodel;
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

    /**
     * Set plan
     *
     * @param Contigo\ModelBundle\Entity\Plan $plan
     */
    public function setPlan(\Contigo\ModelBundle\Entity\Plan $plan)
    {
        $this->plan = $plan;
    }

    /**
     * Get plan
     *
     * @return Contigo\ModelBundle\Entity\Plan $plan
     */
    public function getPlan()
    {
        return $this->plan;
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
     * @return Contigo\ModelBundle\Entity\Organization $organization
     */
    public function getOrganization()
    {
        return $this->organization;
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
     * @return Contigo\ModelBundle\Entity\Subscriber $subscriber
     */
    public function getSubscriber()
    {
        return $this->subscriber;
    }

    /**
     * Set owner
     *
     * @param Contigo\ModelBundle\Entity\Customer $owner
     */
    public function setOwner(\Contigo\ModelBundle\Entity\Customer $owner)
    {
        $this->owner = $owner;
    }

    /**
     * Get owner
     *
     * @return Contigo\ModelBundle\Entity\Customer $owner
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set icon
     *
     * @param Contigo\ModelBundle\Entity\Icon $icon
     */
    public function setIcon(\Contigo\ModelBundle\Entity\Icon $icon)
    {
        $this->icon = $icon;
    }

    /**
     * Get icon
     *
     * @return Contigo\ModelBundle\Entity\Icon $icon
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set stock
     *
     * @param Contigo\ModelBundle\Entity\Stock $stock
     */
    public function setStock(\Contigo\ModelBundle\Entity\Stock $stock)
    {
        $this->stock = $stock;
    }

    /**
     * Get stock
     *
     * @return Contigo\ModelBundle\Entity\Stock $stock
     */
    public function getStock()
    {
        return $this->stock;
    }
}