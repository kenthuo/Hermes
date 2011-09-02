<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\BeaconHistory
 *
 * @Table(name="beacon_history")
 * @Entity
 */
class BeaconHistory
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="beacon_history_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $stockId
     *
     * @Column(name="stock_id", type="bigint", nullable=true)
     */
    private $stockId;

    /**
     * @var bigint $assetId
     *
     * @Column(name="asset_id", type="bigint", nullable=true)
     */
    private $assetId;

    /**
     * @var bigint $planId
     *
     * @Column(name="plan_id", type="bigint", nullable=true)
     */
    private $planId;

    /**
     * @var bigint $registeredOrgId
     *
     * @Column(name="registered_org_id", type="bigint", nullable=true)
     */
    private $registeredOrgId;

    /**
     * @var bigint $dependentId
     *
     * @Column(name="dependent_id", type="bigint", nullable=true)
     */
    private $dependentId;

    /**
     * @var bigint $beaconmodelId
     *
     * @Column(name="beaconmodel_id", type="bigint", nullable=true)
     */
    private $beaconmodelId;

    /**
     * @var bigint $registeredSubscriberId
     *
     * @Column(name="registered_subscriber_id", type="bigint", nullable=true)
     */
    private $registeredSubscriberId;

    /**
     * @var bigint $ownerCustomerId
     *
     * @Column(name="owner_customer_id", type="bigint", nullable=true)
     */
    private $ownerCustomerId;

    /**
     * @var string $name
     *
     * @Column(name="name", type="string", length=40, nullable=true)
     */
    private $name;

    /**
     * @var bigint $iconId
     *
     * @Column(name="icon_id", type="bigint", nullable=true)
     */
    private $iconId;

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
     * @var boolean $canNotifyStation
     *
     * @Column(name="can_notify_station", type="boolean", nullable=true)
     */
    private $canNotifyStation;


}