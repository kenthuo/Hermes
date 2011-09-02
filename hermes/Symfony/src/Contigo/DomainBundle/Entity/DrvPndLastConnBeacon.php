<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\DrvPndLastConnBeacon
 *
 * @Table(name="drv_pnd_last_conn_beacon")
 * @Entity
 */
class DrvPndLastConnBeacon
{
    /**
     * @var string $pndEsn
     *
     * @Column(name="pnd_esn", type="string", length=50, nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="drv_pnd_last_conn_beacon_pnd_esn_seq", allocationSize="1", initialValue="1")
     */
    private $pndEsn;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=false)
     */
    private $beaconId;

    /**
     * @var string $pndDriverId
     *
     * @Column(name="pnd_driver_id", type="string", length=49, nullable=true)
     */
    private $pndDriverId;

    /**
     * @var bigint $guardianId
     *
     * @Column(name="guardian_id", type="bigint", nullable=true)
     */
    private $guardianId;

    /**
     * @var boolean $isBeaconConnected
     *
     * @Column(name="is_beacon_connected", type="boolean", nullable=false)
     */
    private $isBeaconConnected;

    /**
     * @var boolean $isResetInProgress
     *
     * @Column(name="is_reset_in_progress", type="boolean", nullable=false)
     */
    private $isResetInProgress;

    /**
     * @var boolean $sentWarningMsg
     *
     * @Column(name="sent_warning_msg", type="boolean", nullable=false)
     */
    private $sentWarningMsg;

    /**
     * @var bigint $lastConnectedTs
     *
     * @Column(name="last_connected_ts", type="bigint", nullable=true)
     */
    private $lastConnectedTs;

    /**
     * @var string $lastInboundMsgType
     *
     * @Column(name="last_inbound_msg_type", type="string", length=25, nullable=true)
     */
    private $lastInboundMsgType;

    /**
     * @var bigint $prevConnBeaconId
     *
     * @Column(name="prev_conn_beacon_id", type="bigint", nullable=true)
     */
    private $prevConnBeaconId;

    /**
     * @var bigint $prevConnGuardianId
     *
     * @Column(name="prev_conn_guardian_id", type="bigint", nullable=true)
     */
    private $prevConnGuardianId;


}