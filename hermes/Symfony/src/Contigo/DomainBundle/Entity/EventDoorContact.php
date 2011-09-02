<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\EventDoorContact
 *
 * @Table(name="event_door_contact")
 * @Entity
 */
class EventDoorContact
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="event_door_contact_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=false)
     */
    private $beaconId;

    /**
     * @var boolean $wasOpen
     *
     * @Column(name="was_open", type="boolean", nullable=true)
     */
    private $wasOpen;

    /**
     * @var bigint $networkTimestamp
     *
     * @Column(name="network_timestamp", type="bigint", nullable=false)
     */
    private $networkTimestamp;

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