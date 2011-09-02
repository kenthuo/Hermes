<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Trimtrac15
 *
 * @Table(name="trimtrac15")
 * @Entity
 */
class Trimtrac15
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="trimtrac15_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=false)
     */
    private $beaconId;

    /**
     * @var string $issuedCmd
     *
     * @Column(name="issued_cmd", type="string", nullable=true)
     */
    private $issuedCmd;

    /**
     * @var bigint $issuedCmdTimestamp
     *
     * @Column(name="issued_cmd_timestamp", type="bigint", nullable=true)
     */
    private $issuedCmdTimestamp;

    /**
     * @var bigint $lastTrackingStopped
     *
     * @Column(name="last_tracking_stopped", type="bigint", nullable=true)
     */
    private $lastTrackingStopped;

    /**
     * @var string $securityPassword
     *
     * @Column(name="security_password", type="string", nullable=true)
     */
    private $securityPassword;

    /**
     * @var string $commMode
     *
     * @Column(name="comm_mode", type="string", nullable=true)
     */
    private $commMode;

    /**
     * @var integer $trackingFreq
     *
     * @Column(name="tracking_freq", type="integer", nullable=true)
     */
    private $trackingFreq;

    /**
     * @var integer $motionFreq
     *
     * @Column(name="motion_freq", type="integer", nullable=true)
     */
    private $motionFreq;

    /**
     * @var integer $nonMotionFreq
     *
     * @Column(name="non_motion_freq", type="integer", nullable=true)
     */
    private $nonMotionFreq;

    /**
     * @var string $scheduledMode
     *
     * @Column(name="scheduled_mode", type="string", nullable=true)
     */
    private $scheduledMode;

    /**
     * @var bigint $scheduledTime
     *
     * @Column(name="scheduled_time", type="bigint", nullable=true)
     */
    private $scheduledTime;

    /**
     * @var integer $sequence
     *
     * @Column(name="sequence", type="integer", nullable=true)
     */
    private $sequence;

    /**
     * @var string $version
     *
     * @Column(name="version", type="string", nullable=true)
     */
    private $version;

    /**
     * @var string $unitId
     *
     * @Column(name="unit_id", type="string", nullable=true)
     */
    private $unitId;

    /**
     * @var integer $seqNumber
     *
     * @Column(name="seq_number", type="integer", nullable=true)
     */
    private $seqNumber;

    /**
     * @var boolean $lockdown
     *
     * @Column(name="lockdown", type="boolean", nullable=true)
     */
    private $lockdown;

    /**
     * @var string $motionSensitivity
     *
     * @Column(name="motion_sensitivity", type="string", nullable=true)
     */
    private $motionSensitivity;

    /**
     * @var integer $notificationType
     *
     * @Column(name="notification_type", type="integer", nullable=true)
     */
    private $notificationType;

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

    /**
     * @var string $hpaType
     *
     * @Column(name="hpa_type", type="string", nullable=true)
     */
    private $hpaType;

    /**
     * @var string $mpaType
     *
     * @Column(name="mpa_type", type="string", nullable=true)
     */
    private $mpaType;

    /**
     * @var string $lpaType
     *
     * @Column(name="lpa_type", type="string", nullable=true)
     */
    private $lpaType;

    /**
     * @var string $mpaStatus
     *
     * @Column(name="mpa_status", type="string", nullable=true)
     */
    private $mpaStatus;

    /**
     * @var boolean $sentClearMpa
     *
     * @Column(name="sent_clear_mpa", type="boolean", nullable=true)
     */
    private $sentClearMpa;


}