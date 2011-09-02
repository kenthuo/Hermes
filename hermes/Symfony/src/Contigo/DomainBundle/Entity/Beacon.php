<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Beacon
 *
 * @Table(name="beacon")
 * @Entity
 */
class Beacon
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="beacon_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $name
     *
     * @Column(name="name", type="string", length=40, nullable=true)
     */
    private $name;

    /**
     * @var boolean $canNotifyStation
     *
     * @Column(name="can_notify_station", type="boolean", nullable=true)
     */
    private $canNotifyStation;

    /**
     * @var Contigo\DomainBundle\Entity\Icon
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Icon")
     * @JoinColumns({
     *   @JoinColumn(name="icon_id", referencedColumnName="id")
     * })
     */
    private $icon;

    /**
     * @var Contigo\DomainBundle\Entity\Stock
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Stock")
     * @JoinColumns({
     *   @JoinColumn(name="stock_id", referencedColumnName="id")
     * })
     */
    private $stock;

    /**
     * @var Contigo\DomainBundle\Entity\Customer
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Customer")
     * @JoinColumns({
     *   @JoinColumn(name="owner_customer_id", referencedColumnName="id")
     * })
     */
    private $ownerCustomer;

    /**
     * @var Contigo\DomainBundle\Entity\Subscriber
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Subscriber")
     * @JoinColumns({
     *   @JoinColumn(name="registered_subscriber_id", referencedColumnName="id")
     * })
     */
    private $registeredSubscriber;

    /**
     * @var Contigo\DomainBundle\Entity\Beaconmodel
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Beaconmodel")
     * @JoinColumns({
     *   @JoinColumn(name="beaconmodel_id", referencedColumnName="id")
     * })
     */
    private $beaconmodel;

    /**
     * @var Contigo\DomainBundle\Entity\Dependent
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Dependent")
     * @JoinColumns({
     *   @JoinColumn(name="dependent_id", referencedColumnName="id")
     * })
     */
    private $dependent;

    /**
     * @var Contigo\DomainBundle\Entity\Organization
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Organization")
     * @JoinColumns({
     *   @JoinColumn(name="registered_org_id", referencedColumnName="id")
     * })
     */
    private $registeredOrg;

    /**
     * @var Contigo\DomainBundle\Entity\Plan
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Plan")
     * @JoinColumns({
     *   @JoinColumn(name="plan_id", referencedColumnName="id")
     * })
     */
    private $plan;

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