<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Plan
 *
 * @Table(name="plan")
 * @Entity
 */
class Plan
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="plan_id_seq", allocationSize="1", initialValue="1")
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
     * @var float $monthlyFee
     *
     * @Column(name="monthly_fee", type="float", nullable=true)
     */
    private $monthlyFee;

    /**
     * @var string $currency
     *
     * @Column(name="currency", type="string", length=20, nullable=true)
     */
    private $currency;

    /**
     * @var integer $usageAmount
     *
     * @Column(name="usage_amount", type="integer", nullable=true)
     */
    private $usageAmount;

    /**
     * @var string $overagePlan
     *
     * @Column(name="overage_plan", type="string", length=10, nullable=true)
     */
    private $overagePlan;

    /**
     * @var float $pricePerOverageUnit
     *
     * @Column(name="price_per_overage_unit", type="float", nullable=true)
     */
    private $pricePerOverageUnit;

    /**
     * @var float $pricePerOverageBucket
     *
     * @Column(name="price_per_overage_bucket", type="float", nullable=true)
     */
    private $pricePerOverageBucket;

    /**
     * @var integer $usageAmountPerOverageBucket
     *
     * @Column(name="usage_amount_per_overage_bucket", type="integer", nullable=true)
     */
    private $usageAmountPerOverageBucket;

    /**
     * @var string $comments
     *
     * @Column(name="comments", type="string", length=255, nullable=true)
     */
    private $comments;

    /**
     * @var integer $maxSen
     *
     * @Column(name="max_sen", type="integer", nullable=true)
     */
    private $maxSen;

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

    /**
     * @var integer $dataPolicy
     *
     * @Column(name="data_policy", type="integer", nullable=true)
     */
    private $dataPolicy;

    /**
     * @var boolean $visibility
     *
     * @Column(name="visibility", type="boolean", nullable=true)
     */
    private $visibility;

    /**
     * @var boolean $showNotifyStation
     *
     * @Column(name="show_notify_station", type="boolean", nullable=false)
     */
    private $showNotifyStation;

    /**
     * @var boolean $showMessaging
     *
     * @Column(name="show_messaging", type="boolean", nullable=false)
     */
    private $showMessaging;

    /**
     * @var boolean $availableCp
     *
     * @Column(name="available_cp", type="boolean", nullable=false)
     */
    private $availableCp;

    /**
     * @var boolean $availableRp
     *
     * @Column(name="available_rp", type="boolean", nullable=false)
     */
    private $availableRp;

    /**
     * @var float $annualFee
     *
     * @Column(name="annual_fee", type="float", nullable=true)
     */
    private $annualFee;

    /**
     * @var boolean $showMexicoRoaming
     *
     * @Column(name="show_mexico_roaming", type="boolean", nullable=false)
     */
    private $showMexicoRoaming;

    /**
     * @var float $annualCostMexicoRoaming
     *
     * @Column(name="annual_cost_mexico_roaming", type="float", nullable=true)
     */
    private $annualCostMexicoRoaming;

    /**
     * @var float $monthlyCostMexicoRoaming
     *
     * @Column(name="monthly_cost_mexico_roaming", type="float", nullable=true)
     */
    private $monthlyCostMexicoRoaming;

    /**
     * @var boolean $showPndDispatch
     *
     * @Column(name="show_pnd_dispatch", type="boolean", nullable=false)
     */
    private $showPndDispatch;

    /**
     * @var float $monthlyCostPndDispatch
     *
     * @Column(name="monthly_cost_pnd_dispatch", type="float", nullable=true)
     */
    private $monthlyCostPndDispatch;

    /**
     * @var boolean $showIvr
     *
     * @Column(name="show_ivr", type="boolean", nullable=false)
     */
    private $showIvr;

    /**
     * @var boolean $isPayPerUse
     *
     * @Column(name="is_pay_per_use", type="boolean", nullable=true)
     */
    private $isPayPerUse;

    /**
     * @var string $banType
     *
     * @Column(name="ban_type", type="string", length=255, nullable=true)
     */
    private $banType;

    /**
     * @var boolean $isBulkIvrUse
     *
     * @Column(name="is_bulk_ivr_use", type="boolean", nullable=true)
     */
    private $isBulkIvrUse;


}