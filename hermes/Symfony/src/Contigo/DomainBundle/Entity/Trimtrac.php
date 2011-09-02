<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Trimtrac
 *
 * @Table(name="trimtrac")
 * @Entity
 */
class Trimtrac
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="trimtrac_id_seq", allocationSize="1", initialValue="1")
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
     * @var boolean $hpaEnable
     *
     * @Column(name="hpa_enable", type="boolean", nullable=true)
     */
    private $hpaEnable;

    /**
     * @var boolean $mpaEnable
     *
     * @Column(name="mpa_enable", type="boolean", nullable=true)
     */
    private $mpaEnable;

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
     * @var bigint $prevZoneStatus
     *
     * @Column(name="prev_zone_status", type="bigint", nullable=true)
     */
    private $prevZoneStatus;

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


}