<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Stepp2Odometer201005
 *
 * @Table(name="stepp2_odometer_201005")
 * @Entity
 */
class Stepp2Odometer201005
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="stepp2_odometer_201005_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=false)
     */
    private $beaconId;

    /**
     * @var bigint $networkTs
     *
     * @Column(name="network_ts", type="bigint", nullable=false)
     */
    private $networkTs;

    /**
     * @var bigint $timestamp
     *
     * @Column(name="timestamp", type="bigint", nullable=false)
     */
    private $timestamp;

    /**
     * @var bigint $odometer
     *
     * @Column(name="odometer", type="bigint", nullable=true)
     */
    private $odometer;

    /**
     * @var string $eventType
     *
     * @Column(name="event_type", type="string", length=30, nullable=true)
     */
    private $eventType;

    /**
     * @var bigint $deltaOdometer
     *
     * @Column(name="delta_odometer", type="bigint", nullable=false)
     */
    private $deltaOdometer;

    /**
     * @var bigint $locateId
     *
     * @Column(name="locate_id", type="bigint", nullable=false)
     */
    private $locateId;

    /**
     * @var bigint $insertTs
     *
     * @Column(name="insert_ts", type="bigint", nullable=false)
     */
    private $insertTs;

    /**
     * @var bigint $lastUpdatedTs
     *
     * @Column(name="last_updated_ts", type="bigint", nullable=true)
     */
    private $lastUpdatedTs;

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
     * @var string $state
     *
     * @Column(name="state", type="string", length=25, nullable=true)
     */
    private $state;

    /**
     * @var string $country
     *
     * @Column(name="country", type="string", length=25, nullable=true)
     */
    private $country;


}