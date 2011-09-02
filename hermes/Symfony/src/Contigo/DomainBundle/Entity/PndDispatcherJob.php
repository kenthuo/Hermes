<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\PndDispatcherJob
 *
 * @Table(name="pnd_dispatcher_job")
 * @Entity
 */
class PndDispatcherJob
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="pnd_dispatcher_job_id_seq", allocationSize="1", initialValue="1")
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
     * @Column(name="asset_id", type="bigint", nullable=false)
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
     * @var bigint $etaTime
     *
     * @Column(name="eta_time", type="bigint", nullable=true)
     */
    private $etaTime;

    /**
     * @var bigint $etaDistance
     *
     * @Column(name="eta_distance", type="bigint", nullable=true)
     */
    private $etaDistance;

    /**
     * @var string $jobType
     *
     * @Column(name="job_type", type="string", length=50, nullable=false)
     */
    private $jobType;

    /**
     * @var text $jobDestination
     *
     * @Column(name="job_destination", type="text", nullable=false)
     */
    private $jobDestination;

    /**
     * @var decimal $jobLat
     *
     * @Column(name="job_lat", type="decimal", nullable=true)
     */
    private $jobLat;

    /**
     * @var decimal $jobLon
     *
     * @Column(name="job_lon", type="decimal", nullable=true)
     */
    private $jobLon;

    /**
     * @var text $description
     *
     * @Column(name="description", type="text", nullable=true)
     */
    private $description;

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
     * @var string $status
     *
     * @Column(name="status", type="string", length=50, nullable=true)
     */
    private $status;

    /**
     * @var bigint $pndJobAuditId
     *
     * @Column(name="pnd_job_audit_id", type="bigint", nullable=false)
     */
    private $pndJobAuditId;

    /**
     * @var bigint $statusTs
     *
     * @Column(name="status_ts", type="bigint", nullable=true)
     */
    private $statusTs;

    /**
     * @var bigint $orgPndDispatcherJobId
     *
     * @Column(name="org_pnd_dispatcher_job_id", type="bigint", nullable=true)
     */
    private $orgPndDispatcherJobId;

    /**
     * @var string $prevStatus
     *
     * @Column(name="prev_status", type="string", length=50, nullable=true)
     */
    private $prevStatus;

    /**
     * @var bigint $prevStatusTs
     *
     * @Column(name="prev_status_ts", type="bigint", nullable=true)
     */
    private $prevStatusTs;

    /**
     * @var bigint $ackTime
     *
     * @Column(name="ack_time", type="bigint", nullable=true)
     */
    private $ackTime;

    /**
     * @var bigint $doneTime
     *
     * @Column(name="done_time", type="bigint", nullable=true)
     */
    private $doneTime;


}