<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\WebSen
 *
 * @Table(name="web_sen")
 * @Entity
 */
class WebSen
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="web_sen_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $state
     *
     * @Column(name="state", type="string", length=10, nullable=true)
     */
    private $state;

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
     * @var Contigo\DomainBundle\Entity\ItemGrouping
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\ItemGrouping")
     * @JoinColumns({
     *   @JoinColumn(name="item_grouping_id", referencedColumnName="id")
     * })
     */
    private $itemGrouping;

    /**
     * @var Contigo\DomainBundle\Entity\Beacon
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Beacon")
     * @JoinColumns({
     *   @JoinColumn(name="beacon_id", referencedColumnName="id")
     * })
     */
    private $beacon;


}