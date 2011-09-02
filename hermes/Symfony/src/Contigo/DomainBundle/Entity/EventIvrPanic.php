<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\EventIvrPanic
 *
 * @Table(name="event_ivr_panic")
 * @Entity
 */
class EventIvrPanic
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="event_ivr_panic_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=false)
     */
    private $beaconId;

    /**
     * @var bigint $eventTimestamp
     *
     * @Column(name="event_timestamp", type="bigint", nullable=false)
     */
    private $eventTimestamp;

    /**
     * @var boolean $isCancelPanic
     *
     * @Column(name="is_cancel_panic", type="boolean", nullable=false)
     */
    private $isCancelPanic;

    /**
     * @var bigint $voiceNoteId
     *
     * @Column(name="voice_note_id", type="bigint", nullable=true)
     */
    private $voiceNoteId;

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

    /**
     * @var text $callsessionId
     *
     * @Column(name="callsession_id", type="text", nullable=true)
     */
    private $callsessionId;


}