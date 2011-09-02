<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\BeaconServicePlanHistory
 *
 * @Table(name="beacon_service_plan_history")
 * @Entity
 */
class BeaconServicePlanHistory
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="beacon_service_plan_history_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=true)
     */
    private $beaconId;

    /**
     * @var bigint $planId
     *
     * @Column(name="plan_id", type="bigint", nullable=true)
     */
    private $planId;

    /**
     * @var bigint $oldPlanId
     *
     * @Column(name="old_plan_id", type="bigint", nullable=true)
     */
    private $oldPlanId;

    /**
     * @var bigint $startTimestamp
     *
     * @Column(name="start_timestamp", type="bigint", nullable=true)
     */
    private $startTimestamp;

    /**
     * @var bigint $endTimestamp
     *
     * @Column(name="end_timestamp", type="bigint", nullable=true)
     */
    private $endTimestamp;

    /**
     * @var bigint $xid
     *
     * @Column(name="xid", type="bigint", nullable=true)
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
     * @var boolean $canNotifyStation
     *
     * @Column(name="can_notify_station", type="boolean", nullable=true)
     */
    private $canNotifyStation;

    /**
     * @var bigint $mexicoRoamingStartTs
     *
     * @Column(name="mexico_roaming_start_ts", type="bigint", nullable=true)
     */
    private $mexicoRoamingStartTs;

    /**
     * @var bigint $contractExpiry
     *
     * @Column(name="contract_expiry", type="bigint", nullable=true)
     */
    private $contractExpiry;

    /**
     * @var string $status
     *
     * @Column(name="status", type="string", length=15, nullable=true)
     */
    private $status;

    /**
     * @var string $type
     *
     * @Column(name="type", type="string", length=20, nullable=true)
     */
    private $type;


}