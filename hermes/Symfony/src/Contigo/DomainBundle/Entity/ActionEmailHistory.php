<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\ActionEmailHistory
 *
 * @Table(name="action_email_history")
 * @Entity
 */
class ActionEmailHistory
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="action_email_history_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

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
     * @var string $fromEmail
     *
     * @Column(name="from_email", type="string", length=100, nullable=true)
     */
    private $fromEmail;

    /**
     * @var string $toEmails
     *
     * @Column(name="to_emails", type="string", length=255, nullable=true)
     */
    private $toEmails;

    /**
     * @var string $subject
     *
     * @Column(name="subject", type="string", length=50, nullable=true)
     */
    private $subject;

    /**
     * @var text $body
     *
     * @Column(name="body", type="text", nullable=true)
     */
    private $body;

    /**
     * @var text $additionalCustomBody
     *
     * @Column(name="additional_custom_body", type="text", nullable=true)
     */
    private $additionalCustomBody;

    /**
     * @var string $name
     *
     * @Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var text $description
     *
     * @Column(name="description", type="text", nullable=true)
     */
    private $description;

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
     * @var bigint $emailId
     *
     * @Column(name="email_id", type="bigint", nullable=true)
     */
    private $emailId;


}