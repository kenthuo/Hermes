<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\SupportTicket
 *
 * @Table(name="support_ticket")
 * @Entity
 */
class SupportTicket
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="support_ticket_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

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
     * @var string $name
     *
     * @Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var string $email
     *
     * @Column(name="email", type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @var string $phone
     *
     * @Column(name="phone", type="string", length=25, nullable=true)
     */
    private $phone;

    /**
     * @var string $company
     *
     * @Column(name="company", type="string", length=100, nullable=true)
     */
    private $company;

    /**
     * @var string $requestType
     *
     * @Column(name="request_type", type="string", length=35, nullable=true)
     */
    private $requestType;

    /**
     * @var text $comment
     *
     * @Column(name="comment", type="text", nullable=true)
     */
    private $comment;

    /**
     * @var bigint $timestamp
     *
     * @Column(name="timestamp", type="bigint", nullable=true)
     */
    private $timestamp;


}