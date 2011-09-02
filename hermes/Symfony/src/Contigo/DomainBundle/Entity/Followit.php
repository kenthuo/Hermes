<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Followit
 *
 * @Table(name="followit")
 * @Entity
 */
class Followit
{
    /**
     * @var bigint $unitId
     *
     * @Column(name="unit_id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="followit_unit_id_seq", allocationSize="1", initialValue="1")
     */
    private $unitId;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=true)
     */
    private $beaconId;

    /**
     * @var string $basePhoneNumber
     *
     * @Column(name="base_phone_number", type="string", length=30, nullable=true)
     */
    private $basePhoneNumber;

    /**
     * @var smallint $currentState
     *
     * @Column(name="current_state", type="smallint", nullable=true)
     */
    private $currentState;

    /**
     * @var smallint $previousState
     *
     * @Column(name="previous_state", type="smallint", nullable=true)
     */
    private $previousState;

    /**
     * @var integer $alarmCount
     *
     * @Column(name="alarm_count", type="integer", nullable=true)
     */
    private $alarmCount;

    /**
     * @var bigint $lastTrackingStopped
     *
     * @Column(name="last_tracking_stopped", type="bigint", nullable=true)
     */
    private $lastTrackingStopped;

    /**
     * @var boolean $sentSpeedNotification
     *
     * @Column(name="sent_speed_notification", type="boolean", nullable=true)
     */
    private $sentSpeedNotification;

    /**
     * @var boolean $sentZoneNotification
     *
     * @Column(name="sent_zone_notification", type="boolean", nullable=true)
     */
    private $sentZoneNotification;


}