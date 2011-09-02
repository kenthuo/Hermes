<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\BeaconRecurProfileHistory
 *
 * @Table(name="beacon_recur_profile_history")
 * @Entity
 */
class BeaconRecurProfileHistory
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="beacon_recur_profile_history_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=true)
     */
    private $beaconId;

    /**
     * @var bigint $subscriberId
     *
     * @Column(name="subscriber_id", type="bigint", nullable=true)
     */
    private $subscriberId;

    /**
     * @var bigint $organizationId
     *
     * @Column(name="organization_id", type="bigint", nullable=true)
     */
    private $organizationId;

    /**
     * @var bigint $planId
     *
     * @Column(name="plan_id", type="bigint", nullable=true)
     */
    private $planId;

    /**
     * @var string $beaconEsn
     *
     * @Column(name="beacon_esn", type="string", length=50, nullable=true)
     */
    private $beaconEsn;

    /**
     * @var float $monthlyCostMexicoRoaming
     *
     * @Column(name="monthly_cost_mexico_roaming", type="float", nullable=true)
     */
    private $monthlyCostMexicoRoaming;

    /**
     * @var string $ppalProfileid
     *
     * @Column(name="ppal_profileid", type="string", length=25, nullable=true)
     */
    private $ppalProfileid;

    /**
     * @var string $profilename
     *
     * @Column(name="profilename", type="string", length=200, nullable=true)
     */
    private $profilename;

    /**
     * @var string $start
     *
     * @Column(name="start", type="string", length=10, nullable=true)
     */
    private $start;

    /**
     * @var string $payperiod
     *
     * @Column(name="payperiod", type="string", length=4, nullable=true)
     */
    private $payperiod;

    /**
     * @var smallint $term
     *
     * @Column(name="term", type="smallint", nullable=true)
     */
    private $term;

    /**
     * @var string $status
     *
     * @Column(name="status", type="string", length=10, nullable=true)
     */
    private $status;

    /**
     * @var text $comment
     *
     * @Column(name="comment", type="text", nullable=true)
     */
    private $comment;

    /**
     * @var float $amount
     *
     * @Column(name="amount", type="float", nullable=true)
     */
    private $amount;

    /**
     * @var string $currency
     *
     * @Column(name="currency", type="string", length=10, nullable=true)
     */
    private $currency;

    /**
     * @var string $origid
     *
     * @Column(name="origid", type="string", length=25, nullable=true)
     */
    private $origid;

    /**
     * @var string $billingStreetAddr
     *
     * @Column(name="billing_street_addr", type="string", length=150, nullable=true)
     */
    private $billingStreetAddr;

    /**
     * @var string $billingCity
     *
     * @Column(name="billing_city", type="string", length=150, nullable=true)
     */
    private $billingCity;

    /**
     * @var string $billingState
     *
     * @Column(name="billing_state", type="string", length=25, nullable=true)
     */
    private $billingState;

    /**
     * @var string $billingCountry
     *
     * @Column(name="billing_country", type="string", length=25, nullable=true)
     */
    private $billingCountry;

    /**
     * @var string $billingZipCode
     *
     * @Column(name="billing_zip_code", type="string", length=25, nullable=true)
     */
    private $billingZipCode;

    /**
     * @var string $billingPhone
     *
     * @Column(name="billing_phone", type="string", length=25, nullable=true)
     */
    private $billingPhone;

    /**
     * @var string $billingEmail
     *
     * @Column(name="billing_email", type="string", length=150, nullable=true)
     */
    private $billingEmail;

    /**
     * @var string $ccName
     *
     * @Column(name="cc_name", type="string", length=100, nullable=true)
     */
    private $ccName;

    /**
     * @var string $ccNumber
     *
     * @Column(name="cc_number", type="string", length=5, nullable=true)
     */
    private $ccNumber;

    /**
     * @var string $ccType
     *
     * @Column(name="cc_type", type="string", length=25, nullable=true)
     */
    private $ccType;

    /**
     * @var string $ccExpiryDate
     *
     * @Column(name="cc_expiry_date", type="string", length=5, nullable=true)
     */
    private $ccExpiryDate;

    /**
     * @var boolean $isDeleted
     *
     * @Column(name="is_deleted", type="boolean", nullable=true)
     */
    private $isDeleted;

    /**
     * @var bigint $timestamp
     *
     * @Column(name="timestamp", type="bigint", nullable=false)
     */
    private $timestamp;

    /**
     * @var bigint $accessListId
     *
     * @Column(name="access_list_id", type="bigint", nullable=false)
     */
    private $accessListId;

    /**
     * @var bigint $nextTxTimestamp
     *
     * @Column(name="next_tx_timestamp", type="bigint", nullable=true)
     */
    private $nextTxTimestamp;

    /**
     * @var string $firstname
     *
     * @Column(name="firstname", type="string", length=100, nullable=true)
     */
    private $firstname;

    /**
     * @var string $lastname
     *
     * @Column(name="lastname", type="string", length=100, nullable=true)
     */
    private $lastname;

    /**
     * @var bigint $prevTxTimestamp
     *
     * @Column(name="prev_tx_timestamp", type="bigint", nullable=true)
     */
    private $prevTxTimestamp;

    /**
     * @var float $basicPlanCost
     *
     * @Column(name="basic_plan_cost", type="float", nullable=true)
     */
    private $basicPlanCost;

    /**
     * @var bigint $basicPlanId
     *
     * @Column(name="basic_plan_id", type="bigint", nullable=true)
     */
    private $basicPlanId;


}