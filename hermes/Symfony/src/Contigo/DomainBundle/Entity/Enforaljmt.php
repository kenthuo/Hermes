<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Enforaljmt
 *
 * @Table(name="enforaljmt")
 * @Entity
 */
class Enforaljmt
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="enforaljmt_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=true)
     */
    private $beaconId;

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
     * @var boolean $useGpsqual
     *
     * @Column(name="use_gpsqual", type="boolean", nullable=true)
     */
    private $useGpsqual;

    /**
     * @var integer $hdop
     *
     * @Column(name="hdop", type="integer", nullable=true)
     */
    private $hdop;

    /**
     * @var integer $vibintvl
     *
     * @Column(name="vibintvl", type="integer", nullable=true)
     */
    private $vibintvl;

    /**
     * @var boolean $lastStartstopIsStart
     *
     * @Column(name="last_startstop_is_start", type="boolean", nullable=true)
     */
    private $lastStartstopIsStart;

    /**
     * @var bigint $lastStartstopTs
     *
     * @Column(name="last_startstop_ts", type="bigint", nullable=true)
     */
    private $lastStartstopTs;

    /**
     * @var boolean $lastAwpIsSetup
     *
     * @Column(name="last_awp_is_setup", type="boolean", nullable=true)
     */
    private $lastAwpIsSetup;

    /**
     * @var bigint $lastAwpTs
     *
     * @Column(name="last_awp_ts", type="bigint", nullable=true)
     */
    private $lastAwpTs;

    /**
     * @var boolean $debugMode
     *
     * @Column(name="debug_mode", type="boolean", nullable=true)
     */
    private $debugMode;


}