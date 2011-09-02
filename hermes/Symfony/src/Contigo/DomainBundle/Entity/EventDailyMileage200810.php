<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\EventDailyMileage200810
 *
 * @Table(name="event_daily_mileage_200810")
 * @Entity
 */
class EventDailyMileage200810
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="event_daily_mileage_200810_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=true)
     */
    private $beaconId;

    /**
     * @var bigint $distmeters
     *
     * @Column(name="distmeters", type="bigint", nullable=true)
     */
    private $distmeters;

    /**
     * @var bigint $timestamp
     *
     * @Column(name="timestamp", type="bigint", nullable=true)
     */
    private $timestamp;

    /**
     * @var bigint $firstLocateTs
     *
     * @Column(name="first_locate_ts", type="bigint", nullable=true)
     */
    private $firstLocateTs;

    /**
     * @var bigint $lastLocateTs
     *
     * @Column(name="last_locate_ts", type="bigint", nullable=true)
     */
    private $lastLocateTs;

    /**
     * @var bigint $lastPingTs
     *
     * @Column(name="last_ping_ts", type="bigint", nullable=true)
     */
    private $lastPingTs;


}