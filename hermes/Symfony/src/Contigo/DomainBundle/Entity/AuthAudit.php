<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\AuthAudit
 *
 * @Table(name="auth_audit")
 * @Entity
 */
class AuthAudit
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="auth_audit_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $organizationId
     *
     * @Column(name="organization_id", type="bigint", nullable=true)
     */
    private $organizationId;

    /**
     * @var bigint $subscriberId
     *
     * @Column(name="subscriber_id", type="bigint", nullable=true)
     */
    private $subscriberId;

    /**
     * @var bigint $assetId
     *
     * @Column(name="asset_id", type="bigint", nullable=true)
     */
    private $assetId;

    /**
     * @var bigint $dependentId
     *
     * @Column(name="dependent_id", type="bigint", nullable=true)
     */
    private $dependentId;

    /**
     * @var bigint $opUserId
     *
     * @Column(name="op_user_id", type="bigint", nullable=true)
     */
    private $opUserId;

    /**
     * @var string $event
     *
     * @Column(name="event", type="string", length=20, nullable=true)
     */
    private $event;

    /**
     * @var bigint $timestamp
     *
     * @Column(name="timestamp", type="bigint", nullable=true)
     */
    private $timestamp;

    /**
     * @var string $type
     *
     * @Column(name="type", type="string", length=20, nullable=true)
     */
    private $type;

    /**
     * @var string $keyword
     *
     * @Column(name="keyword", type="string", length=30, nullable=true)
     */
    private $keyword;

    /**
     * @var string $guardian
     *
     * @Column(name="guardian", type="string", length=255, nullable=true)
     */
    private $guardian;

    /**
     * @var text $opComments
     *
     * @Column(name="op_comments", type="text", nullable=true)
     */
    private $opComments;


}