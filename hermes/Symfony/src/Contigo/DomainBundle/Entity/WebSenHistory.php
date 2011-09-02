<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\WebSenHistory
 *
 * @Table(name="web_sen_history")
 * @Entity
 */
class WebSenHistory
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="web_sen_history_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $scenarioId
     *
     * @Column(name="scenario_id", type="bigint", nullable=true)
     */
    private $scenarioId;

    /**
     * @var bigint $itemGroupingId
     *
     * @Column(name="item_grouping_id", type="bigint", nullable=true)
     */
    private $itemGroupingId;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=true)
     */
    private $beaconId;

    /**
     * @var string $state
     *
     * @Column(name="state", type="string", length=10, nullable=true)
     */
    private $state;

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