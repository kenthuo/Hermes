<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\EventAuxalarmTt
 *
 * @Table(name="event_auxalarm_tt")
 * @Entity
 */
class EventAuxalarmTt
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="event_auxalarm_tt_id_seq", allocationSize="1", initialValue="1")
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
     * @var bigint $engineHours
     *
     * @Column(name="engine_hours", type="bigint", nullable=true)
     */
    private $engineHours;

    /**
     * @var string $lpa
     *
     * @Column(name="lpa", type="string", nullable=true)
     */
    private $lpa;

    /**
     * @var string $mpa
     *
     * @Column(name="mpa", type="string", nullable=true)
     */
    private $mpa;

    /**
     * @var string $hpa
     *
     * @Column(name="hpa", type="string", nullable=true)
     */
    private $hpa;

    /**
     * @var integer $batteryLevel
     *
     * @Column(name="battery_level", type="integer", nullable=true)
     */
    private $batteryLevel;

    /**
     * @var string $inputName
     *
     * @Column(name="input_name", type="string", length=100, nullable=true)
     */
    private $inputName;

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