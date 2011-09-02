<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\EventIvrEscalate
 *
 * @Table(name="event_ivr_escalate")
 * @Entity
 */
class EventIvrEscalate
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="event_ivr_escalate_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=false)
     */
    private $beaconId;

    /**
     * @var bigint $eventIvrCheckInId
     *
     * @Column(name="event_ivr_check_in_id", type="bigint", nullable=false)
     */
    private $eventIvrCheckInId;

    /**
     * @var bigint $missedChkInTs
     *
     * @Column(name="missed_chk_in_ts", type="bigint", nullable=false)
     */
    private $missedChkInTs;

    /**
     * @var bigint $eventTimestamp
     *
     * @Column(name="event_timestamp", type="bigint", nullable=false)
     */
    private $eventTimestamp;

    /**
     * @var bigint $phoneId
     *
     * @Column(name="phone_id", type="bigint", nullable=false)
     */
    private $phoneId;

    /**
     * @var string $phoneNo
     *
     * @Column(name="phone_no", type="string", length=50, nullable=false)
     */
    private $phoneNo;

    /**
     * @var string $contactName
     *
     * @Column(name="contact_name", type="string", length=50, nullable=false)
     */
    private $contactName;

    /**
     * @var string $callResult
     *
     * @Column(name="call_result", type="string", length=10, nullable=false)
     */
    private $callResult;

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
     * @var string $contactType
     *
     * @Column(name="contact_type", type="string", length=10, nullable=false)
     */
    private $contactType;

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