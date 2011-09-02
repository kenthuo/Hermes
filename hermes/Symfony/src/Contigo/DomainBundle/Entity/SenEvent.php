<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\SenEvent
 *
 * @Table(name="sen_event")
 * @Entity
 */
class SenEvent
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="sen_event_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $senId
     *
     * @Column(name="sen_id", type="bigint", nullable=true)
     */
    private $senId;

    /**
     * @var bigint $eventIndexId
     *
     * @Column(name="event_index_id", type="bigint", nullable=true)
     */
    private $eventIndexId;

    /**
     * @var bigint $eventId
     *
     * @Column(name="event_id", type="bigint", nullable=true)
     */
    private $eventId;

    /**
     * @var string $scenarioName
     *
     * @Column(name="scenario_name", type="string", length=50, nullable=true)
     */
    private $scenarioName;

    /**
     * @var bigint $timestamp
     *
     * @Column(name="timestamp", type="bigint", nullable=true)
     */
    private $timestamp;


}