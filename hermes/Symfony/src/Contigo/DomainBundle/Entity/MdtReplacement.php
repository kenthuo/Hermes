<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\MdtReplacement
 *
 * @Table(name="mdt_replacement")
 * @Entity
 */
class MdtReplacement
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="mdt_replacement_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $mdtId
     *
     * @Column(name="mdt_id", type="bigint", nullable=false)
     */
    private $mdtId;

    /**
     * @var bigint $peripheralStockId
     *
     * @Column(name="peripheral_stock_id", type="bigint", nullable=false)
     */
    private $peripheralStockId;

    /**
     * @var bigint $startTs
     *
     * @Column(name="start_ts", type="bigint", nullable=false)
     */
    private $startTs;

    /**
     * @var bigint $endTs
     *
     * @Column(name="end_ts", type="bigint", nullable=false)
     */
    private $endTs;


}