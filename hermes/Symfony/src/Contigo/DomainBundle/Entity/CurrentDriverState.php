<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\CurrentDriverState
 *
 * @Table(name="current_driver_state")
 * @Entity
 */
class CurrentDriverState
{
    /**
     * @var bigint $driverId
     *
     * @Column(name="driver_id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="current_driver_state_driver_id_seq", allocationSize="1", initialValue="1")
     */
    private $driverId;

    /**
     * @var string $mdtEsn
     *
     * @Column(name="mdt_esn", type="string", length=50, nullable=true)
     */
    private $mdtEsn;

    /**
     * @var bigint $mdtTimestamp
     *
     * @Column(name="mdt_timestamp", type="bigint", nullable=true)
     */
    private $mdtTimestamp;

    /**
     * @var bigint $assetId
     *
     * @Column(name="asset_id", type="bigint", nullable=true)
     */
    private $assetId;

    /**
     * @var string $status
     *
     * @Column(name="status", type="string", length=30, nullable=true)
     */
    private $status;

    /**
     * @var bigint $networkTimestamp
     *
     * @Column(name="network_timestamp", type="bigint", nullable=true)
     */
    private $networkTimestamp;

    /**
     * @var string $direction
     *
     * @Column(name="direction", type="string", length=100, nullable=true)
     */
    private $direction;

    /**
     * @var decimal $lon
     *
     * @Column(name="lon", type="decimal", nullable=true)
     */
    private $lon;

    /**
     * @var decimal $lat
     *
     * @Column(name="lat", type="decimal", nullable=true)
     */
    private $lat;

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
     * @var float $timezone
     *
     * @Column(name="timezone", type="float", nullable=true)
     */
    private $timezone;

    /**
     * @var string $tzAbbrev
     *
     * @Column(name="tz_abbrev", type="string", length=4, nullable=true)
     */
    private $tzAbbrev;

    /**
     * @var boolean $isValidFix
     *
     * @Column(name="is_valid_fix", type="boolean", nullable=true)
     */
    private $isValidFix;

    /**
     * @var string $streetAddr
     *
     * @Column(name="street_addr", type="string", length=255, nullable=true)
     */
    private $streetAddr;

    /**
     * @var string $city
     *
     * @Column(name="city", type="string", length=25, nullable=true)
     */
    private $city;

    /**
     * @var string $county
     *
     * @Column(name="county", type="string", length=50, nullable=true)
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
     * @var string $mdtTsRaw
     *
     * @Column(name="mdt_ts_raw", type="string", length=12, nullable=true)
     */
    private $mdtTsRaw;


}