<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\EventCheckinBb
 *
 * @Table(name="event_checkin_bb")
 * @Entity
 */
class EventCheckinBb
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="event_checkin_bb_id_seq", allocationSize="1", initialValue="1")
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
     * @var bigint $duration
     *
     * @Column(name="duration", type="bigint", nullable=false)
     */
    private $duration;

    /**
     * @var boolean $isCheckin
     *
     * @Column(name="is_checkin", type="boolean", nullable=true)
     */
    private $isCheckin;

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
     * @var string $checkinAddr
     *
     * @Column(name="checkin_addr", type="string", length=200, nullable=true)
     */
    private $checkinAddr;

    /**
     * @var text $checkinNote
     *
     * @Column(name="checkin_note", type="text", nullable=true)
     */
    private $checkinNote;


}