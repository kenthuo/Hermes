<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\LoginAudit
 *
 * @Table(name="login_audit")
 * @Entity
 */
class LoginAudit
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="login_audit_id_seq", allocationSize="1", initialValue="1")
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
     * @var bigint $loginId
     *
     * @Column(name="login_id", type="bigint", nullable=true)
     */
    private $loginId;

    /**
     * @var bigint $opUserId
     *
     * @Column(name="op_user_id", type="bigint", nullable=true)
     */
    private $opUserId;

    /**
     * @var bigint $timestamp
     *
     * @Column(name="timestamp", type="bigint", nullable=true)
     */
    private $timestamp;

    /**
     * @var bigint $usergpId
     *
     * @Column(name="usergp_id", type="bigint", nullable=true)
     */
    private $usergpId;

    /**
     * @var string $usergpName
     *
     * @Column(name="usergp_name", type="string", length=50, nullable=true)
     */
    private $usergpName;


}