<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\StockHistory
 *
 * @Table(name="stock_history")
 * @Entity
 */
class StockHistory
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="stock_history_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $makeId
     *
     * @Column(name="make_id", type="bigint", nullable=true)
     */
    private $makeId;

    /**
     * @var bigint $koreSimId
     *
     * @Column(name="kore_sim_id", type="bigint", nullable=true)
     */
    private $koreSimId;

    /**
     * @var bigint $locationId
     *
     * @Column(name="location_id", type="bigint", nullable=true)
     */
    private $locationId;

    /**
     * @var string $esn
     *
     * @Column(name="esn", type="string", length=50, nullable=true)
     */
    private $esn;

    /**
     * @var string $serialNumber
     *
     * @Column(name="serial_number", type="string", length=50, nullable=true)
     */
    private $serialNumber;

    /**
     * @var date $receivedDate
     *
     * @Column(name="received_date", type="date", nullable=true)
     */
    private $receivedDate;

    /**
     * @var float $gmmsCost
     *
     * @Column(name="gmms_cost", type="float", nullable=true)
     */
    private $gmmsCost;

    /**
     * @var string $gmmsCostCurrency
     *
     * @Column(name="gmms_cost_currency", type="string", length=5, nullable=true)
     */
    private $gmmsCostCurrency;

    /**
     * @var float $p2pCost
     *
     * @Column(name="p2p_cost", type="float", nullable=true)
     */
    private $p2pCost;

    /**
     * @var string $p2pCostCurrency
     *
     * @Column(name="p2p_cost_currency", type="string", length=5, nullable=true)
     */
    private $p2pCostCurrency;

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

    /**
     * @var string $enforaActivationCode
     *
     * @Column(name="enfora_activation_code", type="string", length=50, nullable=true)
     */
    private $enforaActivationCode;


}