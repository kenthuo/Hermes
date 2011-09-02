<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\PeripheralStockStateHistory
 *
 * @Table(name="peripheral_stock_state_history")
 * @Entity
 */
class PeripheralStockStateHistory
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="peripheral_stock_state_history_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $peripheralStockId
     *
     * @Column(name="peripheral_stock_id", type="bigint", nullable=false)
     */
    private $peripheralStockId;

    /**
     * @var bigint $peripheralStateId
     *
     * @Column(name="peripheral_state_id", type="bigint", nullable=false)
     */
    private $peripheralStateId;

    /**
     * @var string $peripheralStateName
     *
     * @Column(name="peripheral_state_name", type="string", length=50, nullable=false)
     */
    private $peripheralStateName;

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


}