<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\PndDriverJob
 *
 * @Table(name="pnd_driver_job")
 * @Entity
 */
class PndDriverJob
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="pnd_driver_job_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $pndDispatcherJobId
     *
     * @Column(name="pnd_dispatcher_job_id", type="bigint", nullable=false)
     */
    private $pndDispatcherJobId;

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
     * @var bigint $eta
     *
     * @Column(name="eta", type="bigint", nullable=true)
     */
    private $eta;

    /**
     * @var string $status
     *
     * @Column(name="status", type="string", length=50, nullable=true)
     */
    private $status;

    /**
     * @var bigint $receivedTs
     *
     * @Column(name="received_ts", type="bigint", nullable=false)
     */
    private $receivedTs;

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
     * @var string $streetAddr
     *
     * @Column(name="street_addr", type="string", length=255, nullable=true)
     */
    private $streetAddr;

    /**
     * @var string $city
     *
     * @Column(name="city", type="string", length=150, nullable=true)
     */
    private $city;

    /**
     * @var string $county
     *
     * @Column(name="county", type="string", length=150, nullable=true)
     */
    private $county;

    /**
     * @var string $state
     *
     * @Column(name="state", type="string", length=25, nullable=true)
     */
    private $state;

    /**
     * @var string $country
     *
     * @Column(name="country", type="string", length=25, nullable=true)
     */
    private $country;

    /**
     * @var string $zipCode
     *
     * @Column(name="zip_code", type="string", length=25, nullable=true)
     */
    private $zipCode;

    /**
     * @var float $altitude
     *
     * @Column(name="altitude", type="float", nullable=true)
     */
    private $altitude;

    /**
     * @var float $speed
     *
     * @Column(name="speed", type="float", nullable=true)
     */
    private $speed;

    /**
     * @var string $direction
     *
     * @Column(name="direction", type="string", length=10, nullable=true)
     */
    private $direction;

    /**
     * @var decimal $pndLat
     *
     * @Column(name="pnd_lat", type="decimal", nullable=true)
     */
    private $pndLat;

    /**
     * @var decimal $pndLon
     *
     * @Column(name="pnd_lon", type="decimal", nullable=true)
     */
    private $pndLon;

    /**
     * @var boolean $pndFixStatus
     *
     * @Column(name="pnd_fix_status", type="boolean", nullable=true)
     */
    private $pndFixStatus;

    /**
     * @var bigint $pndJobAuditId
     *
     * @Column(name="pnd_job_audit_id", type="bigint", nullable=false)
     */
    private $pndJobAuditId;


}