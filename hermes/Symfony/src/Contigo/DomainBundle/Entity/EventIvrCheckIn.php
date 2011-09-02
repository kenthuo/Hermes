<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\EventIvrCheckIn
 *
 * @Table(name="event_ivr_check_in")
 * @Entity
 */
class EventIvrCheckIn
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="event_ivr_check_in_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $checkInType
     *
     * @Column(name="check_in_type", type="string", length=50, nullable=false)
     */
    private $checkInType;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=false)
     */
    private $beaconId;

    /**
     * @var bigint $dependentId
     *
     * @Column(name="dependent_id", type="bigint", nullable=false)
     */
    private $dependentId;

    /**
     * @var bigint $eventTimestamp
     *
     * @Column(name="event_timestamp", type="bigint", nullable=false)
     */
    private $eventTimestamp;

    /**
     * @var bigint $locateId
     *
     * @Column(name="locate_id", type="bigint", nullable=true)
     */
    private $locateId;

    /**
     * @var bigint $networkTimestamp
     *
     * @Column(name="network_timestamp", type="bigint", nullable=true)
     */
    private $networkTimestamp;

    /**
     * @var bigint $voiceNoteId
     *
     * @Column(name="voice_note_id", type="bigint", nullable=true)
     */
    private $voiceNoteId;

    /**
     * @var integer $checkInInterval
     *
     * @Column(name="check_in_interval", type="integer", nullable=true)
     */
    private $checkInInterval;

    /**
     * @var text $adminNote
     *
     * @Column(name="admin_note", type="text", nullable=true)
     */
    private $adminNote;

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


}