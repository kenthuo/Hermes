<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\BeaconInventoryAudit
 *
 * @Table(name="beacon_inventory_audit")
 * @Entity
 */
class BeaconInventoryAudit
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="beacon_inventory_audit_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=true)
     */
    private $beaconId;

    /**
     * @var string $esn
     *
     * @Column(name="esn", type="string", length=100, nullable=true)
     */
    private $esn;

    /**
     * @var string $serialNumber
     *
     * @Column(name="serial_number", type="string", length=100, nullable=true)
     */
    private $serialNumber;

    /**
     * @var bigint $ownerCustomerId
     *
     * @Column(name="owner_customer_id", type="bigint", nullable=true)
     */
    private $ownerCustomerId;

    /**
     * @var float $gmmsCost
     *
     * @Column(name="gmms_cost", type="float", nullable=true)
     */
    private $gmmsCost;

    /**
     * @var string $gmmsCostCurrency
     *
     * @Column(name="gmms_cost_currency", type="string", length=20, nullable=true)
     */
    private $gmmsCostCurrency;

    /**
     * @var float $p2pCost
     *
     * @Column(name="p2p_cost", type="float", nullable=true)
     */
    private $p2pCost;

    /**
     * @var string $p2pCostCurrency
     *
     * @Column(name="p2p_cost_currency", type="string", length=20, nullable=true)
     */
    private $p2pCostCurrency;

    /**
     * @var bigint $timestamp
     *
     * @Column(name="timestamp", type="bigint", nullable=true)
     */
    private $timestamp;


}