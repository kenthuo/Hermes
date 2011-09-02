<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Tracking
 *
 * @Table(name="tracking")
 * @Entity
 */
class Tracking
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="tracking_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=true)
     */
    private $beaconId;

    /**
     * @var string $status
     *
     * @Column(name="status", type="string", length=20, nullable=true)
     */
    private $status;

    /**
     * @var bigint $startTimestamp
     *
     * @Column(name="start_timestamp", type="bigint", nullable=false)
     */
    private $startTimestamp;

    /**
     * @var integer $freqSec
     *
     * @Column(name="freq_sec", type="integer", nullable=true)
     */
    private $freqSec;

    /**
     * @var bigint $initialRequestTime
     *
     * @Column(name="initial_request_time", type="bigint", nullable=true)
     */
    private $initialRequestTime;

    /**
     * @var bigint $endTimestamp
     *
     * @Column(name="end_timestamp", type="bigint", nullable=true)
     */
    private $endTimestamp;

    /**
     * @var float $starttimezone
     *
     * @Column(name="starttimezone", type="float", nullable=true)
     */
    private $starttimezone;

    /**
     * @var float $endtimezone
     *
     * @Column(name="endtimezone", type="float", nullable=true)
     */
    private $endtimezone;


}