<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\ScenarioLevelNotification
 *
 * @Table(name="scenario_level_notification")
 * @Entity
 */
class ScenarioLevelNotification
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="scenario_level_notification_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $actionId
     *
     * @Column(name="action_id", type="bigint", nullable=false)
     */
    private $actionId;

    /**
     * @var bigint $introTs
     *
     * @Column(name="intro_ts", type="bigint", nullable=false)
     */
    private $introTs;

    /**
     * @var bigint $retireTs
     *
     * @Column(name="retire_ts", type="bigint", nullable=false)
     */
    private $retireTs;

    /**
     * @var Contigo\DomainBundle\Entity\Scenario
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Scenario")
     * @JoinColumns({
     *   @JoinColumn(name="scenario_id", referencedColumnName="id")
     * })
     */
    private $scenario;

    /**
     * @var Contigo\DomainBundle\Entity\ActionIndex
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\ActionIndex")
     * @JoinColumns({
     *   @JoinColumn(name="action_index_id", referencedColumnName="id")
     * })
     */
    private $actionIndex;


}