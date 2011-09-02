<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\QuartzNextfire
 *
 * @Table(name="quartz_nextfire")
 * @Entity
 */
class QuartzNextfire
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="quartz_nextfire_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $command
     *
     * @Column(name="command", type="string", length=20, nullable=true)
     */
    private $command;

    /**
     * @var bigint $nextFireTimestamp
     *
     * @Column(name="next_fire_timestamp", type="bigint", nullable=true)
     */
    private $nextFireTimestamp;

    /**
     * @var Contigo\DomainBundle\Entity\Sen
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Sen")
     * @JoinColumns({
     *   @JoinColumn(name="sen_id", referencedColumnName="id")
     * })
     */
    private $sen;

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
     * @var Contigo\DomainBundle\Entity\Beacon
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Beacon")
     * @JoinColumns({
     *   @JoinColumn(name="beacon_id", referencedColumnName="id")
     * })
     */
    private $beacon;

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