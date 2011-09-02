<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\ScenarioActionHistory
 *
 * @Table(name="scenario_action_history")
 * @Entity
 */
class ScenarioActionHistory
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="scenario_action_history_id_seq", allocationSize="1", initialValue="1")
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
     * @var bigint $xid
     *
     * @Column(name="xid", type="bigint", nullable=false)
     */
    private $xid;

    /**
     * @var boolean $isDeleted
     *
     * @Column(name="is_deleted", type="boolean", nullable=true)
     */
    private $isDeleted;

    /**
     * @var bigint $timestamp
     *
     * @Column(name="timestamp", type="bigint", nullable=true)
     */
    private $timestamp;

    /**
     * @var bigint $accessListId
     *
     * @Column(name="access_list_id", type="bigint", nullable=true)
     */
    private $accessListId;


}