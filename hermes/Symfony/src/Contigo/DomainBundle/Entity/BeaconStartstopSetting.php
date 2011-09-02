<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\BeaconStartstopSetting
 *
 * @Table(name="beacon_startstop_setting")
 * @Entity
 */
class BeaconStartstopSetting
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="beacon_startstop_setting_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var integer $stopDuration
     *
     * @Column(name="stop_duration", type="integer", nullable=true)
     */
    private $stopDuration;

    /**
     * @var integer $startDuration
     *
     * @Column(name="start_duration", type="integer", nullable=true)
     */
    private $startDuration;

    /**
     * @var decimal $speed
     *
     * @Column(name="speed", type="decimal", nullable=true)
     */
    private $speed;

    /**
     * @var string $speedUnit
     *
     * @Column(name="speed_unit", type="string", length=10, nullable=true)
     */
    private $speedUnit;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=false)
     */
    private $beaconId;

    /**
     * @var bigint $actionId
     *
     * @Column(name="action_id", type="bigint", nullable=false)
     */
    private $actionId;

    /**
     * @var bigint $lastReadTs
     *
     * @Column(name="last_read_ts", type="bigint", nullable=false)
     */
    private $lastReadTs;


}