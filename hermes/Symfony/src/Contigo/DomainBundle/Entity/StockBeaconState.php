<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\StockBeaconState
 *
 * @Table(name="stock_beacon_state")
 * @Entity
 */
class StockBeaconState
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="stock_beacon_state_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $stockId
     *
     * @Column(name="stock_id", type="bigint", nullable=false)
     */
    private $stockId;

    /**
     * @var bigint $beaconStateId
     *
     * @Column(name="beacon_state_id", type="bigint", nullable=false)
     */
    private $beaconStateId;

    /**
     * @var bigint $timestamp
     *
     * @Column(name="timestamp", type="bigint", nullable=true)
     */
    private $timestamp;

    /**
     * @var boolean $iscurrent
     *
     * @Column(name="iscurrent", type="boolean", nullable=true)
     */
    private $iscurrent;

    /**
     * @var bigint $accessListId
     *
     * @Column(name="access_list_id", type="bigint", nullable=true)
     */
    private $accessListId;


}