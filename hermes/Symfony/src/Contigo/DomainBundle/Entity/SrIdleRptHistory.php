<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\SrIdleRptHistory
 *
 * @Table(name="sr_idle_rpt_history")
 * @Entity
 */
class SrIdleRptHistory
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="sr_idle_rpt_history_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $scheduledReportId
     *
     * @Column(name="scheduled_report_id", type="bigint", nullable=true)
     */
    private $scheduledReportId;

    /**
     * @var integer $idleDuration
     *
     * @Column(name="idle_duration", type="integer", nullable=true)
     */
    private $idleDuration;

    /**
     * @var string $dataOrderByTime
     *
     * @Column(name="data_order_by_time", type="string", length=5, nullable=true)
     */
    private $dataOrderByTime;

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

    /**
     * @var string $idleDurationUnit
     *
     * @Column(name="idle_duration_unit", type="string", length=10, nullable=true)
     */
    private $idleDurationUnit;


}