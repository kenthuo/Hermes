<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\IvrVoiceNote
 *
 * @Table(name="ivr_voice_note")
 * @Entity
 */
class IvrVoiceNote
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="ivr_voice_note_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $dependentId
     *
     * @Column(name="dependent_id", type="bigint", nullable=false)
     */
    private $dependentId;

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
     * @var bytea $voiceNote
     *
     * @Column(name="voice_note", type="bytea", nullable=false)
     */
    private $voiceNote;

    /**
     * @var string $type
     *
     * @Column(name="type", type="string", length=50, nullable=false)
     */
    private $type;


}