<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\DispatchApiPndJobAudit201102
 *
 * @Table(name="dispatch_api_pnd_job_audit_201102")
 * @Entity
 */
class DispatchApiPndJobAudit201102
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="dispatch_api_pnd_job_audit_201102_id_seq", allocationSize="1", initialValue="1")
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
     * @var string $beaconEsn
     *
     * @Column(name="beacon_esn", type="string", length=50, nullable=false)
     */
    private $beaconEsn;

    /**
     * @var string $pndEsn
     *
     * @Column(name="pnd_esn", type="string", length=50, nullable=false)
     */
    private $pndEsn;

    /**
     * @var string $jobDriverId
     *
     * @Column(name="job_driver_id", type="string", length=50, nullable=true)
     */
    private $jobDriverId;

    /**
     * @var bigint $jobId
     *
     * @Column(name="job_id", type="bigint", nullable=false)
     */
    private $jobId;

    /**
     * @var string $jobStatus
     *
     * @Column(name="job_status", type="string", length=50, nullable=true)
     */
    private $jobStatus;

    /**
     * @var bigint $jobEtaTime
     *
     * @Column(name="job_eta_time", type="bigint", nullable=true)
     */
    private $jobEtaTime;

    /**
     * @var integer $jobPriority
     *
     * @Column(name="job_priority", type="integer", nullable=true)
     */
    private $jobPriority;

    /**
     * @var string $street
     *
     * @Column(name="street", type="string", length=255, nullable=true)
     */
    private $street;

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
     * @Column(name="zip_code", type="string", length=10, nullable=true)
     */
    private $zipCode;

    /**
     * @var bigint $gpsTs
     *
     * @Column(name="gps_ts", type="bigint", nullable=true)
     */
    private $gpsTs;

    /**
     * @var bigint $networkTs
     *
     * @Column(name="network_ts", type="bigint", nullable=true)
     */
    private $networkTs;

    /**
     * @var decimal $lat
     *
     * @Column(name="lat", type="decimal", nullable=true)
     */
    private $lat;

    /**
     * @var decimal $lon
     *
     * @Column(name="lon", type="decimal", nullable=true)
     */
    private $lon;

    /**
     * @var float $speed
     *
     * @Column(name="speed", type="float", nullable=true)
     */
    private $speed;

    /**
     * @var float $altitude
     *
     * @Column(name="altitude", type="float", nullable=true)
     */
    private $altitude;

    /**
     * @var string $direction
     *
     * @Column(name="direction", type="string", length=10, nullable=true)
     */
    private $direction;

    /**
     * @var boolean $isValidFix
     *
     * @Column(name="is_valid_fix", type="boolean", nullable=true)
     */
    private $isValidFix;


}