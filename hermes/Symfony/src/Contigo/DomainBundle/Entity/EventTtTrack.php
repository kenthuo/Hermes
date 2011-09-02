<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\EventTtTrack
 *
 * @Table(name="event_tt_track")
 * @Entity
 */
class EventTtTrack
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="event_tt_track_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=false)
     */
    private $beaconId;

    /**
     * @var bigint $locateId
     *
     * @Column(name="locate_id", type="bigint", nullable=false)
     */
    private $locateId;

    /**
     * @var bigint $networkTimestamp
     *
     * @Column(name="network_timestamp", type="bigint", nullable=true)
     */
    private $networkTimestamp;

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
     * @var integer $triggerType
     *
     * @Column(name="trigger_type", type="integer", nullable=true)
     */
    private $triggerType;

    /**
     * @var integer $batteryLevel
     *
     * @Column(name="battery_level", type="integer", nullable=true)
     */
    private $batteryLevel;

    /**
     * @var boolean $isBatteryChanged
     *
     * @Column(name="is_battery_changed", type="boolean", nullable=true)
     */
    private $isBatteryChanged;

    /**
     * @var integer $gpsStatus
     *
     * @Column(name="gps_status", type="integer", nullable=true)
     */
    private $gpsStatus;

    /**
     * @var integer $gsmStatus
     *
     * @Column(name="gsm_status", type="integer", nullable=true)
     */
    private $gsmStatus;

    /**
     * @var integer $hpaStatus
     *
     * @Column(name="hpa_status", type="integer", nullable=true)
     */
    private $hpaStatus;

    /**
     * @var integer $mpaStatus
     *
     * @Column(name="mpa_status", type="integer", nullable=true)
     */
    private $mpaStatus;

    /**
     * @var integer $lpaStatus
     *
     * @Column(name="lpa_status", type="integer", nullable=true)
     */
    private $lpaStatus;

    /**
     * @var integer $powerStatus
     *
     * @Column(name="power_status", type="integer", nullable=true)
     */
    private $powerStatus;

    /**
     * @var integer $positionAge
     *
     * @Column(name="position_age", type="integer", nullable=true)
     */
    private $positionAge;

    /**
     * @var bigint $senId
     *
     * @Column(name="sen_id", type="bigint", nullable=true)
     */
    private $senId;

    /**
     * @var string $scenarioName
     *
     * @Column(name="scenario_name", type="string", length=100, nullable=true)
     */
    private $scenarioName;


}