<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\LoginHistory
 *
 * @Table(name="login_history")
 * @Entity
 */
class LoginHistory
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="login_history_id_seq", allocationSize="1", initialValue="1")
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
     * @var string $firstname
     *
     * @Column(name="firstname", type="string", length=100, nullable=true)
     */
    private $firstname;

    /**
     * @var string $lastname
     *
     * @Column(name="lastname", type="string", length=100, nullable=true)
     */
    private $lastname;

    /**
     * @var string $employeeNum
     *
     * @Column(name="employee_num", type="string", length=100, nullable=true)
     */
    private $employeeNum;

    /**
     * @var string $username
     *
     * @Column(name="username", type="string", length=200, nullable=false)
     */
    private $username;

    /**
     * @var string $password
     *
     * @Column(name="password", type="string", length=100, nullable=true)
     */
    private $password;

    /**
     * @var string $type
     *
     * @Column(name="type", type="string", length=20, nullable=true)
     */
    private $type;

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
     * @var string $description
     *
     * @Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string $email
     *
     * @Column(name="email", type="string", length=150, nullable=true)
     */
    private $email;

    /**
     * @var boolean $isAllowed
     *
     * @Column(name="is_allowed", type="boolean", nullable=true)
     */
    private $isAllowed;

    /**
     * @var string $locale
     *
     * @Column(name="locale", type="string", length=10, nullable=true)
     */
    private $locale;


}