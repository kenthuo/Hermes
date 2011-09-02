<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\EventObject
 *
 * @Table(name="event_object")
 * @Entity
 */
class EventObject
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="event_object_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $timestamp
     *
     * @Column(name="timestamp", type="bigint", nullable=false)
     */
    private $timestamp;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=false)
     */
    private $beaconId;

    /**
     * @var text $data
     *
     * @Column(name="data", type="text", nullable=true)
     */
    private $data;

    /**
     * @var bigint $handledtimestamp
     *
     * @Column(name="handledtimestamp", type="bigint", nullable=true)
     */
    private $handledtimestamp;


}