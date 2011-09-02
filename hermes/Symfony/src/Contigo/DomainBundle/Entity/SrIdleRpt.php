<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\SrIdleRpt
 *
 * @Table(name="sr_idle_rpt")
 * @Entity
 */
class SrIdleRpt
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="sr_idle_rpt_id_seq", allocationSize="1", initialValue="1")
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
     * @var string $idleDurationUnit
     *
     * @Column(name="idle_duration_unit", type="string", length=10, nullable=true)
     */
    private $idleDurationUnit;


}