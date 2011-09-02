<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\TrackerSequence
 *
 * @Table(name="tracker_sequence")
 * @Entity
 */
class TrackerSequence
{
    /**
     * @var integer $pid
     *
     * @Column(name="pid", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="tracker_sequence_pid_seq", allocationSize="1", initialValue="1")
     */
    private $pid;

    /**
     * @var integer $id
     *
     * @Column(name="id", type="integer", nullable=true)
     */
    private $id;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=true)
     */
    private $beaconId;

    /**
     * @var bigint $timestamp
     *
     * @Column(name="timestamp", type="bigint", nullable=true)
     */
    private $timestamp;

    /**
     * @var bigint $expiry
     *
     * @Column(name="expiry", type="bigint", nullable=true)
     */
    private $expiry;

    /**
     * @var bigint $frequency
     *
     * @Column(name="frequency", type="bigint", nullable=true)
     */
    private $frequency;

    /**
     * @var string $type
     *
     * @Column(name="type", type="string", length=10, nullable=true)
     */
    private $type;


}