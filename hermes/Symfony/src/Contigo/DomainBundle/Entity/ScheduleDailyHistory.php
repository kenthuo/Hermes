<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\ScheduleDailyHistory
 *
 * @Table(name="schedule_daily_history")
 * @Entity
 */
class ScheduleDailyHistory
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="schedule_daily_history_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $scheduleId
     *
     * @Column(name="schedule_id", type="bigint", nullable=true)
     */
    private $scheduleId;

    /**
     * @var bigint $startTimestamp
     *
     * @Column(name="start_timestamp", type="bigint", nullable=true)
     */
    private $startTimestamp;

    /**
     * @var bigint $endTimestamp
     *
     * @Column(name="end_timestamp", type="bigint", nullable=true)
     */
    private $endTimestamp;

    /**
     * @var smallint $everyXDays
     *
     * @Column(name="every_x_days", type="smallint", nullable=true)
     */
    private $everyXDays;

    /**
     * @var boolean $everyWeekday
     *
     * @Column(name="every_weekday", type="boolean", nullable=true)
     */
    private $everyWeekday;

    /**
     * @var smallint $xOccurrences
     *
     * @Column(name="x_occurrences", type="smallint", nullable=true)
     */
    private $xOccurrences;

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
     * @var bigint $xid
     *
     * @Column(name="xid", type="bigint", nullable=false)
     */
    private $xid;

    /**
     * @var boolean $isDeleted
     *
     * @Column(name="is_deleted", type="boolean", nullable=true)
     */
    private $isDeleted;

    /**
     * @var bigint $timestamp
     *
     * @Column(name="timestamp", type="bigint", nullable=true)
     */
    private $timestamp;

    /**
     * @var bigint $accessListId
     *
     * @Column(name="access_list_id", type="bigint", nullable=true)
     */
    private $accessListId;


}