<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\UserRightsAuditing
 *
 * @Table(name="user_rights_auditing")
 * @Entity
 */
class UserRightsAuditing
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="user_rights_auditing_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $loginId
     *
     * @Column(name="login_id", type="bigint", nullable=true)
     */
    private $loginId;

    /**
     * @var string $loginName
     *
     * @Column(name="login_name", type="string", length=250, nullable=true)
     */
    private $loginName;

    /**
     * @var bigint $usergpId
     *
     * @Column(name="usergp_id", type="bigint", nullable=true)
     */
    private $usergpId;

    /**
     * @var string $usergpName
     *
     * @Column(name="usergp_name", type="string", length=100, nullable=true)
     */
    private $usergpName;

    /**
     * @var bigint $departmentId
     *
     * @Column(name="department_id", type="bigint", nullable=true)
     */
    private $departmentId;

    /**
     * @var string $departmentName
     *
     * @Column(name="department_name", type="string", length=100, nullable=true)
     */
    private $departmentName;

    /**
     * @var bigint $organizationId
     *
     * @Column(name="organization_id", type="bigint", nullable=true)
     */
    private $organizationId;

    /**
     * @var string $organizationName
     *
     * @Column(name="organization_name", type="string", length=100, nullable=true)
     */
    private $organizationName;

    /**
     * @var bigint $customerId
     *
     * @Column(name="customer_id", type="bigint", nullable=true)
     */
    private $customerId;

    /**
     * @var string $customerName
     *
     * @Column(name="customer_name", type="string", length=100, nullable=true)
     */
    private $customerName;

    /**
     * @var bigint $guardianUserId
     *
     * @Column(name="guardian_user_id", type="bigint", nullable=true)
     */
    private $guardianUserId;

    /**
     * @var string $guardianUserName
     *
     * @Column(name="guardian_user_name", type="string", length=100, nullable=true)
     */
    private $guardianUserName;

    /**
     * @var bigint $timestamp
     *
     * @Column(name="timestamp", type="bigint", nullable=true)
     */
    private $timestamp;

    /**
     * @var string $actionType
     *
     * @Column(name="action_type", type="string", length=50, nullable=true)
     */
    private $actionType;

    /**
     * @var string $actionRequest
     *
     * @Column(name="action_request", type="string", length=100, nullable=true)
     */
    private $actionRequest;

    /**
     * @var string $objectType
     *
     * @Column(name="object_type", type="string", length=100, nullable=true)
     */
    private $objectType;

    /**
     * @var bigint $objectId
     *
     * @Column(name="object_id", type="bigint", nullable=true)
     */
    private $objectId;

    /**
     * @var text $permission
     *
     * @Column(name="permission", type="text", nullable=true)
     */
    private $permission;


}