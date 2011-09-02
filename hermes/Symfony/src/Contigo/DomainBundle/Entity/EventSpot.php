<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\EventSpot
 *
 * @Table(name="event_spot")
 * @Entity
 */
class EventSpot
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="event_spot_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=false)
     */
    private $beaconId;

    /**
     * @var bigint $locateId
     *
     * @Column(name="locate_id", type="bigint", nullable=false)
     */
    private $locateId;

    /**
     * @var bigint $networkTimestamp
     *
     * @Column(name="network_timestamp", type="bigint", nullable=true)
     */
    private $networkTimestamp;

    /**
     * @var bigint $senId
     *
     * @Column(name="sen_id", type="bigint", nullable=true)
     */
    private $senId;

    /**
     * @var string $scenarioName
     *
     * @Column(name="scenario_name", type="string", length=100, nullable=true)
     */
    private $scenarioName;

    /**
     * @var bigint $msgId
     *
     * @Column(name="msg_id", type="bigint", nullable=true)
     */
    private $msgId;

    /**
     * @var string $msgMode
     *
     * @Column(name="msg_mode", type="string", length=10, nullable=true)
     */
    private $msgMode;

    /**
     * @var string $esn
     *
     * @Column(name="esn", type="string", length=20, nullable=true)
     */
    private $esn;

    /**
     * @var string $messageType
     *
     * @Column(name="message_type", type="string", length=25, nullable=true)
     */
    private $messageType;

    /**
     * @var text $messageDetail
     *
     * @Column(name="message_detail", type="text", nullable=true)
     */
    private $messageDetail;

    /**
     * @var decimal $lon
     *
     * @Column(name="lon", type="decimal", nullable=true)
     */
    private $lon;

    /**
     * @var decimal $lat
     *
     * @Column(name="lat", type="decimal", nullable=true)
     */
    private $lat;

    /**
     * @var string $nearestTown
     *
     * @Column(name="nearest_town", type="string", length=50, nullable=true)
     */
    private $nearestTown;

    /**
     * @var bigint $nearestTownDistance
     *
     * @Column(name="nearest_town_distance", type="bigint", nullable=true)
     */
    private $nearestTownDistance;

    /**
     * @var bigint $routerMsgSeq
     *
     * @Column(name="router_msg_seq", type="bigint", nullable=true)
     */
    private $routerMsgSeq;


}