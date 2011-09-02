<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\DrvPndDispatcherMsg
 *
 * @Table(name="drv_pnd_dispatcher_msg")
 * @Entity
 */
class DrvPndDispatcherMsg
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="drv_pnd_dispatcher_msg_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=true)
     */
    private $beaconId;

    /**
     * @var bigint $assetId
     *
     * @Column(name="asset_id", type="bigint", nullable=true)
     */
    private $assetId;

    /**
     * @var bigint $departmentId
     *
     * @Column(name="department_id", type="bigint", nullable=true)
     */
    private $departmentId;

    /**
     * @var string $pndEsn
     *
     * @Column(name="pnd_esn", type="string", length=50, nullable=false)
     */
    private $pndEsn;

    /**
     * @var bigint $guardianId
     *
     * @Column(name="guardian_id", type="bigint", nullable=true)
     */
    private $guardianId;

    /**
     * @var string $driverId
     *
     * @Column(name="driver_id", type="string", length=49, nullable=false)
     */
    private $driverId;

    /**
     * @var integer $priority
     *
     * @Column(name="priority", type="integer", nullable=true)
     */
    private $priority;

    /**
     * @var text $message
     *
     * @Column(name="message", type="text", nullable=false)
     */
    private $message;

    /**
     * @var string $responseType
     *
     * @Column(name="response_type", type="string", length=50, nullable=false)
     */
    private $responseType;

    /**
     * @var string $status
     *
     * @Column(name="status", type="string", length=50, nullable=true)
     */
    private $status;

    /**
     * @var bigint $sentTs
     *
     * @Column(name="sent_ts", type="bigint", nullable=false)
     */
    private $sentTs;

    /**
     * @var bigint $sentBy
     *
     * @Column(name="sent_by", type="bigint", nullable=false)
     */
    private $sentBy;

    /**
     * @var float $timezone
     *
     * @Column(name="timezone", type="float", nullable=true)
     */
    private $timezone;

    /**
     * @var string $tzAbbrev
     *
     * @Column(name="tz_abbrev", type="string", length=5, nullable=true)
     */
    private $tzAbbrev;

    /**
     * @var bigint $pndMsgAuditId
     *
     * @Column(name="pnd_msg_audit_id", type="bigint", nullable=true)
     */
    private $pndMsgAuditId;

    /**
     * @var bigint $orgDrvPndDispatcherMsgId
     *
     * @Column(name="org_drv_pnd_dispatcher_msg_id", type="bigint", nullable=true)
     */
    private $orgDrvPndDispatcherMsgId;

    /**
     * @var bigint $drvPndDispatcherGroupMsgId
     *
     * @Column(name="drv_pnd_dispatcher_group_msg_id", type="bigint", nullable=true)
     */
    private $drvPndDispatcherGroupMsgId;

    /**
     * @var boolean $ackByDriver
     *
     * @Column(name="ack_by_driver", type="boolean", nullable=false)
     */
    private $ackByDriver;


}