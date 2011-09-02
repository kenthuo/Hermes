<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\EventTamperDetectorAccessory
 *
 * @Table(name="event_tamper_detector_accessory")
 * @Entity
 */
class EventTamperDetectorAccessory
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="event_tamper_detector_accessory_id_seq", allocationSize="1", initialValue="1")
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
     * @Column(name="network_timestamp", type="bigint", nullable=false)
     */
    private $networkTimestamp;

    /**
     * @var boolean $wasOpen
     *
     * @Column(name="was_open", type="boolean", nullable=true)
     */
    private $wasOpen;

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