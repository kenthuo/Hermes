<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\ScheduledReportHistory
 *
 * @Table(name="scheduled_report_history")
 * @Entity
 */
class ScheduledReportHistory
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="scheduled_report_history_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $name
     *
     * @Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string $status
     *
     * @Column(name="status", type="string", length=10, nullable=true)
     */
    private $status;

    /**
     * @var string $scheduleOccurrences
     *
     * @Column(name="schedule_occurrences", type="string", length=10, nullable=true)
     */
    private $scheduleOccurrences;

    /**
     * @var boolean $scheduleWeekends
     *
     * @Column(name="schedule_weekends", type="boolean", nullable=true)
     */
    private $scheduleWeekends;

    /**
     * @var bigint $notificationGroupId
     *
     * @Column(name="notification_group_id", type="bigint", nullable=true)
     */
    private $notificationGroupId;

    /**
     * @var string $formatType
     *
     * @Column(name="format_type", type="string", length=25, nullable=true)
     */
    private $formatType;

    /**
     * @var bigint $subscriberId
     *
     * @Column(name="subscriber_id", type="bigint", nullable=true)
     */
    private $subscriberId;

    /**
     * @var bigint $organizationId
     *
     * @Column(name="organization_id", type="bigint", nullable=true)
     */
    private $organizationId;

    /**
     * @var string $reportType
     *
     * @Column(name="report_type", type="string", length=25, nullable=true)
     */
    private $reportType;

    /**
     * @var boolean $includeLatLon
     *
     * @Column(name="include_lat_lon", type="boolean", nullable=true)
     */
    private $includeLatLon;

    /**
     * @var bigint $departmentId
     *
     * @Column(name="department_id", type="bigint", nullable=true)
     */
    private $departmentId;

    /**
     * @var bigint $xid
     *
     * @Column(name="xid", type="bigint", nullable=true)
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

    /**
     * @var bigint $customReportPeriodId
     *
     * @Column(name="custom_report_period_id", type="bigint", nullable=true)
     */
    private $customReportPeriodId;

    /**
     * @var text $cronStr
     *
     * @Column(name="cron_str", type="text", nullable=true)
     */
    private $cronStr;

    /**
     * @var boolean $exclusionRule
     *
     * @Column(name="exclusion_rule", type="boolean", nullable=true)
     */
    private $exclusionRule;

    /**
     * @var string $type
     *
     * @Column(name="type", type="string", length=200, nullable=true)
     */
    private $type;

    /**
     * @var text $description
     *
     * @Column(name="description", type="text", nullable=true)
     */
    private $description;


}