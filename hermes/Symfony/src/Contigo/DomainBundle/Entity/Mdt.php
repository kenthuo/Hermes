<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Mdt
 *
 * @Table(name="mdt")
 * @Entity
 */
class Mdt
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="mdt_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $customerId
     *
     * @Column(name="customer_id", type="bigint", nullable=false)
     */
    private $customerId;

    /**
     * @var string $esn
     *
     * @Column(name="esn", type="string", length=50, nullable=false)
     */
    private $esn;

    /**
     * @var text $rootPassword
     *
     * @Column(name="root_password", type="text", nullable=true)
     */
    private $rootPassword;

    /**
     * @var Contigo\DomainBundle\Entity\PeripheralStock
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\PeripheralStock")
     * @JoinColumns({
     *   @JoinColumn(name="peripheral_stock_id", referencedColumnName="id")
     * })
     */
    private $peripheralStock;

    /**
     * @var Contigo\DomainBundle\Entity\Organization
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Organization")
     * @JoinColumns({
     *   @JoinColumn(name="organization_id", referencedColumnName="id")
     * })
     */
    private $organization;

    /**
     * @var Contigo\DomainBundle\Entity\MdtModel
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\MdtModel")
     * @JoinColumns({
     *   @JoinColumn(name="mdt_model_id", referencedColumnName="id")
     * })
     */
    private $mdtModel;

    /**
     * @var Contigo\DomainBundle\Entity\Asset
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Asset")
     * @JoinColumns({
     *   @JoinColumn(name="asset_id", referencedColumnName="id")
     * })
     */
    private $asset;


}