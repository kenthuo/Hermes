<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\ActionTt15Track
 *
 * @Table(name="action_tt15_track")
 * @Entity
 */
class ActionTt15Track
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="action_tt15_track_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

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
     * @var string $name
     *
     * @Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var text $description
     *
     * @Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var integer $type
     *
     * @Column(name="type", type="integer", nullable=true)
     */
    private $type;

    /**
     * @var integer $intervalTrackMotion
     *
     * @Column(name="interval_track_motion", type="integer", nullable=true)
     */
    private $intervalTrackMotion;

    /**
     * @var string $intervalTrackMotionUnit
     *
     * @Column(name="interval_track_motion_unit", type="string", length=5, nullable=true)
     */
    private $intervalTrackMotionUnit;

    /**
     * @var integer $intervalTrack
     *
     * @Column(name="interval_track", type="integer", nullable=true)
     */
    private $intervalTrack;

    /**
     * @var string $intervalTrackUnit
     *
     * @Column(name="interval_track_unit", type="string", length=5, nullable=true)
     */
    private $intervalTrackUnit;

    /**
     * @var integer $intervalStatusStationary
     *
     * @Column(name="interval_status_stationary", type="integer", nullable=true)
     */
    private $intervalStatusStationary;

    /**
     * @var string $intervalStatusStationaryUnit
     *
     * @Column(name="interval_status_stationary_unit", type="string", length=5, nullable=true)
     */
    private $intervalStatusStationaryUnit;

    /**
     * @var integer $scheduledStatusType
     *
     * @Column(name="scheduled_status_type", type="integer", nullable=true)
     */
    private $scheduledStatusType;

    /**
     * @var string $scheduledStatusTime
     *
     * @Column(name="scheduled_status_time", type="string", length=4, nullable=true)
     */
    private $scheduledStatusTime;

    /**
     * @var integer $scheduledStatusDay
     *
     * @Column(name="scheduled_status_day", type="integer", nullable=true)
     */
    private $scheduledStatusDay;

    /**
     * @var bigint $scheduleId
     *
     * @Column(name="schedule_id", type="bigint", nullable=true)
     */
    private $scheduleId;

    /**
     * @var boolean $lockdown
     *
     * @Column(name="lockdown", type="boolean", nullable=true)
     */
    private $lockdown;

    /**
     * @var integer $notificationType
     *
     * @Column(name="notification_type", type="integer", nullable=true)
     */
    private $notificationType;

    /**
     * @var boolean $shoConfigSettings
     *
     * @Column(name="sho_config_settings", type="boolean", nullable=true)
     */
    private $shoConfigSettings;

    /**
     * @var boolean $scheduledHours
     *
     * @Column(name="scheduled_hours", type="boolean", nullable=true)
     */
    private $scheduledHours;

    /**
     * @var integer $dailyStartTime
     *
     * @Column(name="daily_start_time", type="integer", nullable=true)
     */
    private $dailyStartTime;

    /**
     * @var integer $workDayLength
     *
     * @Column(name="work_day_length", type="integer", nullable=true)
     */
    private $workDayLength;

    /**
     * @var string $firstWorkDay
     *
     * @Column(name="first_work_day", type="string", nullable=true)
     */
    private $firstWorkDay;

    /**
     * @var string $consecutiveWorkDays
     *
     * @Column(name="consecutive_work_days", type="string", nullable=true)
     */
    private $consecutiveWorkDays;

    /**
     * @var boolean $isStartStopMode
     *
     * @Column(name="is_start_stop_mode", type="boolean", nullable=true)
     */
    private $isStartStopMode;

    /**
     * @var boolean $shoControl
     *
     * @Column(name="sho_control", type="boolean", nullable=true)
     */
    private $shoControl;

    /**
     * @var boolean $fastGpsFix
     *
     * @Column(name="fast_gps_fix", type="boolean", nullable=true)
     */
    private $fastGpsFix;


}