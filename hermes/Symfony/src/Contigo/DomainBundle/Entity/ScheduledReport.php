<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\ScheduledReport
 *
 * @Table(name="scheduled_report")
 * @Entity
 */
class ScheduledReport
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="scheduled_report_id_seq", allocationSize="1", initialValue="1")
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

    /**
     * @var Contigo\DomainBundle\Entity\Department
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Department")
     * @JoinColumns({
     *   @JoinColumn(name="department_id", referencedColumnName="id")
     * })
     */
    private $department;

    /**
     * @var Contigo\DomainBundle\Entity\CustomReportPeriod
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\CustomReportPeriod")
     * @JoinColumns({
     *   @JoinColumn(name="custom_report_period_id", referencedColumnName="id")
     * })
     */
    private $customReportPeriod;


}