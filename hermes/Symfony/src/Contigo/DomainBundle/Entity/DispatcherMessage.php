<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\DispatcherMessage
 *
 * @Table(name="dispatcher_message")
 * @Entity
 */
class DispatcherMessage
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="dispatcher_message_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var text $subject
     *
     * @Column(name="subject", type="text", nullable=true)
     */
    private $subject;

    /**
     * @var text $body
     *
     * @Column(name="body", type="text", nullable=true)
     */
    private $body;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=true)
     */
    private $beaconId;

    /**
     * @var bigint $driverId
     *
     * @Column(name="driver_id", type="bigint", nullable=true)
     */
    private $driverId;

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
     * @var string $mdtEsn
     *
     * @Column(name="mdt_esn", type="string", length=50, nullable=true)
     */
    private $mdtEsn;

    /**
     * @var bigint $sentBy
     *
     * @Column(name="sent_by", type="bigint", nullable=false)
     */
    private $sentBy;

    /**
     * @var bigint $sentTs
     *
     * @Column(name="sent_ts", type="bigint", nullable=false)
     */
    private $sentTs;

    /**
     * @var bigint $arrivedTs
     *
     * @Column(name="arrived_ts", type="bigint", nullable=true)
     */
    private $arrivedTs;

    /**
     * @var bigint $readTs
     *
     * @Column(name="read_ts", type="bigint", nullable=true)
     */
    private $readTs;

    /**
     * @var bigint $readBy
     *
     * @Column(name="read_by", type="bigint", nullable=true)
     */
    private $readBy;

    /**
     * @var bigint $softDeletedTs
     *
     * @Column(name="soft_deleted_ts", type="bigint", nullable=true)
     */
    private $softDeletedTs;

    /**
     * @var bigint $softDeletedBy
     *
     * @Column(name="soft_deleted_by", type="bigint", nullable=true)
     */
    private $softDeletedBy;

    /**
     * @var boolean $isSetupMsg
     *
     * @Column(name="is_setup_msg", type="boolean", nullable=true)
     */
    private $isSetupMsg;


}