<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\EventIvrLoginLogout
 *
 * @Table(name="event_ivr_login_logout")
 * @Entity
 */
class EventIvrLoginLogout
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="event_ivr_login_logout_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

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
     * @var bigint $locateId
     *
     * @Column(name="locate_id", type="bigint", nullable=true)
     */
    private $locateId;

    /**
     * @var text $adminNote
     *
     * @Column(name="admin_note", type="text", nullable=true)
     */
    private $adminNote;

    /**
     * @var bigint $accessListId
     *
     * @Column(name="access_list_id", type="bigint", nullable=true)
     */
    private $accessListId;

    /**
     * @var text $adminName
     *
     * @Column(name="admin_name", type="text", nullable=true)
     */
    private $adminName;

    /**
     * @var bigint $networkTimestamp
     *
     * @Column(name="network_timestamp", type="bigint", nullable=true)
     */
    private $networkTimestamp;

    /**
     * @var bigint $eventTimestamp
     *
     * @Column(name="event_timestamp", type="bigint", nullable=false)
     */
    private $eventTimestamp;

    /**
     * @var bigint $voiceNoteId
     *
     * @Column(name="voice_note_id", type="bigint", nullable=true)
     */
    private $voiceNoteId;

    /**
     * @var bigint $shiftId
     *
     * @Column(name="shift_id", type="bigint", nullable=true)
     */
    private $shiftId;

    /**
     * @var integer $checkInInterval
     *
     * @Column(name="check_in_interval", type="integer", nullable=true)
     */
    private $checkInInterval;

    /**
     * @var string $type
     *
     * @Column(name="type", type="string", length=100, nullable=true)
     */
    private $type;

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