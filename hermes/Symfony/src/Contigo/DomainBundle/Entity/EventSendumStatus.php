<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\EventSendumStatus
 *
 * @Table(name="event_sendum_status")
 * @Entity
 */
class EventSendumStatus
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="event_sendum_status_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=false)
     */
    private $beaconId;

    /**
     * @var bigint $networkTimestamp
     *
     * @Column(name="network_timestamp", type="bigint", nullable=true)
     */
    private $networkTimestamp;

    /**
     * @var decimal $batteryVoltage
     *
     * @Column(name="battery_voltage", type="decimal", nullable=true)
     */
    private $batteryVoltage;

    /**
     * @var smallint $temperatureFahrenheit
     *
     * @Column(name="temperature_fahrenheit", type="smallint", nullable=true)
     */
    private $temperatureFahrenheit;

    /**
     * @var smallint $signalStrength
     *
     * @Column(name="signal_strength", type="smallint", nullable=true)
     */
    private $signalStrength;

    /**
     * @var string $batteryType
     *
     * @Column(name="battery_type", type="string", length=25, nullable=true)
     */
    private $batteryType;

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