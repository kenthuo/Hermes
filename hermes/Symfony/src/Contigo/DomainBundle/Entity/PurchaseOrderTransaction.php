<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\PurchaseOrderTransaction
 *
 * @Table(name="purchase_order_transaction")
 * @Entity
 */
class PurchaseOrderTransaction
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="purchase_order_transaction_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $ponum
     *
     * @Column(name="ponum", type="bigint", nullable=true)
     */
    private $ponum;

    /**
     * @var bigint $customerId
     *
     * @Column(name="customer_id", type="bigint", nullable=true)
     */
    private $customerId;

    /**
     * @var bigint $subscriberId
     *
     * @Column(name="subscriber_id", type="bigint", nullable=true)
     */
    private $subscriberId;

    /**
     * @var bigint $organizationId
     *
     * @Column(name="organization_id", type="bigint", nullable=true)
     */
    private $organizationId;

    /**
     * @var string $billingName
     *
     * @Column(name="billing_name", type="string", length=100, nullable=true)
     */
    private $billingName;

    /**
     * @var string $ccProvider
     *
     * @Column(name="cc_provider", type="string", length=20, nullable=true)
     */
    private $ccProvider;

    /**
     * @var float $amount
     *
     * @Column(name="amount", type="float", nullable=true)
     */
    private $amount;

    /**
     * @var string $comment1
     *
     * @Column(name="comment1", type="string", length=255, nullable=true)
     */
    private $comment1;

    /**
     * @var string $comment2
     *
     * @Column(name="comment2", type="string", length=255, nullable=true)
     */
    private $comment2;

    /**
     * @var string $transactionId
     *
     * @Column(name="transaction_id", type="string", length=12, nullable=true)
     */
    private $transactionId;

    /**
     * @var string $transactionType
     *
     * @Column(name="transaction_type", type="string", length=20, nullable=true)
     */
    private $transactionType;

    /**
     * @var string $description
     *
     * @Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string $operator
     *
     * @Column(name="operator", type="string", length=255, nullable=true)
     */
    private $operator;

    /**
     * @var bigint $timestamp
     *
     * @Column(name="timestamp", type="bigint", nullable=true)
     */
    private $timestamp;


}