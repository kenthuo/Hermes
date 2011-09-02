<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\VapMaintenanceHistory
 *
 * @Table(name="vap_maintenance_history")
 * @Entity
 */
class VapMaintenanceHistory
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="vap_maintenance_history_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $vapId
     *
     * @Column(name="vap_id", type="bigint", nullable=true)
     */
    private $vapId;

    /**
     * @var bigint $maintenanceId
     *
     * @Column(name="maintenance_id", type="bigint", nullable=true)
     */
    private $maintenanceId;

    /**
     * @var string $status
     *
     * @Column(name="status", type="string", length=10, nullable=true)
     */
    private $status;

    /**
     * @var integer $initialOdometer
     *
     * @Column(name="initial_odometer", type="integer", nullable=true)
     */
    private $initialOdometer;

    /**
     * @var string $previousStatus
     *
     * @Column(name="previous_status", type="string", length=10, nullable=true)
     */
    private $previousStatus;

    /**
     * @var bigint $lastNotificationTimestamp
     *
     * @Column(name="last_notification_timestamp", type="bigint", nullable=true)
     */
    private $lastNotificationTimestamp;

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


}