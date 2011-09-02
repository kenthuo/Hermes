<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\PndJobAudit
 *
 * @Table(name="pnd_job_audit")
 * @Entity
 */
class PndJobAudit
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="pnd_job_audit_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=false)
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
     * @Column(name="department_id", type="bigint", nullable=false)
     */
    private $departmentId;

    /**
     * @var string $pndEsn
     *
     * @Column(name="pnd_esn", type="string", length=50, nullable=false)
     */
    private $pndEsn;

    /**
     * @var string $msgType
     *
     * @Column(name="msg_type", type="string", length=50, nullable=true)
     */
    private $msgType;

    /**
     * @var string $msgFlow
     *
     * @Column(name="msg_flow", type="string", length=5, nullable=true)
     */
    private $msgFlow;

    /**
     * @var text $message
     *
     * @Column(name="message", type="text", nullable=true)
     */
    private $message;

    /**
     * @var bigint $timestamp
     *
     * @Column(name="timestamp", type="bigint", nullable=false)
     */
    private $timestamp;

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
     * @var bigint $accessListId
     *
     * @Column(name="access_list_id", type="bigint", nullable=false)
     */
    private $accessListId;

    /**
     * @var bigint $guardianId
     *
     * @Column(name="guardian_id", type="bigint", nullable=true)
     */
    private $guardianId;

    /**
     * @var string $pndDriverId
     *
     * @Column(name="pnd_driver_id", type="string", length=49, nullable=true)
     */
    private $pndDriverId;


}