<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\EventEngineHoursStatus
 *
 * @Table(name="event_engine_hours_status")
 * @Entity
 */
class EventEngineHoursStatus
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="event_engine_hours_status_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=false)
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
     * @var bigint $customerId
     *
     * @Column(name="customer_id", type="bigint", nullable=false)
     */
    private $customerId;

    /**
     * @var string $bmDevice
     *
     * @Column(name="bm_device", type="string", length=25, nullable=true)
     */
    private $bmDevice;

    /**
     * @var string $bmModel
     *
     * @Column(name="bm_model", type="string", length=25, nullable=true)
     */
    private $bmModel;

    /**
     * @var string $bmFwVersion
     *
     * @Column(name="bm_fw_version", type="string", length=25, nullable=true)
     */
    private $bmFwVersion;

    /**
     * @var boolean $isPriorityScheduled
     *
     * @Column(name="is_priority_scheduled", type="boolean", nullable=true)
     */
    private $isPriorityScheduled;

    /**
     * @var bigint $createTs
     *
     * @Column(name="create_ts", type="bigint", nullable=false)
     */
    private $createTs;

    /**
     * @var bigint $initProcessedTs
     *
     * @Column(name="init_processed_ts", type="bigint", nullable=true)
     */
    private $initProcessedTs;

    /**
     * @var bigint $finProcessedTs
     *
     * @Column(name="fin_processed_ts", type="bigint", nullable=true)
     */
    private $finProcessedTs;

    /**
     * @var smallint $statusCode
     *
     * @Column(name="status_code", type="smallint", nullable=true)
     */
    private $statusCode;

    /**
     * @var text $comments
     *
     * @Column(name="comments", type="text", nullable=true)
     */
    private $comments;

    /**
     * @var boolean $isPriorityMaintenance
     *
     * @Column(name="is_priority_maintenance", type="boolean", nullable=true)
     */
    private $isPriorityMaintenance;


}