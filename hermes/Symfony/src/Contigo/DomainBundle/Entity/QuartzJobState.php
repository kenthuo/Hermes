<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\QuartzJobState
 *
 * @Table(name="quartz_job_state")
 * @Entity
 */
class QuartzJobState
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="quartz_job_state_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=true)
     */
    private $beaconId;

    /**
     * @var bigint $scenarioId
     *
     * @Column(name="scenario_id", type="bigint", nullable=true)
     */
    private $scenarioId;

    /**
     * @var bigint $scenarioActionId
     *
     * @Column(name="scenario_action_id", type="bigint", nullable=true)
     */
    private $scenarioActionId;

    /**
     * @var bigint $sentriggerId
     *
     * @Column(name="sentrigger_id", type="bigint", nullable=true)
     */
    private $sentriggerId;

    /**
     * @var string $command
     *
     * @Column(name="command", type="string", length=20, nullable=true)
     */
    private $command;

    /**
     * @var bigint $actionIndexId
     *
     * @Column(name="action_index_id", type="bigint", nullable=true)
     */
    private $actionIndexId;

    /**
     * @var bigint $actionId
     *
     * @Column(name="action_id", type="bigint", nullable=true)
     */
    private $actionId;

    /**
     * @var bigint $timestamp
     *
     * @Column(name="timestamp", type="bigint", nullable=true)
     */
    private $timestamp;

    /**
     * @var string $timeString
     *
     * @Column(name="time_string", type="string", length=100, nullable=true)
     */
    private $timeString;


}