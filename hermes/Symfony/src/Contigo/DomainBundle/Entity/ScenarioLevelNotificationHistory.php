<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\ScenarioLevelNotificationHistory
 *
 * @Table(name="scenario_level_notification_history")
 * @Entity
 */
class ScenarioLevelNotificationHistory
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="scenario_level_notification_history_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $scenarioId
     *
     * @Column(name="scenario_id", type="bigint", nullable=true)
     */
    private $scenarioId;

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
     * @var bigint $introTs
     *
     * @Column(name="intro_ts", type="bigint", nullable=true)
     */
    private $introTs;

    /**
     * @var bigint $retireTs
     *
     * @Column(name="retire_ts", type="bigint", nullable=true)
     */
    private $retireTs;


}