<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\BeaconmodelPlanHistory
 *
 * @Table(name="beaconmodel_plan_history")
 * @Entity
 */
class BeaconmodelPlanHistory
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="beaconmodel_plan_history_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconmodelId
     *
     * @Column(name="beaconmodel_id", type="bigint", nullable=true)
     */
    private $beaconmodelId;

    /**
     * @var bigint $planId
     *
     * @Column(name="plan_id", type="bigint", nullable=true)
     */
    private $planId;

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
     * @var smallint $slTrackingInterval
     *
     * @Column(name="sl_tracking_interval", type="smallint", nullable=true)
     */
    private $slTrackingInterval;


}