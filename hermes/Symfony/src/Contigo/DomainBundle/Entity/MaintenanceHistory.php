<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\MaintenanceHistory
 *
 * @Table(name="maintenance_history")
 * @Entity
 */
class MaintenanceHistory
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="maintenance_history_id_seq", allocationSize="1", initialValue="1")
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
     * @var bigint $notificationGroupId
     *
     * @Column(name="notification_group_id", type="bigint", nullable=true)
     */
    private $notificationGroupId;

    /**
     * @var bigint $serviceTypeId
     *
     * @Column(name="service_type_id", type="bigint", nullable=true)
     */
    private $serviceTypeId;

    /**
     * @var bigint $createTimestamp
     *
     * @Column(name="create_timestamp", type="bigint", nullable=true)
     */
    private $createTimestamp;

    /**
     * @var bigint $initialTimestamp
     *
     * @Column(name="initial_timestamp", type="bigint", nullable=true)
     */
    private $initialTimestamp;

    /**
     * @var bigint $departmentId
     *
     * @Column(name="department_id", type="bigint", nullable=true)
     */
    private $departmentId;

    /**
     * @var bigint $xid
     *
     * @Column(name="xid", type="bigint", nullable=true)
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