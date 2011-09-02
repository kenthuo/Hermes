<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\SpeedViolationRpt
 *
 * @Table(name="speed_violation_rpt")
 * @Entity
 */
class SpeedViolationRpt
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="speed_violation_rpt_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $scheduledReportId
     *
     * @Column(name="scheduled_report_id", type="bigint", nullable=true)
     */
    private $scheduledReportId;

    /**
     * @var string $dataGroupBy
     *
     * @Column(name="data_group_by", type="string", length=10, nullable=true)
     */
    private $dataGroupBy;


}