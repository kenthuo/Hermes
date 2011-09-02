<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\PeripheralStockState
 *
 * @Table(name="peripheral_stock_state")
 * @Entity
 */
class PeripheralStockState
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="peripheral_stock_state_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $peripheralStockId
     *
     * @Column(name="peripheral_stock_id", type="bigint", nullable=false)
     */
    private $peripheralStockId;

    /**
     * @var string $peripheralStateName
     *
     * @Column(name="peripheral_state_name", type="string", length=50, nullable=false)
     */
    private $peripheralStateName;

    /**
     * @var Contigo\DomainBundle\Entity\PeripheralState
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\PeripheralState")
     * @JoinColumns({
     *   @JoinColumn(name="peripheral_state_id", referencedColumnName="id")
     * })
     */
    private $peripheralState;


}