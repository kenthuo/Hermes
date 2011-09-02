<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Locate201104B10to15k
 *
 * @Table(name="locate_201104_b10to15k")
 * @Entity
 */
class Locate201104B10to15k
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="locate_201104_b10to15k_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $assetId
     *
     * @Column(name="asset_id", type="bigint", nullable=true)
     */
    private $assetId;

    /**
     * @var bigint $dependentId
     *
     * @Column(name="dependent_id", type="bigint", nullable=true)
     */
    private $dependentId;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=false)
     */
    private $beaconId;

    /**
     * @var bigint $planId
     *
     * @Column(name="plan_id", type="bigint", nullable=true)
     */
    private $planId;

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
     * @var string $address
     *
     * @Column(name="address", type="string", length=100, nullable=true)
     */
    private $address;

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
     * @var bigint $timestamp
     *
     * @Column(name="timestamp", type="bigint", nullable=true)
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
     * @Column(name="city", type="string", length=70, nullable=true)
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
     * @var integer $gpsAge
     *
     * @Column(name="gps_age", type="integer", nullable=true)
     */
    private $gpsAge;

    /**
     * @var bigint $eventIndexId
     *
     * @Column(name="event_index_id", type="bigint", nullable=true)
     */
    private $eventIndexId;

    /**
     * @var bigint $odometer
     *
     * @Column(name="odometer", type="bigint", nullable=true)
     */
    private $odometer;

    /**
     * @var integer $accuracy
     *
     * @Column(name="accuracy", type="integer", nullable=true)
     */
    private $accuracy;

    /**
     * @var integer $battLevel
     *
     * @Column(name="batt_level", type="integer", nullable=true)
     */
    private $battLevel;

    /**
     * @var integer $signalQuality
     *
     * @Column(name="signal_quality", type="integer", nullable=true)
     */
    private $signalQuality;

    /**
     * @var integer $gpsSats
     *
     * @Column(name="gps_sats", type="integer", nullable=true)
     */
    private $gpsSats;

    /**
     * @var boolean $isAsleep
     *
     * @Column(name="is_asleep", type="boolean", nullable=false)
     */
    private $isAsleep;


}