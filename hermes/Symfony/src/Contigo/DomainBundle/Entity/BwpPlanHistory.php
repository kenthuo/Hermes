<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\BwpPlanHistory
 *
 * @Table(name="bwp_plan_history")
 * @Entity
 */
class BwpPlanHistory
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="bwp_plan_history_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $name
     *
     * @Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var string $description
     *
     * @Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var float $gmmsMonthlyFee
     *
     * @Column(name="gmms_monthly_fee", type="float", nullable=true)
     */
    private $gmmsMonthlyFee;

    /**
     * @var float $p2pMonthlyFee
     *
     * @Column(name="p2p_monthly_fee", type="float", nullable=true)
     */
    private $p2pMonthlyFee;

    /**
     * @var integer $p2pUsageAmount
     *
     * @Column(name="p2p_usage_amount", type="integer", nullable=true)
     */
    private $p2pUsageAmount;

    /**
     * @var float $gmmsPricePerOverage
     *
     * @Column(name="gmms_price_per_overage", type="float", nullable=true)
     */
    private $gmmsPricePerOverage;

    /**
     * @var string $p2pOveragePlan
     *
     * @Column(name="p2p_overage_plan", type="string", length=10, nullable=true)
     */
    private $p2pOveragePlan;

    /**
     * @var float $p2pPricePerOverageUnit
     *
     * @Column(name="p2p_price_per_overage_unit", type="float", nullable=true)
     */
    private $p2pPricePerOverageUnit;

    /**
     * @var float $p2pPricePerOverageBucket
     *
     * @Column(name="p2p_price_per_overage_bucket", type="float", nullable=true)
     */
    private $p2pPricePerOverageBucket;

    /**
     * @var integer $p2pUsagePerOverageBucket
     *
     * @Column(name="p2p_usage_per_overage_bucket", type="integer", nullable=true)
     */
    private $p2pUsagePerOverageBucket;

    /**
     * @var string $gmmsCurrency
     *
     * @Column(name="gmms_currency", type="string", length=5, nullable=true)
     */
    private $gmmsCurrency;

    /**
     * @var string $p2pCurrency
     *
     * @Column(name="p2p_currency", type="string", length=5, nullable=true)
     */
    private $p2pCurrency;

    /**
     * @var string $p2pWirelessNetworkProvider
     *
     * @Column(name="p2p_wireless_network_provider", type="string", length=8, nullable=true)
     */
    private $p2pWirelessNetworkProvider;

    /**
     * @var bigint $xid
     *
     * @Column(name="xid", type="bigint", nullable=false)
     */
    private $xid;

    /**
     * @var boolean $isDeleted
     *
     * @Column(name="is_deleted", type="boolean", nullable=true)
     */
    private $isDeleted;

    /**
     * @var bigint $timestamp
     *
     * @Column(name="timestamp", type="bigint", nullable=true)
     */
    private $timestamp;

    /**
     * @var bigint $accessListId
     *
     * @Column(name="access_list_id", type="bigint", nullable=true)
     */
    private $accessListId;

    /**
     * @var string $type
     *
     * @Column(name="type", type="string", length=10, nullable=true)
     */
    private $type;

    /**
     * @var string $usageUnit
     *
     * @Column(name="usage_unit", type="string", length=10, nullable=true)
     */
    private $usageUnit;


}