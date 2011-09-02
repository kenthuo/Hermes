<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\MdtHistory
 *
 * @Table(name="mdt_history")
 * @Entity
 */
class MdtHistory
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="mdt_history_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $assetId
     *
     * @Column(name="asset_id", type="bigint", nullable=true)
     */
    private $assetId;

    /**
     * @var bigint $organizationId
     *
     * @Column(name="organization_id", type="bigint", nullable=true)
     */
    private $organizationId;

    /**
     * @var bigint $customerId
     *
     * @Column(name="customer_id", type="bigint", nullable=false)
     */
    private $customerId;

    /**
     * @var string $esn
     *
     * @Column(name="esn", type="string", length=50, nullable=false)
     */
    private $esn;

    /**
     * @var text $rootPassword
     *
     * @Column(name="root_password", type="text", nullable=true)
     */
    private $rootPassword;

    /**
     * @var bigint $mdtModelId
     *
     * @Column(name="mdt_model_id", type="bigint", nullable=false)
     */
    private $mdtModelId;

    /**
     * @var bigint $peripheralStockId
     *
     * @Column(name="peripheral_stock_id", type="bigint", nullable=false)
     */
    private $peripheralStockId;

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