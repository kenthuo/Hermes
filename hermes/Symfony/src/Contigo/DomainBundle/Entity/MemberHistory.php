<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\MemberHistory
 *
 * @Table(name="member_history")
 * @Entity
 */
class MemberHistory
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="member_history_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $customerId
     *
     * @Column(name="customer_id", type="bigint", nullable=false)
     */
    private $customerId;

    /**
     * @var boolean $daylightSaving
     *
     * @Column(name="daylight_saving", type="boolean", nullable=true)
     */
    private $daylightSaving;

    /**
     * @var string $username
     *
     * @Column(name="username", type="string", length=20, nullable=false)
     */
    private $username;

    /**
     * @var string $password
     *
     * @Column(name="password", type="string", length=200, nullable=true)
     */
    private $password;

    /**
     * @var string $type
     *
     * @Column(name="type", type="string", length=20, nullable=true)
     */
    private $type;

    /**
     * @var string $firstname
     *
     * @Column(name="firstname", type="string", length=255, nullable=true)
     */
    private $firstname;

    /**
     * @var string $lastname
     *
     * @Column(name="lastname", type="string", length=255, nullable=true)
     */
    private $lastname;

    /**
     * @var string $employeeId
     *
     * @Column(name="employee_id", type="string", length=255, nullable=true)
     */
    private $employeeId;

    /**
     * @var string $phAreacode
     *
     * @Column(name="ph_areacode", type="string", length=4, nullable=true)
     */
    private $phAreacode;

    /**
     * @var string $phNumber
     *
     * @Column(name="ph_number", type="string", length=20, nullable=true)
     */
    private $phNumber;

    /**
     * @var string $phExtension
     *
     * @Column(name="ph_extension", type="string", length=4, nullable=true)
     */
    private $phExtension;

    /**
     * @var string $dateDisplayFormat
     *
     * @Column(name="date_display_format", type="string", length=20, nullable=true)
     */
    private $dateDisplayFormat;

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
     * @var float $timezone
     *
     * @Column(name="timezone", type="float", nullable=true)
     */
    private $timezone;


}