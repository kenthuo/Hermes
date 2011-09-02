<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Enforamtgl
 *
 * @Table(name="enforamtgl")
 * @Entity
 */
class Enforamtgl
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="enforamtgl_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $ip
     *
     * @Column(name="ip", type="string", length=30, nullable=true)
     */
    private $ip;

    /**
     * @var bigint $lastTrackingStopped
     *
     * @Column(name="last_tracking_stopped", type="bigint", nullable=true)
     */
    private $lastTrackingStopped;

    /**
     * @var bigint $lastLoginTimestamp
     *
     * @Column(name="last_login_timestamp", type="bigint", nullable=true)
     */
    private $lastLoginTimestamp;

    /**
     * @var string $version
     *
     * @Column(name="version", type="string", length=10, nullable=true)
     */
    private $version;

    /**
     * @var boolean $rebootOnNoresp
     *
     * @Column(name="reboot_on_noresp", type="boolean", nullable=true)
     */
    private $rebootOnNoresp;

    /**
     * @var boolean $useResetWatchdog
     *
     * @Column(name="use_reset_watchdog", type="boolean", nullable=true)
     */
    private $useResetWatchdog;

    /**
     * @var boolean $sendResetWatchdogNotif
     *
     * @Column(name="send_reset_watchdog_notif", type="boolean", nullable=true)
     */
    private $sendResetWatchdogNotif;

    /**
     * @var integer $watchdogResetTimeout
     *
     * @Column(name="watchdog_reset_timeout", type="integer", nullable=true)
     */
    private $watchdogResetTimeout;

    /**
     * @var boolean $debugMode
     *
     * @Column(name="debug_mode", type="boolean", nullable=true)
     */
    private $debugMode;

    /**
     * @var bigint $lastInitializedTimestamp
     *
     * @Column(name="last_initialized_timestamp", type="bigint", nullable=true)
     */
    private $lastInitializedTimestamp;

    /**
     * @var boolean $gfmiState
     *
     * @Column(name="gfmi_state", type="boolean", nullable=true)
     */
    private $gfmiState;

    /**
     * @var boolean $detectVehiclePresence
     *
     * @Column(name="detect_vehicle_presence", type="boolean", nullable=true)
     */
    private $detectVehiclePresence;

    /**
     * @var bigint $lastOfflineNotificationTs
     *
     * @Column(name="last_offline_notification_ts", type="bigint", nullable=true)
     */
    private $lastOfflineNotificationTs;

    /**
     * @var Contigo\DomainBundle\Entity\Beacon
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Beacon")
     * @JoinColumns({
     *   @JoinColumn(name="beacon_id", referencedColumnName="id")
     * })
     */
    private $beacon;


}