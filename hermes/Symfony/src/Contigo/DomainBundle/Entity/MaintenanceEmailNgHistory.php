<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\MaintenanceEmailNgHistory
 *
 * @Table(name="maintenance_email_ng_history")
 * @Entity
 */
class MaintenanceEmailNgHistory
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="maintenance_email_ng_history_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $maintenanceId
     *
     * @Column(name="maintenance_id", type="bigint", nullable=true)
     */
    private $maintenanceId;

    /**
     * @var bigint $emailId
     *
     * @Column(name="email_id", type="bigint", nullable=true)
     */
    private $emailId;

    /**
     * @var bigint $notificationSchemeId
     *
     * @Column(name="notification_scheme_id", type="bigint", nullable=true)
     */
    private $notificationSchemeId;

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