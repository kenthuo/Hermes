<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\PhoneHistory
 *
 * @Table(name="phone_history")
 * @Entity
 */
class PhoneHistory
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="phone_history_id_seq", allocationSize="1", initialValue="1")
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
     * @var bigint $guardianId
     *
     * @Column(name="guardian_id", type="bigint", nullable=true)
     */
    private $guardianId;

    /**
     * @var string $areacode
     *
     * @Column(name="areacode", type="string", length=4, nullable=true)
     */
    private $areacode;

    /**
     * @var string $number
     *
     * @Column(name="number", type="string", length=15, nullable=true)
     */
    private $number;

    /**
     * @var string $extention
     *
     * @Column(name="extention", type="string", length=10, nullable=true)
     */
    private $extention;

    /**
     * @var string $type
     *
     * @Column(name="type", type="string", length=20, nullable=true)
     */
    private $type;

    /**
     * @var integer $priority
     *
     * @Column(name="priority", type="integer", nullable=true)
     */
    private $priority;

    /**
     * @var bigint $carrierId
     *
     * @Column(name="carrier_id", type="bigint", nullable=true)
     */
    private $carrierId;

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