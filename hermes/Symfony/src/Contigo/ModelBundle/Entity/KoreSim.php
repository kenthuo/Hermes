<?php
namespace Contigo\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="kore_sim")
 */
class KoreSim
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="bigint", nullable=false)
	 * @ORM\GeneratedValue(strategy="SEQUENCE")
	 * @ORM\SequenceGenerator(sequenceName="kore_sim_seq", initialValue="1", allocationSize="1")
	 */
    protected $id;
    
    /**
     * @ORM\Column(type="string", length="50")
     */    
    protected $imei;
    
    /**
     * @ORM\Column(type="string", length="15")
     */    
    protected $min;
    
    /**
     * @ORM\Column(name="provisioned_date", type="bigint")
     */    
    protected $provisionedDate;

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
     * Set imei
     *
     * @param string $imei
     */
    public function setImei($imei)
    {
        $this->imei = $imei;
    }

    /**
     * Get imei
     *
     * @return string $imei
     */
    public function getImei()
    {
        return $this->imei;
    }

    /**
     * Set min
     *
     * @param string $min
     */
    public function setMin($min)
    {
        $this->min = $min;
    }

    /**
     * Get min
     *
     * @return string $min
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * Set provisionedDate
     *
     * @param bigint $provisionedDate
     */
    public function setProvisionedDate($provisionedDate)
    {
        $this->provisionedDate = $provisionedDate;
    }

    /**
     * Get provisionedDate
     *
     * @return bigint $provisionedDate
     */
    public function getProvisionedDate()
    {
        return $this->provisionedDate;
    }
}