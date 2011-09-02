<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\ScheduledReportEmailNgHistory
 *
 * @Table(name="scheduled_report_email_ng_history")
 * @Entity
 */
class ScheduledReportEmailNgHistory
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="scheduled_report_email_ng_history_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $scheduledReportId
     *
     * @Column(name="scheduled_report_id", type="bigint", nullable=true)
     */
    private $scheduledReportId;

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